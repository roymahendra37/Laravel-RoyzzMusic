<?php

namespace App\Http\Controllers;

use App\Models\Gear;
use App\Models\Reservasi;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $totalGear = Gear::count('id_gears');
        $totalReservasi = Reservasi::count('id_reservasis');
        return view('admin', compact('totalGear', 'totalReservasi'));
    }

}
