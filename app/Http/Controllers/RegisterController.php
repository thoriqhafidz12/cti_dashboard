<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Session;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view ('auth/register');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function register(Request $request)
    {
        $user = User::create([
            'full_name'=>$request->full_name,
            'email'=>$request->email,
            'password'=>Hash::make($request->password)
        ]);
        Session::flash('message','Register Berhasil dilakukan');
        return redirect('/dashboard');
    }
}
