<form method="POST" action="/works" enctype="multipart/form-data">
    {{ csrf_field() }}
    <input type="file" name="photo">
    <input type="submit">
</form>

<form>
    {{ csrf_field () }}
    <label for="exampleInputEmail">作品名</label>
    <input type="text" class="form-control" aria-describedby="emailHelp" name="title" value="{{ old('title') }}">
    <label for="exampleInputPassword1">説明</label>
    <textarea class="form-control" name="content">{{ old('content') }}</textarea>
</form>