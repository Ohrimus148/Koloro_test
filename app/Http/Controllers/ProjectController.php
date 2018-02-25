<?php

namespace App\Http\Controllers;
use App\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::all();
        return view('projects.index', compact('projects'));
    }

    public function store(Request $request)
    {
        Project::create($request->all());
        return back();
    }

    public function edit($id)
    {
        $project = Project::find($id);
        return $project;
    }

    public function update(Request $request)
    {
        $project = Project::find($request->id);
        $project->update($request->all());
        return back();
    }
}
