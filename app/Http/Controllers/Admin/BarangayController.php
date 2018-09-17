<?php

namespace App\Http\Controllers\admin;

use App\Barangay;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BarangayController extends Controller
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
        $barangays = Barangay::orderby('id')->paginate(15);
        return view('admin.barangay.index',[
            'title' => 'Barangay',
            'page' => 'barangay',
            'barangays' => $barangays
        ]);
    }

    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            $barangay = new Barangay();
            $barangay->name = $request->input('name');
            $barangay->captain = $request->input('captain');
            $barangay->cellnumber = $request->input('cellnumber');
            $barangay->telnumber =  $request->input('telnumber');
            $barangay->published_by = Auth::guard('admin')->user()->name;
            
            if($barangay->save()){
                return redirect()->back()->with('success', 'Successfully Added');
            }else{
                return redirect()->back()->with('error', 'Error');
            }
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
