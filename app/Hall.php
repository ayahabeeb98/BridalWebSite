<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hall extends Model
{
    use SoftDeletes;

    public $table = 'halls';
    public $primaryKey = 'id';
    public $fillable = ['name', 'rooms_num', 'image'];
    public $dates = ['created_at', 'updated_at', 'deleted_at'];
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';
}
