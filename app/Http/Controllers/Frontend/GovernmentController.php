<?php

namespace App\Http\Controllers\Frontend;

use App\Barangay;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GovernmentController extends Controller
{
	public function __construct()
    {
       	$page = 'Government';
    }

    public function keyofficials()
    {
        return view('frontend/government/keyofficials',[
        	'page' => 'Government',
        	'title' =>'Government | Key officials',
        	'breadcrumb' => 'Key Officials',
        ]);
    }
    public function offices()
    {
        return view('frontend/government/offices',[
        	'page' => 'Government',
        	'title' =>'Government | Offices',
        	'breadcrumb' => 'Offices',
        ]);
    }
    public function barangay()
    {

    	$barangays = Barangay::paginate(5);

        return view('frontend/government/barangay',[
        	'page' => 'Government',
        	'title' =>'Government | Barangay',
        	'breadcrumb' => 'Barangay',
        	'barangays' => $barangays,
        ]);
    }
}
