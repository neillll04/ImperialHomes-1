<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard() {
        return view('dashboards.dashboard');
    }

    public function table() {
        return view('dashboards.table');
    }

    public function form() {
        return view('dashboards.form');
    }
}
