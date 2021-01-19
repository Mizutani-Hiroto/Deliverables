@extends('layouts.layouts')

@section('content')

@foreach($works as $work)
  <div class="container">
    <div class="row">
      <div class="col-sm">
        <a href="/works/{{ $work->id }}">
          <img src="{{ $work->image_path }}">
        </a>
        </div>
        </div>
  </div>
@endforeach

<div>
<a href="{{ route('works.create') }}">
  <button type="button" class="btn btn-outline-secondary">作品を追加する</button>
</a>
</div>
@endsection