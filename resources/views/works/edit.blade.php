@extends('layouts.app')

@section('content')

<div class="container">
  <div>
    <form method="POST" action="/works/{{ $work->id }}" enctype="multipart/form-data">
      {{ csrf_field() }}
      <input type="hidden" name="_method" value="PUT">
      <input type="file" name="photo">
  </div>
  <div>
    <label for="exampleInputEmail">作品名</label>
    <input type="text" class="form-control" aria-describedby="emailHelp" name="title" value="{{ old('title') }}">
  </div>
  <div>
    <label for="exampleInputPassword1">説明</label>
    <textarea class="form-control" name="content">{{ old('content') }}</textarea>
  </div>
  <div>
    <label for="exampleInputEmail">サイズ</label>
    <input type="text" class="form-control" aria-describedby="emailHelp" name="size" value="{{ old('size') }}">
  </div>
  <div>
    <label>ジャンル</label>
      <select name="genre">
        <option value="Nihonga"　selected >日本画</option>
        <option value="watercolor">水彩画</option>
        <option value="oil painting">油絵</option>
      </select>
  </div>
  <div>
    <label>製作期間</label>
      <select name="period">
        <option value="day"　selected >約1日</option>
        <option value="week">約7日</option>
        <option value="month">約ひと月</option>
        <option value="halfyear">約半年</option>
        <option value="year">約一年</option>
        <option value="over">一年以上</option>
      </select>
      <input type="submit">
  </form>
  </div>
</div>

@endsection