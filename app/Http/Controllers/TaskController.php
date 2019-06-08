<?php

namespace App\Http\Controllers;

use App\Task;
use App\User;
use App\Project;
use Illuminate\Http\Request;
use Spatie\GoogleSearch\Facades\GoogleSearch;

class TaskController extends Controller
{
    //

    public function index()
    {

       
        // $searchResults = GoogleSearch::getResults('The meaning of life');
        // dd( $searchResults);
        
        $items =Task::with(['user','project'])->get();

        
      
         

        return view('admin.tasks.index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.tasks.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $this->validate($request, Task::rules());

        // dd($request->all());

        Task::create($request->all());
        
      
    //    $projects->tasks()->saveMany($request->all());

         

        return back()->withSuccess(trans('app.success_store'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = Task::findOrFail($id);

        return view('admin.tasks.edit', compact('item'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, Task::rules(true, $id));

        $item = Task::findOrFail($id);

        $item->update($request->all());

        return redirect()->route(ADMIN . '.Tasks.index')->withSuccess(trans('app.success_update'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Task::destroy($id);

        return back()->withSuccess(trans('app.success_destroy')); 
    }
}
