<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kunci extends Model
{
    protected $table = 'kunci';

    protected $fillable = [
        'nama_lokasi',
    ];

    public $timestamps = FALSE;
}
