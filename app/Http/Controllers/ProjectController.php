<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class ProjectController extends Controller
{    
    public function saveProject(Request $request)
    {

        
        $user = Auth::user();
        $request->validate([
            'projectname' =>   ['required','string'],
            'projectdesc' => ['required','string'],
            'startdate' => ['required'],
            'deadline' => ['required'],
        ]);
        $project = new Project;
        $project->name = $request->projectname;
        $project->description = $request->projectdesc;
        $project->startdate = date('Y-m-d', strtotime($request->startdate));
        $project->deadline = date('Y-m-d', strtotime($request->deadline));
        $project->status = 'pending';
        // $project->user_id = auth()->id();
        $project->user_id = $user->id;
        $project->slug = Str::slug($request->projectname) . '-' . Str::random(6);
        $result = $project->save();
        if ($result) {
            return redirect()->route('dashboard')->with("message","You have successfully created project");
        } else {
            return back();
        }

    }

    public function viewProject()
    {
        $projects = Auth::user()->projects;

        return view('projectlist', compact('projects'));
    }

    
     public function creatTask(Project $project){
        
            return view('managingtask', [
                'project_id' => $project->id,
                'project_slug' => $project->slug
            ]);
        
        }
    
}
