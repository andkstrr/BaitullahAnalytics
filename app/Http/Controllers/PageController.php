<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function dashboardBCI()
    {
        return view('pages.BCI.dashboard');
    }

    public function monitoring()
    {
        return view('pages.BCI.monitoring');
    }

    public function monitoring_users()
    {
        return view('pages.BCI.users');
    }

    public function monitoring_pages()
    {
        return view('pages.BCI.pages');
    }
}
