<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DugaanSengketaController extends Controller
{
    public function index()
    {
        return view('admin.dugaan_sengketa.index');
    }
}
