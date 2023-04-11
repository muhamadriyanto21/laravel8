<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        $list = Todo::all();
        return view('home', compact($list));
    }
}
