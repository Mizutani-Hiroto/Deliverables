@extends('layouts.layouts')

@section('content')

@include('components.header')
  <div class="container">
    <form method="POST" action="/works/{{ $work->id }}">
      {{ csrf_field() }}
      <div>
        <input type="hidden" name="_method" value="PUT">
        <img class="rounded mx-auto d-block"  src="{{ $work->image_path }}"　width="300" height="300">
        <label for="exampleInputPassword1">タイトル</label>
        <input type="text" class="form-control" aria-describedby="emailHelp" name="title" value="{{ $work->title }}">
      </div>
      <div>
        <label for="exampleInputPassword1">説明</label>
        <textarea class="form-control" name="description">{{ $work->description }}</textarea>
      </div>
      <div>
        <label for="exampleInputEmail">サイズ</label>
        <input type="text" class="form-control" aria-describedby="emailHelp" name="size" value="{{ $work->size }}">
      </div>
      <div>
        <label>ジャンル</label>
          <select name="genre" value="{{ $work->genre }}">
          <option value="日本画"　selected >日本画</option>
          <option value="水彩画">水彩画</option>
          <option value="油絵">油絵</option>
          </select>
      </div>
      <div>
        <label>製作期間</label>
        <select name="period" value="{{ $work->period }}">
          <option value="約1日"　selected >約1日</option>
          <option value="約1週間">約1週間</option>
          <option value="約ひと月">約ひと月</option>
          <option value="約半年">約半年</option>
          <option value="約一年">約一年</option>
          <option value="一年以上">一年以上</option>
        </select>
        <button type="submit">編集を確定する</button>
      </div>
    </form>
    <a href="/works">作品一覧にもどる</a>
  </div>
   

@endsection