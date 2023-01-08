<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bookingan extends Model
{
    use HasFactory;
    protected $table = 'bookingan';
    protected $fillable = [
        'tanggal_main',
        'jam_main',
        'id_user',
        'id_lapangan',
    ];
    public $timestamps = false;
}