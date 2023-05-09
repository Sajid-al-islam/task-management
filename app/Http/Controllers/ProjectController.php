<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::get();
        return view('projects.index', compact('projects'));
    }

    public function create()
    {
        return view('projects.create');
    }

    public function store()
    {
        $validated = request()->validate([
            'name' => 'required|max:255',
        ]);

        $project = new Project();
        $project->name = request()->name;
        $project->save();

        return redirect()->route('projects');
    }

    public function edit($id)
    {
        $project = Project::find($id);
        return view('projects.edit', compact('project'));
    }

    public function update()
    {
        $project = Project::find(request()->id);
        $project->name = request()->name;
        $project->save();

        return redirect()->route('projects');
    }

    public function delete($id)
    {
        Project::where('id', $id)->delete();
        return redirect()->route('projects');
    }
}
