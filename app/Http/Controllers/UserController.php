<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.pages.login');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pages.register');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
 
    public function store(Request $request)
    {   
        $request->validate([
            'name' => 'required|unique:users',
            'email' => 'required|unique:users',
            'password' => 'required',
        ]);
        $input = $request->all();
        //print_r($input);exit;
        $input['password'] = Hash::make($input['password']);
        // print_r($input['password']);exit;
       User::create($input);
        return redirect()->route('users.index')
        ->with('success', 'registered successfully.');
    }

    public function cuslogin(Request $request)
    {  
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
        
        $user = User::where('email', $request->email)->first();
        //echo '<pre>'; print_r($user);exit; 
        if (!$user || !Hash::check($request->password, $user->password)) {

            return redirect()->route('users.index')
        ->with('success', 'invalid credentials.');

        }

        return view('backend.pages.dashboard');
       
    }
    public function logout(){

        auth()->logout();
        return redirect()->route('users.index')
        ->with('success', 'logout successfully.');
    }

   
}
