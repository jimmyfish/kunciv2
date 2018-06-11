<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Kunci;
use App\Pengguna;

class Region extends Model
{
    protected $table = 'region';

    protected $fillable = [
        'nama_region',
    ];

    public $timestamps = FALSE;

    public function kunci()
    {
        return $this->hasMany(Kunci::class);
    }

    public function pengguna()
    {
        return $this->hasMany(Pengguna::class);
    }
}
