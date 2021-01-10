@extends('layouts.app')

@section('content')

@foreach($works as $work)
  <div class="card" style="width: 18rem;">
    <a href="/works/{{ $work->id }}">
      <img src="{{ $work->image_path }}" class="card-img-top">
    </a>
  </div>
@endforeach

<a href="{{ route('works.create') }}">
  <button type="button" class="btn btn-outline-secondary">作品を追加する</button>
</a>
@endsection