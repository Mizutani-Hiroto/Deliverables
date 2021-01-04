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
        $image = $request->file('photo1');
        $upload_info = Storage::disk('local')->putFile('images', $image, 'public');
        $work->filepass1 = Storage::disk("local")->url($upload_info);
        $work->filepass2 = "aa";
        $work->filepass3 = "bb";
        $work->user_id = Auth::id();

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
        return view('works.show',compact('work'));
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
        //画像を受け取るコード
        $work->title = $request->input('title');
        $work->description = $request->input('description');
        $work->size = $request->input('size');
        $work->genre = $request->input('genre');
        $work->period = $request->input('period');
        $work->update();
        
        return redirect()->route('work.show',['id' => $work->id]);
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
        
        return redirect()->route('work.index');
    }
}
