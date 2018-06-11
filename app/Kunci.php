<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\DataPinjaman;
use App\Region;

class Kunci extends Model
{
    protected $table = 'kunci';

    public $timestamps = FALSE;

    public function dataPinjaman()
    {
        return $this->hasMany(DataPinjaman::class);
    }

    public function region()
    {
        return $this->belongsTo(Region::class);
    }
}
