<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    
    protected $fillable = ['name', 'description', 'task_project_id'];


    public static function generateSlug()
    {
        return uniqid(time());
    }
}
