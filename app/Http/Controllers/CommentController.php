<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Work;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public function store(Request $request, Work $work)
    {
        $comment = new Comment();
        $comment->text = $request->input('text');
        $comment->user_id = Auth::user()->id;
        $comment->work_id = $work->id;
        $review->save();
        
        return redirect()->route('works.show', $work);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    
}
