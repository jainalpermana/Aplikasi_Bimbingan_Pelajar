<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tindakan extends Model
{
    protected $table = 'masalah_tindakan';

    public function identifikasi()
    {
        return $this->belongsTo('App\Identifikasi');
    }

    public function verifikasi()
    {
        return $this->belongsTo('App\Verifikasi');
    }
}
