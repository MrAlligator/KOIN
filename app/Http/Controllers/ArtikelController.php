<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArtikelController extends Controller
{
    public function index()
    {
        return view('administrator.artikel.list-artikel', [
            'title' => 'Data Artikel',
            'is_active' => 'art',
            'no' => 1,
            'artikels' => Article::all(),
            'art_count' => Article::count()
        ]);
    }

    public function show(Article $article)
    {
        return view('administrator.artikel.detail-artikel', [
            'title' => 'Detail Artikel',
            'is_active' => 'art',
            'post' => $article
        ]);
    }
}
