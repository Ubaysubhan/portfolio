<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index()
    {
        // You can pass data to your view here
        return view('portfolio.index');
    }
}
