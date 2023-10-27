<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SingleProjectViewController extends Controller
{
    public function SingleProject($id)
    {
        $project_details = json_decode(file_get_contents(storage_path('data/projects.json')));
       $data = count(($project_details->project));
       
        if(!($id < 1 ||  $id == 0 || $id > $data) )
        {
            $project_id[] = $id;
            $data = [
                "project_details" => $project_details, 
                "project_id" => $project_id
            ];
    
           return view('single-project-view')->with('Data', $data);
        }else{
            echo "404 page";
        }
        

    }
}
