<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RoomImage extends Model
{
    use SoftDeletes;

    public $table = 'room_images';
    public $primaryKey = 'id';
    public $fillable = ['image'];
    public $dates = ['created_at', 'updated_at', 'deleted_at'];
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';
}
