<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Hall extends Model
{
    use SoftDeletes;

    public $table = 'halls';
    public $primaryKey = 'id';
    public $fillable = ['name', 'rooms_num', 'image'];
    public $dates = ['created_at', 'updated_at', 'deleted_at'];
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    public function user(){
        return $this->belongsTo('App\user');
    }

    public function rooms(){
        return $this->hasMany('App\Room');
    }

    public function category(){
        return $this->belongsTo('App\Category');
    }

}
