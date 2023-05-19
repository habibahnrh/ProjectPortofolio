<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pelanggans extends Model
{
    protected $table = "pelanggans";
    protected $fillable = [
        'id', 'nama', 'tgldftr', 'alamat', 'email', 'notelp'
    ];
}
