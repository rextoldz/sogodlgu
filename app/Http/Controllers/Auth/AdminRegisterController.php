<?php

namespace App\Http\Controllers\Auth;

use App\Notifications\UserRegisteredSuccessfully;
use App\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class AdminRegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */    
  
    use RegistersUsers;
    
    protected $redirectTo = '/admin';
    
    public function showRegistrationForm()
    {
        return view('admin.auth.register', [
            'title' => 'SogodLGU',
            'page' => 'Register'
        ]);
    }

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
   

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
       // $this->middleware('auth:admin');
    }

    /**
     * Register new account.
     *
     * @param Request $request
     * @return User
     */
    protected function register(Request $request)
    {
        /** @var User $user */

        $validatedData = $request->validate([
            'email'     => 'required|string|email|max:255|unique:admins',
            'username'  => 'required|string|min:6|max:255|unique:admins',
            'password'  => 'required|string|min:8|confirmed',
        ]);
        try {
            $validatedData['name']              = $request->input('firstname').' '.$request->input('lastname');
            $validatedData['password']          = bcrypt(array_get($validatedData, 'password'));
            $validatedData['activation_code']   = str_random(30).time();
            $admin                              = Admin::create($validatedData);
        } catch (\Exception $exception) {
            logger()->error($exception);
       
            return redirect()->back()->with('message', 'Unable to create new user.');
        }
        $admin->notify(new UserRegisteredSuccessfully($admin));
        return redirect()->back()->with('message', 'Successfully created a new account. Please check your email and activate your account.');
    }
    /**
     * Activate the user with given activation code.
     * @param string $activationCode
     * @return string
     */
    public function activateUser(string $activationCode)
    {
        try {
            $admin = app(Admin::class)->where('activation_code', $activationCode)->first();
            if (!$admin) {
                return "The code does not exist for any user in our system.";
            }
            $admin->status          = 1;
            $admin->activation_code = null;
            $admin->save();
            // AdminLogin()->login($admin);
        } catch (\Exception $exception) {
            logger()->error($exception);
            return "Whoops! something went wrong.";
        }
        return redirect()->to('/admin');
    }
}
