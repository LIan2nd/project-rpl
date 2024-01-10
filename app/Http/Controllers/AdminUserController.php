<?php

namespace App\Http\Controllers;

use App\Models\Information;
use App\Models\User;
use Illuminate\Http\Request;

class AdminUserController extends Controller
{
    public function index()
    {
        return view('dashboard.admin.users.index', [
            'users' => User::all()
        ]);
    }

    public function contValidate(Request $request, $id)
    {
        $validatedData = $request->validate([
            'contributor' => 'required'
        ]);

        $user = User::find($id);
        $user->update($validatedData);
        return redirect('/dashboard/admin/users')->with('success', 'User validated');
    }
}