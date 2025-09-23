<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function landing()
    {
        $data = [
            'message' => 'Selamat Datang!'
        ];

        return view('landing', $data);
    }
}