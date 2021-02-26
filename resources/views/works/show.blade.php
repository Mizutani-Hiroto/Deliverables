@extends('layouts.layouts')

@section('title', 'Deliverable')

@section('content')
<div class="container">
    <img class="rounded mx-auto d-block"  src="{{ $work->image_path }}"　width="300" height="300">
    <div class="card-body">
      @if($work->title)
      <h3 class="text-center">{{ $work->title }}</h3>
      <hr>
      @else
    　<h3>作品名未定</h3>
    　@endif
      <div class="row">
        <div class="col-sm-4">
          <p>説明</p>
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
            
                <a href="/works/{{ $work->id }}/edit">
                  <p class="text-center">この作品の編集する</p>
                </a>
            
              <div>
                <form action="/works/{{ $work->id }}" method="POST" onsubmit="if(confirm('この作品を削除してもよろしいですか?')) { return true } else {return false };">
                  <input type="hidden" name="_method" value="DELETE">
                  <input type="hidden" name="_token" value="{{ csrf_token() }}">
                  <button type="submit">この作品を削除する</button>
                </form>
              </div>
              
              <hr>
              
              <h3>Evaluation</h3>
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
                  <textarea name="text" class="form-control"></textarea>
                  <button type="submit">Evaluate</button>
                </form>
              </div>

@endsection