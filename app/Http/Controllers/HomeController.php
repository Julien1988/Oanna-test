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
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $json = storage_path('db-storage/test-oanna.json');
        $content = json_decode(file_get_contents($json), true);
        
        
      

        return view('welcome', [
            'content' => $content,
        ]);
    }
}
