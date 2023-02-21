<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use App\Models\Dashboard;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class DashboardController extends Controller
{
    // public function dashboard() {
    //     return view('dashboards.dashboard');
    // }

    public function dashboard()
    {
        return view('dashboards.dashboard',[
            'listings' => Listing::latest()->filter(request(['tag','search']))->paginate(9)
        ] );
    }

    public function table() {
        return view('dashboards.table');
    }

    public function form() {
        return view('dashboards.form');
    }
    

    /*  */
    
}
