<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Type;
use App\Models\Technology;

class ProjectController extends Controller
{
    public function index(){

        $projects = Project::orderBy('id')->with('type', 'technologies')->get();

        return response()->json($projects);
        dd($projects);
    }

    public function types(){

        $types = Type::all();

        return response()->json($types);
    }

    public function technologies(){

        $technologies = Technology::all();

        return response()->json($technologies);
    }
}
