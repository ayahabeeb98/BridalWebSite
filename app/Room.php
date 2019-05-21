<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Room extends Model
{
    use SoftDeletes;

    public $table = 'rooms';
    public $primaryKey = 'id';
    public $fillable = ['name', 'tables', 'chairs', 'price', 'earnest', 'no_people'];
    public $dates = ['created_at', 'updated_at', 'deleted_at'];
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    public function bookings(){
        return $this->hasMany('App\Booking');
    }

    public function roomImages(){
        return $this->hasMany('App\RoomImage');
    }

    public function hall(){
        return $this->belongsTo('App\Hall');
    }
    public function getImage(){
        if (!$this->image){
            return asset('no_image.png');}
        return assert($this->image);


    }

}
