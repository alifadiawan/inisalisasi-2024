<?php

namespace App\Http\Controllers;

use App\Models\FileManager;
use App\Models\SubTask;
use App\Models\TaskGroup;
use Illuminate\Http\Request;
use Illuminate\Support\Benchmark;


class SubTaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $taskGroups = TaskGroup::with('subTasks')->get();
        return view('admin.tugas', compact('taskGroups'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $data = [
             'task_group_id'  =>$request->task_group_id ,
             'task_name' => $request->task_name ,
             'task_description' => $request->task_description ,
             'task_due' => $request->task_due ,
             'active' => 1,
             'isLinks' => $request->isLinks,
        ];
        SubTask::insert($data);
        return redirect()->back()->with('success', 'Tugas Berhasil Ditambahkan');
    }

    public function list_tugas(){
        $images = FileManager::select('id', 'file_path', 'file_links')->get();
        return view('admin.listTugas', compact('images'));
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $data = SubTask::find($id);
        return view('admin.viewTugas', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $taskGroups = TaskGroup::all();
        $data = SubTask::find($id);
        return view('admin.editTugas', compact('data', 'taskGroups'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $data = SubTask::find($id);

        $data->task_group_id = $request->task_group_id;
        $data->task_name = $request->task_name;
        $data->task_description = $request->task_description;
        $data->task_due = $request->task_due;

        $data->save();
        
       return redirect('task')->with('success', 'Tugas ' . $request->task_name. ' Berhasil TERUPDATE');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $sub_task)
    {
        //
    }

    public function delete($id){

        $data = SubTask::find($id);
        $data->delete();

        return redirect()->back()->with('success', 'Tugas Berhasil Dihapus');

    }
}
