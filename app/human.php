<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class human extends Model
{
    public $timestamps = false;

    protected $table = 'humans';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id', 'name', 'level'
    ];
}
