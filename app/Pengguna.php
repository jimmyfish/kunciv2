<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengguna extends Model
{
    protected $table = 'pengguna';

    public $timestamps = FALSE;

    protected $fillable = [
        'nama',
    ];
}
