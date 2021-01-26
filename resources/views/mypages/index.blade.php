@extends('layouts.layouts')

@section('title','deliverable')

@section('content')

  <div>
    <div>
      @if(false)
        <img src="{{ $my_icon->image_path }}">
      @else
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
            <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
          </svg>
      @endif
        <div>{{ $user->name }}</div>
        <div>followしている数をカウントする</div>
        <div>followされている数をカウントする</div>
        <div>自分の作品一
        </div>
        <div>フォローしている作品一覧
        　followしてる作品のimage_pathをforeach
        </div>
        <div>
        <div>自己紹介</div>
        @if(false)
          <textarea>{{ $user->self_introduction }}</textarea>
        @else
            <textarea>まだ入力されていません。</textarea>
        @endif
    </div>
  </div>
  

@endsection