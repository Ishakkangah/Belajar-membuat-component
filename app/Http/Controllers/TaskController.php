<?php

namespace App\Http\Controllers;

use App\Http\Requests\ListRequest;
use App\Models\Tag;
use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TaskController extends Controller
{
    public function index()
    {
        return view('task.index', [ 
             'tasks' => DB::table('tasks')->orderByDesc('id')->paginate(10),
             'tasks_result' => DB::table('tasks')->get(),
             'Task' => new Task,
             'submit' => 'create',
            ]);
        // return view('task.index', ['tasks' => DB::table('tasks')->orderByDesc('id')->get()]);
    }

    public function show(Task $Task, Tag $Tag )
    {
        return view('task.show', compact(['Task']));
    }

    public function store(ListRequest $ListRequest)
    {
        $task['list'] = request('list');
        auth()->user()->tasks()->create($task);

        return back()->with('status', 'data was inserted');
    }

    public function edit(Task $Task)
    {   
        $submit = 'update';
        $Task = DB::table('tasks')->where('id', $Task->id)->first();
        return view('task.edit', compact(['Task', 'submit']));
    }

    public function update(Request $Request,  Task $task, ListRequest $ListRequest)
    {
        $this->authorize('update', $Task);
        DB::table('tasks')->where('id', $Task->id)->update(['list' => $Request->list]);
        return redirect('task')->with('status', 'This data was updated');
    }

    public function delete(Task $Task)
    {
        $this->authorize('delete', $Task);
        DB::table('tasks')->where('id', $Task->id)->delete();
        return redirect('task')->with('status', 'This data was deleted');
    }
}