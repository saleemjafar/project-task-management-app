<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProjectRequest;
use App\Models\Project;
use App\Models\Task;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::with('tasks')->orderBy('id', 'desc')->get();

        return view('app', compact('projects'));
    }

    public function store(ProjectRequest $request)
    {

        Project::create($request->validated());

        return back();
    }

    public function update(Request $request, Project $project)
    {
        $project->update([$request->validated()]);
        return back();
    }

    public function destroy(Project $project)
    {
        $project->delete();
        return back();
    }
}
