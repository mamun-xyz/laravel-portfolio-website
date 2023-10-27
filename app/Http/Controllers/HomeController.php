<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function PersonalInfo()
    {
      $personal_data = json_decode(file_get_contents(storage_path('data/PersonalInfo.json')));
      return view('home')->with('PersonalInfo', $personal_data );
    }
}
