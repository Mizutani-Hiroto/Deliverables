@extends('layouts.layouts')

@section('title','deliverable')

@section('content')

  <div class="container">
    <div class="row row-cols-2">
    <div class="col text-center">
      @if(isset($user))
        <img src="{{ $user->icon }}">
      @else
        <a href="/mypage/edit">
          <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
            <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
          </svg>
          </a>
      @endif
        <div>UserName</div>
        <div>followしている数をカウントする</div>
        <div>followされている数をカウントする</div>
        </div>
        <div class="col text-center">
        <div>自分の作品一覧画像
        </div>
        <div>フォローしている作品の一覧画像</div>
        </div>
        </div>
        <div>
        <div>自己紹介</div>
        @if(isset($user))
          <div>{{ $user->introduction }}</div>
        @else
            <div>まだ入力されていません。</div>
        @endif
        </div>
    </div>
  </div>
  

@endsection