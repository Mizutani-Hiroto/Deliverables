@extends('layouts.layouts')

@section('content')
  <form action="/works" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}
    <div class="container">
      <input type="file" name="image1">
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
              <option value="日本画"　selected >日本画</option>
              <option value="水彩画">水彩画</option>
              <option value="油絵">油絵</option>
            </select>
        </div>
        <div>
          <label>製作期間</label>
          <select name="period">
            <option value="約1日"　selected >約1日</option>
            <option value="約1週間">約1週間</option>
            <option value="約ひと月">約ひと月</option>
            <option value="約半年">約半年</option>
            <option value="約一年">約一年</option>
            <option value="一年以上">一年以上</option>
          </select>
        </div>
        <button type="submit">作品を追加する</button>
    </div>
  </form>
@endsection

