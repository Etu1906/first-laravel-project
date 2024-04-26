<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::all();

        return view('articles.index', compact('articles'));
    }

    public function show(Article $article)
    {
        return view('articles.show', compact('article'));
    }

    public function store(Request $request)
    {
        $article = new Article;
        $article->title = $request->input('title');
        $article->body = $request->input('body');
        $article->save();

        return redirect('/articles');
    }

    public function update(Request $request, Article $article)
    {
        $article->title = $request->input('title');
        $article->body = $request->input('body');
        $article->save();

        return redirect('/articles/' . $article->id);
    }

    public function destroy(Article $article)
    {
        $article->delete();

        return redirect('/articles');
    }
}

