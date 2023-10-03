<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MObatJenis extends Model
{
    use HasFactory;

    protected $fillable = [
        'kode',
        'nama'
    ];
    public function obat()
    {
        return $this->hasMany(Obat::class);
    }
}