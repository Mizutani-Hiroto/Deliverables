<?php

namespace App\Http\Controllers;

use App\Mypage;
use Illuminate\Http\Request;

class MypageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('mypages.mypage');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('mypages.mypage');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $mypage = new Mypage();
        $icon = $request->file('icon');
        $path = Storage::disk('s3')->putFile('myprefix', $icon, 'public');
        $icon->image_path = Storage::disk("s3")->url($path);
        $mypage->self_introduction = $request->text('self_introduction');
        $mypage->user_id =Auth::user()->id;
        
        $mypage->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Mypage  $mypage
     * @return \Illuminate\Http\Response
     */
    public function show(Mypage $mypage)
    {
        return view('mypages.show',compact('mypage'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Mypage  $mypage
     * @return \Illuminate\Http\Response
     */
    public function edit(Mypage $mypage)
    {
        return view('mypages.edit',compact('mypage'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Mypage  $mypage
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mypage $mypage)
    {
        $mypage->icon = $request->input('icon');
        $mypage->self_introduction = $request->input('self_introduction');
        $product->update();
        
        return redirect()->route('mypages.show',['id' => $mypages->id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Mypage  $mypage
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mypage $mypage)
    {
        $mypage->icon->delete();
        $mypage->self_introduction->delete();
        
        return redirect()->route('mypages.index');
    }
}
