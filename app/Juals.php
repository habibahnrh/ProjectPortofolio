<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Juals extends Model
{
    protected $table = "juals";
    protected $fillable = [
        'id', 'nokk', 'tglkk','jmkk'
    ];
}
