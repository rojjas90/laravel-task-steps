<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Estamos fingiendo las tareas
        $tasks = [
            'tarea 1',
            'tarea 2',
            'tarea 3',
            'tarea 4',
            'tarea 5'
        ];

        return view('tasks.list',compact('tasks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tasks.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $task
     * @return \Illuminate\Http\Response
     */
    public function show($task)
    {
        return view('tasks.show',compact('task'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $task
     * @return \Illuminate\Http\Response
     */
    public function edit($task)
    {
        return view('tasks.edit',compact('task'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $task
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $task)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $task
     * @return \Illuminate\Http\Response
     */
    public function destroy($task)
    {
        //
    }
}
