<?php

namespace App\Http\Controllers;

use App\Work;
use App\photo;
use Illuminate\Http\Request;
use Storage;
use Illuminate\Support\Facades\Auth;

class WorkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $works = Work::all();
        
        return view('works.index',compact('works'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('works.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $work = new Work();
        $work->title = $request->input('title');
        $work->description = $request->input('description');
        $work->size = $request->input('size');
        $work->genre = $request->input('genre');
        $work->period = $request->input('period');
        $images = $request->file('image1');
        $path = Storage::disk('s3')->putFile('myprefix', $images, 'public');
        $work->image_path = Storage::disk("s3")->url($path);
        $work->user_id = Auth::user()->id;

        $work->save();
        
        return redirect()->route('works.show',["id" => $work->id])->with('message','Work was successfully created.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Work  $work
     * @return \Illuminate\Http\Response
     */
    public function show(Work $work)
    {
        $comments = $work->comments()->get();
    
        return view('works.show',compact('work', 'comments'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Work  $work
     * @return \Illuminate\Http\Response
     */
    public function edit(Work $work)
    {
        return view('works.edit',compact('work'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Work  $work
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Work $work)
    {
        //if($request->input('image1') != null){
        //$work->image_path = $request->input('image');
        //}
        $work->title = $request->input('title');
        $work->description = $request->input('description');
        $work->size = $request->input('size');
        $work->genre = $request->input('genre');
        $work->period = $request->input('period');
        $work->save();
        
        return redirect()->route('works.show',['id' => $work->id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Work  $work
     * @return \Illuminate\Http\Response
     */
    public function destroy(Work $work)
    {
        $work->delete();
        
        return redirect()->route('works.index');
    }
}
