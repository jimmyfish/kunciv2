<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Region;

class Pengguna extends Model
{
    protected $table = 'pengguna';

    public $timestamps = FALSE;

    public function region()
    {
        return $this->belongsTo(Region::class);
    }
}
