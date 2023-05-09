<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        $projects = Project::select('id', 'name')->get();
        if(request()->has('project_id')) {
            $sorting = Task::orderBy('priority', 'ASC')
            ->select('id', 'name', 'created_at')
            ->where('project_id', request()->project_id)
            ->where('project_id','!=', null)
            ->get();
        }else {
            $sorting = Task::orderBy('priority', 'ASC')->select('id', 'name', 'created_at')->get();
        }
        return view('index', compact('sorting', 'projects'));
    }

    public function store()
    {
        $validated = request()->validate([
            'name' => 'required|max:255',
        ]);

        $task = new Task();
        $task->name = request()->name;
        $task->project_id = request()->project_id;
        $task->priority = request()->priority;
        $task->save();

        return redirect()->back();
    }

    public function update()
    {
        $task = Task::find(request()->id);
        $task->name = request()->name;
        $task->project_id = request()->project_id;
        $task->priority = request()->priority;
        $task->save();

        return redirect()->route('home');
    }

    public function edit($id)
    {
        $task = Task::find($id);
        $projects = Project::select('id', 'name')->get();
        return view('tasks.edit', compact('task', 'projects'));
    }

    public function delete($id)
    {
        Task::where('id', $id)->delete();
        return redirect()->route('home');
    }

    public function updateOrder(Request $request)
    {
        $sorting = Task::all();
        foreach ($sorting as $sort) {
            foreach ($request->sort as $item) {
                if ($item['id'] == $sort->id) {
                    $sort->update(['priority' => $item['position']]);
                }
            }
        }
        return response('Update Successfully.', 200);
    }
}
