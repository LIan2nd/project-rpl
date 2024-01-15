<?php

namespace App\Http\Controllers;

use App\Models\Information;
use App\Models\Registration;
use App\Models\User;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function index(Information $information, Registration $registration)
    {
        $information_id = $information->id;
        return view('dashboard.admin.Informations.registered.index', [
            'title' => 'All Registered User',
            'registeredUsers' => Registration::where('information_id', $information_id)->get(),
            'information' => $information
        ]);
    }
    public function store(Request $request)
    {
        $data = [
            'user_id' => Auth()->user()->id,
            'information_id' => $request->information_id,
            'slug' => $request->slug
        ];

        Registration::create($data);
        return redirect()->route('user.informations.show', $request->slug)->with('success', 'Registrasi berhasil silahkan catat tanggal dan tempatnya. Kami Tunggu kehadiranmuu!');
    }
}