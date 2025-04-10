<?php

namespace App\Http\Controllers;

use App\Http\Requests\TaskRequest;
use App\Models\Project;
use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function store(TaskRequest $request, Project $project)
    {

        $priority = $project->tasks()->max('priority', 0) + 1;

        $project->tasks()->create(
            array_merge($request->validated(), ['priority' => $priority])
        );

        return back();
    }

    public function update(TaskRequest $request, Task $task)
    {
        $priority = $task->priority;
        $task->update(['name' => $request->name, 'priority' => $priority]);
        return back();
    }

    public function destroy(Task $task)
    {
        $task->delete();
        return back();
    }


    public function reorder(Request $request)
    {
        foreach ($request->order as $index => $taskId) {
            Task::where('id', $taskId)->update(['priority' => $index]);
        }

        return response()->json(['status' => 'ok']);
    }
}
