<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Education;
use App\Models\User;
use App\Models\Work;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
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

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'gender' => ['required', 'string'],
            'PhoneNumber' =>['required', 'string', 'max:16', 'unique:users'],
            'address' => ['required', 'string', 'max:1000'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'gender' => $data['gender'],
            'PhoneNumber' => $data['PhoneNumber'],
            'address' => $data['address'],
            'password' => Hash::make($data['password']),
        ]);
    }

    public function create_education(Request $request)
    {
        $input = $request->all();
        Education::create([
            'degree' => $input['degree'],
            'begin' => $input['begin'],
            'end' => $input['end']
        ]);
        return redirect()->route('home')->with('success', 'education log recorded successfully!');
    }

    public function create_work(Request $request)
    {
        $input = $request->all();

        //cheking the input to replace the empty fields with '-'
        if(empty($input['first_work'])) {$input['first_work'] = '-';}
        if(empty($input['first_work'])) {$input['second_work'] = '-';}
        if(empty($input['first_work'])) { $input['third_work'] = '-';}
        if(empty($input['first_work'])) { $input['fourth_work'] = '-';}
        if(empty($input['first_work'])) { $input['first_project'] = '-';}
        if(empty($input['first_work'])) { $input['second_project'] = '-';}
        if(empty($input['first_work'])) { $input['third_project'] = '-';}
        if(empty($input['first_work'])) { $input['fourth_project'] = '-';}

        Work::create([
            'first_work' => $input['first_work'],
            'second_work' => $input['second_work'],
            'third_work' => $input['third_work'],
            'fourth_work' => $input['fourth_work'],
            'first_project' => $input['first_project'],
            'second_project' => $input['second_project'],
            'third_project' => $input['third_project'],
            'fourth_project' => $input['fourth_project']
        ]);
        return redirect()->route('home')->with('success', 'work experiance recorded successfully!');
    }
}
