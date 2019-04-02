<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use SoftDeletes;

    public $table = 'rooms';
    public $primaryKey = 'id';
    public $fillable = ['name', 'tables', 'chairs', 'price', 'earnest', 'no_people'];
    public $dates = ['created_at', 'updated_at', 'deleted_at'];
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';
}
