@extends('layouts.layouts')

@section('content')

@foreach($works as $work)
  <div class="container">
    <div class="row">
      <div class="col-md-3 col-sm-4 col-xs-6">
        <a href="/works/{{ $work->id }}">
          <img class="img-responsive" src="{{ $work->image_path }}">
        </a>
      </div>
    </div>
  </div>
@endforeach

<a href="{{ route('works.create') }}">
  <button type="button" class="btn btn-outline-secondary">作品を追加する</button>
</a>
@endsection