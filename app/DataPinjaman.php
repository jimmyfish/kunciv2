<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Kunci;
use App\Pengguna;

class DataPinjaman extends Model
{
    protected $table = 'data_pinjaman';

    public $timestamps = FALSE;

    /**
     * Menerangkan bahwa kolom 'kunci_id' pada data_pinjaman.
     * milik entity Kunci.
     * 
     */
    public function kunci()
    {
        return $this->belongsTo(Kunci::class);
    }

    /**
     * Menerangkan bahwa kolom 'pengguna_id' pada data_pinjaman.
     * milik entity Pengguna.
     * 
     */
    public function pengguna()
    {
        return $this->belongsTo(Pengguna::class);
    }
}
