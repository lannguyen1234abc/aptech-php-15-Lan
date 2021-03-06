<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;
use App\Post;
class PostCommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comments = Comment::with('post')->get();
        return view('postcomment.index', ['comments'=>$comments]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('postcomment.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /*$comment = Comment::create(['comment' => $request ->comment, 'post_id' => $request->post_id])->post()->create(['title' => $request ->title, 'description' => $request ->description,'content' => $request ->content]);*/
        //$comments = Comment::with('post')->find($id->id);

        $comment = Comment::create(['comment' => $request ->comment, 'post_id' => $request->post_id]);

        return redirect()->route('postcomment.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Comment $id)
    {
        $comment = Comment::with('post')->find($id->id);
        return view('postcomment.show', ['comment'=> $comment]);    
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Comment $id)
    {
        $comment = Comment::with('post')->find($id->id);
        return view('postcomment.edit', ['comment'=>$comment]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Comment $id)
    {
        $comment = Comment::with('post')->find($id->id);
        $comment->update([
            'comment'=>$request->comment,
            'post_id'=>$request->post_id
        ]);
        return redirect()->route('postcomment.show',$id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comment $id)
    {
        /*Comment::where('id', $comment->id)->delete();
        Post::destroy($comment->id);*/

        Comment::destroy($id->id);
        return redirect()->route('postcomment.index');
    }
}
