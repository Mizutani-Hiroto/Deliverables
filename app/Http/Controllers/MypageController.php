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
        
        return view('mypage.index',compact('user','works'));
    }

    public function edit(User $User, Work $work)
    {
        $works = Auth::user()->works;
        $user = Auth::user();
        
        return view('mypage.edit',compact('user','works'));
    }
    public function update(Request $request,User $user,Work $Work)
    {
        $user->icon = $request->input('icon1');
        $user->introduction = $request->input('introduction');
        $user->save();
        
        return redirect()->route('mypage.index');
    }

}
