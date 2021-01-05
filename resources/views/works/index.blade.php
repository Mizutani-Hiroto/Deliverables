@extends('layouts.app')

@section('content')

@foreach($works as $work)
  <a href="/works/{{ $work->id }}">{{ $work->photo1 }}</a>
@endforeach

<a href="{{ route('works.create') }}">
  <button type="button" class="btn btn-outline-secondary">作品を追加する</button>//右下固定ボタンにしたい
</a>
@endsection