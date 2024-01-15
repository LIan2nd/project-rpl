<?php

namespace App\Http\Controllers;

use App\Models\Information;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class AdminInformationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.admin.Informations.index', [
            'informations' => Information::latest()->filter(request(['search']))->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.admin.informations.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        if (Gate::allows('admNCont')) {
            $validatedData = $request->validate([
                'name' => 'required|max:255|min:3',
                'description' => 'required|min:3',
                'location' => 'required|min:3',
                'date' => 'required|date',
                'time' => 'required'
            ]);

            $validatedData['owner'] = Auth::user()->name;
            Information::create($validatedData);
            return redirect()->route('informations.index')->with('create', 'Information created successfully!');
            // return redirect('/dashboard/admin/informations');
        }
        abort(403);
    }

    /**
     * Display the specified resource.
     */
    public function show(Information $information)
    {
        return view('dashboard.admin.Informations.show', [
            'title' => 'Information Detail',
            'information' => $information
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Information $information)
    {
        return view('dashboard.admin.Informations.edit', [
            'title' => 'Edit Information Information',
            'information' => $information,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Information $information)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255|min:3',
            'description' => 'required|min:3',
            'location' => 'required|min:3',
            'date' => 'required|date',
            'time' => 'required'
        ]);

        $validatedData['user_id'] = Auth::user()->id;
        $validatedData['last_edited'] = now();
        $validatedData['slug'] = SlugService::createSlug(Information::class, 'slug', $request->name);
        if (Information::where('slug', $validatedData['slug'])->where('id', '!=', $information->id)->exists()) {
            $uniqueSlug = $validatedData['slug'];
            $counter = 1;
            while (Information::where('slug', $uniqueSlug)->where('id', '!=', $information->id)->exists()) {
                $uniqueSlug = $validatedData['slug'] . '-' . $counter;
                $counter++;
            }
            $validatedData['slug'] = $uniqueSlug;
        }

        $information->update($validatedData);
        return redirect()->route('informations.show', $validatedData['slug'])->with('update', 'Information Event successfully updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Information $information)
    {
        Information::destroy($information->id);
        return redirect('/dashboard/admin/informations')->with('delete', 'Information has been Slainn !!!!');
    }
}