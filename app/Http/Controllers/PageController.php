<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function dashboard() { return view('pages.dashboard'); }

    public function notification() { return view('pages.notification'); }

    public function monitoring() { return view('pages.monitoring'); }

    public function monitoring_users() { return view('pages.users'); }

    public function monitoring_application() { return view('pages.application'); }

    public function report() { return view('pages.report'); }
}
