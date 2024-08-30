<?php

namespace App\Http\Controllers;

use App\Models\FileManager;
use App\Models\SubTask;
use App\Models\TaskGroup;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index(){
        $allTask = TaskGroup::with('subTasks')->get();
        return view('pages.penugasan.index', compact('allTask'));
    }

    public function show($task_group_name, $id){
        $allTask = TaskGroup::with('subTasks')->get();
        $data = TaskGroup::with('subTasks')->findOrFail($id);
        $subTask = SubTask::findOrFail($id);$subTask = SubTask::findOrFail($id);
        return view('pages.penugasan.detail_penugasan', compact('data', 'allTask', 'subTask'));
    }

    public function task_detail($task_name , $id){
        $uploadedFiles = FileManager::where('SubTask_id', $id)
                                    ->where('user_id', Auth::id())
                                    ->get();

        $subTask = SubTask::findOrFail($id);
        return view('pages.penugasan.subDetail', compact('subTask', 'uploadedFiles'));
    }
}
