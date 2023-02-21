<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class DashboardController extends Controller
{
    public function dashboard() {

     $listing= Listing::count();
     $users = User::count();
   

        return view('dashboards.dashboard', compact('listing','users'),[
            'listings' => Listing::latest()->filter(request(['tag','search']))->paginate(9)
        ]);

    }

    public function table() {
        return view('dashboards.table');
    }

    public function form() {
        return view('dashboards.form');
    }
    

    /*  */
    
}
