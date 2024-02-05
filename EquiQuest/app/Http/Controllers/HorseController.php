<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HorseController extends Controller
{
    public function index()
    {
        
        return view('customer.horses');
    }
}
