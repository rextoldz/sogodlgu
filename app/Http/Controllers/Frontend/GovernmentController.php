<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GovernmentController extends Controller
{
    public function index()
    {
        return view('frontend/government/index',[
        	'page' => 'Government',
        	'title' =>'Government | Key officials',
        	'breadcrumb' => 'Key Officials',
        ]);
    }
}
