<?php

namespace App\Http\Controllers\admin;

use App\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;


class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
         /** @var User $user */
       
           $validatedData = $request->validate([
                'email'     => 'required|string|email|max:255|unique:admins',
            ]);
       
            $password1 = $request->password;
            $password2 = Auth::guard('admin')->user()->password;
            
            if(Hash::check($password1,$password2)){
                Admin::whereId($id)->update($validatedData);
            }else{
                return redirect()->back()->withErrors('message', 'Invalid password.');
            }
            return redirect()->back()->with('message', 'Successfully Updated account.');
    }

    public function updatepwd(Request $request, $id)
    {
         /** @var User $user */
       
           $validatedData = $request->validate([
              'password'  => 'required|string|min:6|confirmed',
            ]);
       
            $password1 = $request->password_current;
            $password2 = Auth::guard('admin')->user()->password;
            
            if(Hash::check($password1,$password2)){
                Admin::whereId($id)->update($validatedData);
            }else{
                return redirect()->back()->withErrors('message', 'Invalid password.');
            }
            return redirect()->back()->with('message', 'Successfully Updated password');
    }
    /*
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
