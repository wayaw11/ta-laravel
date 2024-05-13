<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Beranda',
            'user' => Auth::user()
        ];
        return view('home.index', $data);
    }
    public function about()
    {
        $data = [
            'title' => 'About',
            'user' => Auth::user()
        ];
        return view('about.index', $data);
    }
}
