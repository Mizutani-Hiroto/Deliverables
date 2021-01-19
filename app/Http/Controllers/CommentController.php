<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Work;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Work $work, Request $request)
    {
        $comment = new Comment();
        $comment->text = $request->input('text');
        $comment->work_id = $work->id;
        $comment->user_id = Auth::user()->id;
        $comment->save();
        
        return redirect()->route('works.show', $work);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    
}
