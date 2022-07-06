<?php

namespace App\Http\Controllers;
use App\Models\Comment;
use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comments = Comment::all()->sortByDesc('created_at');
        $articles = Article::all()->sortByDesc('created_at');


        return view('contents', ['articles' => $articles, 'comments' => $comments]);


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $comment = new Comment();
        $comment->comment_title = $request->title;
        $comment->comment_content = $request->content;
        $comment->comment_author = Auth::user()->name;
        $comment->comment_article = $request->article;
        $comment->save();
        return redirect('/articles');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $comments = Comment::all()->sortByDesc('created_at');
        $article = Article::findOrFail($id);
        $paragraphs = preg_split("/\*/", $article->post_text);
        $hashtags = preg_split("/\*/", $article->hashtag);
        return view('article', ['article' => $article, 'paragraph' => $paragraphs, 'hashtag' => $hashtags, 'comments' => $comments]);


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $result = Comment::findOrFail($id)->delete();
        return redirect('/articles');
    }
}
