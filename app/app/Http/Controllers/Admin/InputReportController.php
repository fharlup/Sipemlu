<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class InputReportController extends Controller
{
    public function index()
    {
        return view('admin.input_report.index');
    }
}
