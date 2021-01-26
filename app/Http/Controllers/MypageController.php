<?php

namespace App\Http\Controllers;

use App\User;
use App\Work;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MypageController extends Controller
{
 
    public function index()
    {
        $works = Auth::user()->works;
        $user = Auth::user();
        
        return view('mypages.index',compact('works','user'));
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

}
