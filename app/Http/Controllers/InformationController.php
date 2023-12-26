<?php

namespace App\Http\Controllers;

use App\Models\Information;
use App\Http\Requests\StoreInformationRequest;
use App\Http\Requests\UpdateInformationRequest;

class InformationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('informations', [
            'informations' => Information::latest()->filter(request(['search']))->paginate(7)->withQueryString()
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Information $information)
    {
        return view('information', [
            'information' => $information,
            'informations' => Information::latest()->get()
        ]);
    }
}