<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RoomImage extends Model
{
    use SoftDeletes;

    public $table = 'booking';
    public $primaryKey = 'id';
    
    public $dates = ['created_at', 'updated_at', 'deleted_at'];
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    public function room(){
        return $this->belongsTo('App\Room');
    }

}
