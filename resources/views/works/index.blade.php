@extends('layouts.layouts')

@section('content')

  <div class="content">
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
  </div>

@endsection

<script src="{{ asset('js/image.js') }}"></script>