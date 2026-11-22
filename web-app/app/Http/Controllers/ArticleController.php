<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    // Menampilkan semua artikel
    public function index()
    {
        $article = Article::all();

        return response()->json($article);
    }

    // Form tidak digunakan dalam RESTful API
    public function create()
    {
        //
    }

    // Menambahkan artikel
    public function store(Request $request)
    {
        $article = Article::create($request->all());

        return response()->json($article);
    }

    // Menampilkan satu artikel berdasarkan ID
    public function show(Article $article)
    {
        return response()->json($article);
    }

    // Form tidak digunakan dalam RESTful API
    public function edit(Article $article)
    {
        //
    }

    // Mengubah artikel
    public function update(Request $request, Article $article)
    {
        $article->update($request->all());

        return response()->json($article);
    }

    // Menghapus artikel
    public function destroy(Article $article)
    {
        $article->delete();

        return response()->json([
            'message' => 'Artikel berhasil dihapus'
        ]);
    }
}
