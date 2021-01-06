@extends('layouts.app')

@section('content')
<div class="container">
  <div>
    <form action="/works" method="post" enctype="multipart/form-data">
      {{ csrf_field() }}
      <input type="file" name="image">

      <div>
        <label for="exampleInputEmail">作品名</label>
        <input type="text" class="form-control" aria-describedby="emailHelp" name="title" value="{{ old('title') }}">
      </div>
      <div>
        <label for="exampleInputPassword1">説明</label>
        <textarea class="form-control" name="description">{{ old('description') }}</textarea>
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
          <option value="1"　selected >約1日</option>
          <option value="1">約7日</option>
          <option value="1">約ひと月</option>
          <option value="1">約半年</option>
          <option value="1">約一年</option>
          <option value="1">一年以上</option>
        </select>
      </div>
      <button type="submit">作品を追加する</button>
    </form>
   </div>
</div>
@endsection

