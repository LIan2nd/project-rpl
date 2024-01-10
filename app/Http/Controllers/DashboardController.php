<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Information;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard.index', [
            'title' => 'Main',
            'articles' => Article::all()
        ]);
    }
}