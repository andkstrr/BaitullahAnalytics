<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function dashboardBCI()
    {
        return view('pages.BCI.dashboard');
    }
}
