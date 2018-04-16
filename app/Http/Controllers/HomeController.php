<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use LaraFlash;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      LaraFlash::add()->content('Yea it worked')->priority(6)->type('info');
      LaraFlash::success('Hellow world');
      LaraFlash::snackbar('Click to continue');
      LaraFlash::danger('Boom it did not work');
        return view('home');
    }
}
