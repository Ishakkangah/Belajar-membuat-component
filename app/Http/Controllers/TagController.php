<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TagController extends Controller
{
    public function show(tag $Tag)
    {   
        return view('task.index', [
        'tasks' => $Tag->tasks()->latest()->paginate(10),
        'Task' => new Task,
        'submit' => 'create',
        'Tag' => $Tag,
    ]);
    }
}
