<?php

namespace App\Http\Controllers;
use App\Models\Asset;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $assets = Asset::paginate(10);
        return view('dashboard',[
            'assets' => $assets
        ]);
    }
}
