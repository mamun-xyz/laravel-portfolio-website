<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExperienceController extends Controller
{
    public function Experience()
    {
        $experience_data = json_decode(file_get_contents(storage_path('data/experience.json')));
        return view('experience', compact('experience_data'));
    }
}
