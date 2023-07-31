<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RiwayatKonsultasi extends Model
{
    use HasFactory;
    protected $fillable = [
        'cat_name',
        'age',
        'gejala_ids',
        'hasil_deteksi',
        'nama_penyakit',
        'penanganan',
    ];
    public function gejala()
{
    return $this->hasMany(Gejala::class, 'id', 'gejala_id');
}

}
