<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservasi extends Model
{
    use HasFactory;
    protected $table = 'reservasis';
    protected $primaryKey = 'id_reservasis';
    public $incrementing = true;
    protected $fillable = ['tanggal', 'jam', 'durasi','nama','paket','total'];
    public $timestamps = false;
}
