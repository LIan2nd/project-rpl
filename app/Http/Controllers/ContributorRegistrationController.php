<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ContributorRegistrationController extends Controller
{
    public function index()
    {
        return view('register.contributor.index', [
            'title' => "Contributor Register",
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'username' => 'required|min:3|max:255|unique:users',
            'email' => 'required|unique:users',
            'password' => 'required|min:5|max:255'
        ]);

        $validatedData['role_id'] = 2;
        $validatedData['contributor'] = "false";
        $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData);

        return redirect('/login')->with('success', 'Registration as Contributor Successfully! Please Login');
    }
}