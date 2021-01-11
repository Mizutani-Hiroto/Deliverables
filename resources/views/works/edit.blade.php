@extends('layouts.app')

@section('content')

  <div>
    <form method="POST" action="/works/{{ $work->id }}">
      {{ csrf_field() }}
      <div>
        <input type="hidden" name="_method" value="PUT">
        <img src="{{ $work->image_path }}">
        <label for="exampleInputEmail">作品名</label>
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
          <option value="Nihonga"　selected >日本画</option>
          <option value="watercolor">水彩画</option>
          <option value="oil painting">油絵</option>
          </select>
      </div>
      <div>
        <label>製作期間</label>
        <select name="period" value="{{ $work->period }}">
          <option value="1"　selected >約1日</option>
          <option value="1">約7日</option>
          <option value="1">約ひと月</option>
          <option value="1">約半年</option>
          <option value="1">約一年</option>
          <option value="1">一年以上</option>
        </select>
        <button type="submit">編集を確定する</button>
      </div>
    </form>
  </div>
   
<a href="/works">作品一覧にもどる</a>

@endsection