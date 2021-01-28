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
        //$works = Auth::user()->works;
        $user = Auth::user();
        
        return view('mypage.index',compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Mypage  $mypage
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        return view('mypage.edit',compact('mypage'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Mypage  $mypage
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $user->icon = $request->input('icon');
        $user->introduction = $request->input('introduction');
        $user->update();
        
        return redirect()->route('mypage.index',['id' => $mypage->id]);
    }

}
