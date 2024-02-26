<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Project;
use App\Models\Type;
use App\Models\Technology;

class ProjectController extends Controller
{
 public function index(){

    $projects = Project :: all();

return view('pages.project.index', compact('projects'));


 }


 public function create(){

    $types = Type :: all();
    $technologies = Technology :: all();

    return view('pages.project.create', compact('types', 'technologies'));
 }

 public function store(Request $request) {

    $data = $request -> all();


    $type = Type :: find($data['type_id']);

    $project = new Project();
    $project -> name = $data['name'];


    $project -> type() -> associate($type);

    $project -> save();

    $project -> technologies() -> attach($data['technology_id']);

    return redirect() -> route('project.index');
}

}
