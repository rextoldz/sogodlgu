<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AboutController extends Controller
{
    public function __construct()
    {
       	$page = 'About';
    }

    public function index()
    {

        return view('frontend/about/index',[
        	'page' => 'About',
        	'title' => 'About',
        ]);
    }
}
