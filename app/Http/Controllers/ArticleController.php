<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Http\Requests\StoreArticleRequest;
use App\Http\Requests\UpdateArticleRequest;
use App\Models\Category;
use App\Models\User;


class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $head = '';

        if (request('category')) {
            $category = Category::firstWhere('slug', request('category'));
            $head = 'with ' . $category->name . ' category';
        }
        if (request('author')) {
            $author = User::firstWhere('username', request('author'));
            $head = ' by ' . $author->name;
        }
        return view('articles', [
            'head' => $head,
            'articles' => Article::latest()->filter(request(['search', 'category', 'author']))->paginate(2)->withQueryString(),
            'categories' => Category::latest()->get(),
            'title' => "Articles"
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Article $article)
    {
        return view('article', [
            'article' => $article,
            'title' => "Article Detail"
        ]);
    }
}