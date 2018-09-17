<?php

namespace App\Http\Controllers\Admin;

use Carbon\Carbon;
use App\Events;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EventsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function showForm()
    {     
        $events = Events::paginate(10);
        return view('admin.events.index',[
            'title' => 'Events',
            'page' => 'events',
            'events' => $events
        ]);
    }

    public function index()
    {
        return Events::paginate(10)->jsonSerialize();      
        // return Events::paginate(10)->jsonSerialize();      
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
            $crud = new Events();
            $crud->photo ='anniv.png';
            $crud->title = 'Sogod Founding Anniversary Concert';
            $crud->descriptions = 'secret';
            $crud->venue = 'Sogod Covered Court';
            $crud->date = Carbon::now();
            $crud->time = time('h:i:s');
            $crud->save();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            $events = new Events();
            $events->photo = $request->input('photo');
            $events->title = $request->input('title');
            $events->descriptions = $request->input('descriptions');
            $events->venue =  $request->input('venue');
            $events->startingdate = $request->input('startingdate');
            $events->enddate =  $request->input('enddate');
            $events->save();

            return redirect()->back()->with('message', 'Successfully created a new account. Please check your email and activate your account.');
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
