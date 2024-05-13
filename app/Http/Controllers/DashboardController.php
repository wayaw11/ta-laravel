<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Dashboard',
            'user' => Auth::user(),
            'products' => Products::all(),
            'categories' => Categories::all(),
        ];
        return view('dashboard.index', $data);
    }
}
