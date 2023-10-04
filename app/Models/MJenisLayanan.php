<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MJenisLayanan extends Model
{
    use HasFactory;
    public function layanan()
    {
        return $this->hasMany(MLayanan::class);
    }
}