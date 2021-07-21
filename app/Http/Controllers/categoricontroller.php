<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\categori;

class categoricontroller extends Controller
{

    public function index()
    {
        $rows = categori::all();
        return view('categori.index', compact('rows'));
    }

    public function create()
    {
        return view('categori.add')
    }
   
}