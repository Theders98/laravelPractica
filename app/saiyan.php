<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class saiyan extends Model
{
    public $timestamps = false;

    protected $table = 'saiyans';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id', 'name', 'type', 'level'
    ];
}
