@extends('layouts.app')

@section('content')

@foreach
// ここに画像をforeachで配置するformを書きます。
@endforeach
<a href="{{ route('works.create') }}">
  <button type="button" class="btn btn-outline-secondary">作品を追加する</button>
</a>
@endsection