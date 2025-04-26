<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class TaskController extends Controller
{
    public function saveTask(Request $request)
    {

        
        $user = Auth::user();
        $request->validate([
            'taskname' =>   ['required','string'],
            'taskdesc' => ['required','string'],
            'email' => ['required','string','email'],
            'startdate' => ['required'],
            'deadline' => ['required'],
        ]);
        $task = new Task;
        $task->name = $request->taskname;
        $task->description = $request->taskdesc;
        $task->task_assigned_to = $request->email;
        $task->startdate = date('Y-m-d', strtotime($request->startdate));
        $task->deadline = date('Y-m-d', strtotime($request->deadline));
        $task->status = 'pending';
        $task->user_id = $user->id;
        $task->slug = Task::generateSlug();
        $result = $task->save();
        if ($result) {
            return redirect()->route('dashboard')->with("message","You have successfully created task");
        } else {
            return back();
        }

    }
}
