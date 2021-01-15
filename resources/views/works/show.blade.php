@extends('layouts.app')

@section('content')

  <div class="container">
    <div class="card mb-3">
      <div class="row no-gutters">
          <div class="col-md-4">
            <img src="{{ $work->image_path }}" class="bd-placeholder-img" width="100%">
          </div>
          <div class="card-body text-center">
            <div class="card-title">
              <h3>
                {{ $work->title }}
              </h3>
            </div>
            <div>
              <div>
                <h6>説明</h6>
              </div>
              <div class="card-text">
                {{ $work->description }}
              </div>
              <div>
                <div>
                  <h6>サイズ</h6>
                </div>
                <div>
                  {{ $work->size }}
                </div>
              </div>
              <div>
                <div>
                  <h6>ジャンル</h6>
                  </div>
                  <div>
                    {{ $work->genre }}
                  </div>
                </div>
                <div>
                  <div>
                    <h6>製作期間</h6>
                  </div>
                  <div>
                    {{ $work->period }}
                  </div>
                </div>
            
              <div>
                <a href="/works">作品一覧にもどる</a>
                <a href="/works/{{ $work->id }}/edit">作品の編集をする</a>
              </div>
            
              <div>
                <form action="/works/{{ $work->id }}" method="POST" onsubmit="if(confirm('この作品を削除してもよろしいですか?')) { return true } else {return false };">
                  <input type="hidden" name="_method" value="DELETE">
                  <input type="hidden" name="_token" value="{{ csrf_token() }}">
                  <button type="submit">この作品を削除する</button>
                </form>
              </div>
              </div>
      </div>
    </div>
  </div>
@endsection