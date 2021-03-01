@extends('layouts.layouts')

@section('title','deliverable')

@section('content')

  <div class="container">
    <div class="row">
      <div class="col text-center">
        @if(isset($user->icon))
          <img src="{{ $user->icon }}">
        @else
          <a href="/mypage/edit">
            <svg xmlns="http://www.w3.org/2000/svg" width="200" height="200" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
              <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
              <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
            </svg>
          </a>
        @endif
          <div class="h3">{{ $user->name }}</div>
          <div class="row">
            <div class="col">follow</div>
            <div class="col">1</div>
            <div class="col">follower</div>
          <div></div>
          </div>
          </div>
          <div class="col text-center">
            <div class="h4">works</div>
            @if($works->count() == 0)
            <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="currentColor" class="bi bi-card-image" viewBox="0 0 16 16">
              <path d="M6.002 5.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>
              <path d="M1.5 2A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13zm13 1a.5.5 0 0 1 .5.5v6l-3.775-1.947a.5.5 0 0 0-.577.093l-3.71 3.71-2.66-1.772a.5.5 0 0 0-.63.062L1.002 12v.54A.505.505 0 0 1 1 12.5v-9a.5.5 0 0 1 .5-.5h13z"/>
            </svg>
            @else
            @foreach($works as $work)
          <img src="{{ $work->image_path }}">
        @endforeach
        @endif
        <div class="h4">follows</div>
        <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="currentColor" class="bi bi-card-image" viewBox="0 0 16 16">
          <path d="M6.002 5.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>
          <path d="M1.5 2A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13zm13 1a.5.5 0 0 1 .5.5v6l-3.775-1.947a.5.5 0 0 0-.577.093l-3.71 3.71-2.66-1.772a.5.5 0 0 0-.63.062L1.002 12v.54A.505.505 0 0 1 1 12.5v-9a.5.5 0 0 1 .5-.5h13z"/>
        </svg>
        </div>
        </div>
        <div>
        <div class="h3">introduction</div>
        @if(isset($user->introduction))
        <form >
          <textarea name="introduction" placeholder="自分の好きな画家や経歴など好きなことを入力してください。">{{ $user->introduction }}</textarea>
          </form>
        @else
        <form>
            <textarea class="form-control" placeholder="自分の好きな画家や経歴など自由に入力してください。"></textarea>
            <button type="submit" class="btn btn-primary">確定する</button>
            </form>
        @endif
        </div>
    </div>
  </div>
  

@endsection