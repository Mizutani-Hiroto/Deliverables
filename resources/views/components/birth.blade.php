<div class="row">
  <div class="col">
    <select class="form-control" name="year">
      @foreach(range(1900,2030) as $number)
        @if($number == 2000)
          <option selected value="{{ $number }}"> {{ $number }}年</option>
        @else
          <option value="{{ $number }}" > {{ $number }}年</option>
        @endif
      @endforeach
    </select>
  </div>
  <div class="col">
    <select class="form-control" namer="month">
      @foreach(range(1,12) as $number)
        <option value="{{ $number }}">{{ $number }} 月</option>
      @endforeach
    </select>
  </div>
    <div class="col">
      <select class="form-control" namer="day">
        @foreach(range(1,31) as $number)
          <option value="{{ $number }}">{{ $number }} 日</option>
        @endforeach
      </select>
    </div>
</div>

