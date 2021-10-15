<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // $data['variableone'] = 'The value of variable one.';
        // return view('home', $data);
        // return view('helloworld')->with(['variableone' => $variableone, 'variabletwo' => $variabletwo]);

        return view('home');

    }

}
  