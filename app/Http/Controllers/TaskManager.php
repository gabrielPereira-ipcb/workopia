<?php

namespace App\Http\Controllers;

use App\Models\Tasks;
use Illuminate\Http\Request;

class TaskManager extends Controller
{
    function listTask()
    {
        $tasks = Tasks::where("status", NULL)->paginate(5);
        return view('welcome', compact("tasks"));
    }
    function addTask()
    {
        return view('tasks.add');
    }

    function addTaskPost(Request $request)
    {
        $request->validate([
            "title" => "required",
            "description" => "required",
            "deadline" => "required",
        ]);

        $task = new Tasks();
        $task->title = $request->title;
        $task->description = $request->description;
        $task->deadline = $request->deadline;
        

        if ($task -> save()){
            return redirect(route("home"))->with("success", "Task added successfully");
        }
        return redirect(route("task.add"))->with("error", "Task not added");
        // Save the task to the database
        // Task::create($request->all());

        
    }
    function updateTaskStatus($id)
    {
        if (Tasks::where("id", $id)->update([
            "status" => "completed"
        ])) {
            return redirect(route("home"))->with("success", "Task completed");
        }
        return redirect(route("home"))->with("error", "Error occured while updating task"); 
    }
    function deleteTask($id)
    {
        if (Tasks::where("id", $id)->delete()) {
            return redirect(route("home"))->with("success", "Task deleted");
        }
        return redirect(route("home"))->with("error", "Error occured while deleting task");
    }
}
