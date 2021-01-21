@extends('layouts.layouts')

@section('title','deliverable')

@section('content')

  <div>
    <div>
      <img src="{{ $mypage->image_path }}">
        <div>name{{ $user->name }}</div>
        <div>follow</div>
        <div>follower</div>
        <div>作品一覧
        <img src="{{ $mypage->work->image_path }}">作品画像のurl
        </div>
        <div>フォロー作品一覧
        　作品画像のurl
        </div>
        <div>
        <div>自己紹介
        </div>
    <div>{{ $mypage->self_introduction }}
    </div>
    </div>
  </div>
  

@endsection