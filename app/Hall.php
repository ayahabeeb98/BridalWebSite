<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Hall extends Model
{
    use SoftDeletes;

    public $table = 'halls';
    public $primaryKey = 'id';
    public $fillable = ['name','address', 'rooms_num' ,'category_id', 'image','manager_id'];
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

    public function getImage()
    {
        if (!$this->image)
            return asset('no_image.png');
        return asset($this->image);
    }

}
