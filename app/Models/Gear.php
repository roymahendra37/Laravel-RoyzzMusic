<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gear extends Model
{
    use HasFactory;
    protected $table = 'gears';
    protected $primaryKey = 'id_gears';
    public $incrementing = true;
    protected $fillable = ['jenis', 'tipe', 'merk','harga'];
    public $timestamps = false;
}
