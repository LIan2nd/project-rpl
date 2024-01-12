<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.articles.index', [
            'articles' => Article::where('user_id', Auth::user()->id)->latest()->filter(request(['search']))->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.articles.create', [
            "categories" => Category::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255|min:3',
            'category_id' => 'required',
            'body' => 'required|min:5',
        ]);

        $validatedData['user_id'] = Auth::user()->id;

        Article::create($validatedData);
        return redirect()->route('articles.index')->with('create', 'Event created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Article $article)
    {
        return view('dashboard.articles.show', [
            'article' => $article,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Article $article)
    {
        return view('dashboard.articles.edit', [
            'article' => $article,
            "categories" => Category::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Article $article)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255|min:3',
            'category_id' => 'required',
            'body' => 'required|min:5',
        ]);

        $validatedData['user_id'] = Auth::user()->id;

        $article->update($validatedData);
        return redirect()->route('articles.show', $article->id)->with('udpate', 'Event updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Article $article)
    {
        Article::destroy($article->id);
        return redirect('/dashboard/articles')->with('success', 'Article has been Slainn !!!!');
    }
}
