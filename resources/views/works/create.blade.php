<div>
  <form method="POST" action="/works" enctype="multipart/form-data">
    {{ csrf_field() }}
    <input type="file" name="photo">
    <input type="submit">
  </form>

  <form>
    {{ csrf_field() }}
    <label for="exampleInputEmail">作品名</label>
    <input type="text" class="form-control" aria-describedby="emailHelp" name="title" value="{{ old('title') }}">
    <label for="exampleInputPassword1">説明</label>
    <textarea class="form-control" name="content">{{ old('content') }}</textarea>
  </form>
  
  <form>
    {{ csrf_field() }}
    <label for="exampleInputEmail">サイズ</label>
      <input type="text" class="form-control" aria-describedby="emailHelp" name="size" value="{{ old('size') }}">
  </form>
  
  <form>
    {{ csrf_field() }}
    <label>ジャンル</label>
      <select name="genre">
        <option value="Nihonga"　selected >日本画</option>
        <option value="watercolor">水彩画</option>
        <option value="oil painting">油絵</option>
      </select>
  </form>
  
  <form>
    {{ csrf_field() }}
    <label>製作期間</label>
      <select name="period">
        <option value="day"　selected >約1日</option>
        <option value="week">約7日</option>
        <option value="month">約ひと月</option>
        <option value="halfyear">約半年</option>
        <option value="year">約一年</option>
        <option value="over">一年以上</option>
      </select>
  </form>
</div>

