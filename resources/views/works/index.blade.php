@extends('layouts.layouts')

@section('content')

  @include('components.header')
  <div class="container">
    <div class="row">
      @foreach($works as $work)
      <div class="col-md-3 col-sm-4 col-xs-6">
        <a href="/works/{{ $work->id }}">
          <img src="{{ $work->image_path }}" class="img-responsive list-item">
        </a>
      </div>
      @endforeach
    </div>
  </div>

<div>
<a href="{{ route('works.create') }}">
  <button type="button" class="btn btn-outline-primary fixed_btn">作品を追加する</button>
</a>
</div>
@endsection

<script src="{{ asset('js/image.js') }}"></script>