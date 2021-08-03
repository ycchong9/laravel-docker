<?php

namespace App\Http\Controllers;

use DB;

class TestController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function testfunc(){
      $a = DB::table("api_log")->limit(10)->get();

      dd($a);
    }
}
