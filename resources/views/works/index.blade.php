@extends('layouts.app')

@section('content')

@foreach($works as $work)
<a href=
  <img src="{{ $work->image_path }}">
@endforeach

<a href="{{ route('works.create') }}">
  <button type="button" class="btn btn-outline-secondary">作品を追加する</button>//右下固定ボタンにしたい
</a>
@endsection