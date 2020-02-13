<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class villan extends Model
{
    public $timestamps = false;

    protected $table = 'villans';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id', 'name', 'race', 'level'
    ];
}
