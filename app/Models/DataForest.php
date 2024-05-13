<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataForest extends Model
{
    use HasFactory;

    protected $table = 'data_forest'; // Nama tabel yang sesuai dengan struktur database Anda

    protected $fillable = [
        'tree',
        'soil_moisture',
        'temperature',
        'humidity',
        'gas'
    ]; // Kolom-kolom yang dapat diisi secara massal
}

