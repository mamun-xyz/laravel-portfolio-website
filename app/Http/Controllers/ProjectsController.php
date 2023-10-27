<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectsController extends Controller
{
   public function Project()
   {
    $project = json_decode(file_get_contents(storage_path('data/projects.json')));
    return view('project')->with('Projects', $project);
   }
}
