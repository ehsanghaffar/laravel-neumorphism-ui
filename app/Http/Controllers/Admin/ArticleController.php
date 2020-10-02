<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\article;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\File;

class ArticleController extends Controller
{
    public function articles()
    {
        $articles = Article::query()->orderBy('created_at', 'desc')->get();
        return view('admin.articles.list', ['articles' => $articles]);
    }

    public function view_add()
    {
        return view('admin.articles.add');
    }

    public function add(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'image' => 'required',
            'description' => 'required',
            'rank' => ['required', Rule::in(['1', '2', '3', '4', '5'])],
            'content' => 'required',
        ]);

        $article = Article::query()->create([
            'title' => $request->title,
            'image' => 'test',
            'description' => $request->description,
            'content' => \request('content'),
            'rank' => $request->rank,
            'meta_description' => $request->meta_description,
            'meta_keywords' => $request->meta_keywords,
        ]);

        $image = $request->file('image');
        $filename = $article->id .'_'. time() .'.'. $image->getClientOriginalExtension();
        $image->move('articles', $filename);
        $article->image = $filename;
        $article->save();

        flash('Article updated')->success();
        return redirect(route('viewAddArticle'));
    }
}
