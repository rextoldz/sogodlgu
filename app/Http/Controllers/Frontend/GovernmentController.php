<?php

namespace App\Http\Controllers\Frontend;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Barangay;
use Faker\Generator;

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
    public function barangay(Generator $faker)
    {
            // $crud = new Barangay();
            // $crud->name =$faker->lexify('????????');
            // $crud->captain = $faker->lexify('????????');
            // $crud->cellnumber = $faker->lexify('????????');
            // $crud->telnumber = $faker->lexify('????????');
            // $crud->save();

            $barangays = Barangay::paginate(10);
        return view('frontend/government/barangay',[
        	'page' => 'Government',
        	'title' =>'Government | Barangay',
        	'breadcrumb' => 'Barangay',
        	'barangays' => $barangays,
        ]);
    }
    public function viewbarangay(Request $request)
    {
        
    }
}
