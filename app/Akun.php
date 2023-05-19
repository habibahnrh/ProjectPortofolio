<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Akun extends Model
{
    protected $table = "akun";
    protected $fillable = [
        'id', 'kdbrg', 'nmbrg', 'harga', 'jnsbrg'
    ];
}
