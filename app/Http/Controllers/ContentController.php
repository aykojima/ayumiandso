<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ContentController extends Controller
{
    public function home()
    {
        $data = [];
        $data['title'] = 'Ayumi Kojima + So Ihara'; 
        $data['logged_in'] = 0;

          if (Auth::check()) {
            $data['logged_in'] = 1;
          }

        return view('contents/home', $data);
    }
}
