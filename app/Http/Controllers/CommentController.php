<?php

namespace App\Http\Controllers;
use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function index()
    {
        $comments = Comment::all()->sortByDesc('created_at');
        return view('contents', ['comments' => $comments]);
    }



    public function create(Request $request) {

        $comment = new Comment();
        $comment->title = $request->title;
        $comment->content = $request->content;
        $comment->save();
        return redirect('article');

    }


    public function store(Request $request) {

        $comment = new Comment();
        $comment->title = $request->title;
        $comment->content = $request->content;
        $comment->save();
        return redirect('contents');

    }


    public function update(Request $request, $id) {

        $comment = Comment::find($id);
        $comment->title = $request->title;
        $comment->content = $request->content;
        $comment->save();
        return redirect('article');

    }

    public function show($id)
    {
        //$comment = Comment::findOrFail($id);
        //return view('comments.show', ['Comment' => $comment]);
    }



    public function destroy($id) {


        $result = Comment::findOrFail($id)->delete();
        return redirect('article');
    }

    public function deletecontent($id) {

        $comment = Comment::find($id);
        $comment->content = "";

        $comment->save();

        return redirect('article');
    }



}
