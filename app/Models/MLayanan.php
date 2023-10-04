<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MLayanan extends Model
{
    use HasFactory;
    public function jenis()
    {
        return $this->belongsTo(MJenisLayanan::class);
    }
}