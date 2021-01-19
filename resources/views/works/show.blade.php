@extends('layouts.app')

@section('content')
<div class="container">
  <div class="card mb-3">
    <img class="bd-placeholder-img card-img-top" src="{{ $work->image_path }}">
    <div class="card-body">
      @if($work->title)
      <h3 class="card-title text-center">{{ $work->title }}</h3>
      @else
    　<h3>作品名未定</h3>
    　@endif
      <div class="row">
        <div class="col-sm-4">
          <p class="card-text">説明</p>
        </div>
        <div class="col-sm-8">
          <p>{{ $work->description }}</p>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-4">
          <p>サイズ</p>
        </div>
        <div class="col-sm-8">
          <p>{{ $work->size }}</p>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-4">
          <p>ジャンル</p>
        </div>
        <div class="col-sm-8">
          <p>{{ $work->genre }}</p>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-4">
          <p>製作期間</p>
        </div>
        <div class="col-sm-8">
          <p>{{ $work->period }}</p>
        </div>
      </div>
    </div>
            
              <div>
                <a href="/works">作品一覧にもどる</a>
                <a href="/works/{{ $work->id }}/edit">作品の編集をする</a>
              </div>
            
              <div>
                <form action="/works/{{ $work->id }}" method="POST" onsubmit="if(confirm('この作品を削除してもよろしいですか?')) { return true } else {return false };">
                  <input type="hidden" name="_method" value="DELETE">
                  <input type="hidden" name="_token" value="{{ csrf_token() }}">
                  <button type="submit">この作品を削除する</button>
                </form>
              </div>
              </div>
              
              <h3>講評</h3>
              @foreach($comments as $comment)
              <div class="card mb-3">
                <div class="row">
                <p class="col align-self-start">{{ $comment->text }}</p>
              </div>
              </div>
              @endforeach
              
              <div class="container">
                <form method="POST" action="/works/{{ $work->id }}">
                  {{ csrf_field() }}
                  <textarea name="text"></textarea>
                  <button type="submit">講評する</button>
                </form>
              </div>

@endsection