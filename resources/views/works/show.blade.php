@extends('layouts.app')

@section('content')

{{ $photo->photo }}
{{ $work->title }}
{{ $work->description }}
{{ $work->size }}
{{ $work->genre }}
{{ $work->period }}

<a href="/works">一覧に戻る</a>

@endsection