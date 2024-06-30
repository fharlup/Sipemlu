<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class JenisPemilihanController extends Controller
{
    public function index()
    {
        return view('admin.jenis_pemilihan.index');
    }
}
