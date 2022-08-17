<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Konsultasi extends Model
{
    use HasFactory;

    protected $table = "konsultasi";
    protected $primaryKey = "id";
    protected $fillable = [
        'idPasien', 'penyakit', 'idDokter', 
    ];

    public $timestamps = false;
}
