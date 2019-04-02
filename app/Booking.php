<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use SoftDeletes;

    public $table = '';
    public $primaryKey = 'id';
    public $fillable = ['location'];
    public $dates = ['created_at', 'updated_at', 'deleted_at'];
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    public function user(){
        return $this->belongsTo('App\User');
    }

    public function room(){
        return $this->belongsTo('App\Room');
    }
}
