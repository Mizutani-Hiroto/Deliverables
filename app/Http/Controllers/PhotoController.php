<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PhotoController extends Controller
{
    public function index()
    {
        $is_image = false;
        if(Storage::disk('local')->exists('public/photo')){
            $is_image = true;
        }
        return view('works.index',['is_image' => $is_image]);
    }
    public function store(Request $request)
    {
        $request->photo->store('public/photo');
    }
}
