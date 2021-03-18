<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <title></title>
  </head>
  <body>
    @extends('layouts.app')

    @section('content')
    <div class="container">

      <div class="row">

        <div class="col-sm-2 blog-sidebar">
          <div class="sidebar-module">
            <ul class="list-group">
              <a href="{{ route('posts.index') }}" class="list-group-item">首頁</a>
              <a href="{{route('posts.create')}}" class="list-group-item list-group-item-action active bg-warning">發表文章</a>
            </ul>
          </div>
        </div>
        <div class="col-sm-6 offset-sm-1 blog-main">
          <form class="form-group" action="{{route('posts.update', [ 'post' => $post])}}" method="POST">
            @method('PUT')
            @csrf
            <input type="hidden" name="user_id" value="{{Auth::user()->id}}" />
            <label for="Topic">Topic</label>
            <textarea class="form control" id="editor" cols="80" rows="10" name="topic">{{$post->title}}</textarea><br><br>
            <label for="editor">Paragraph</label><br>
            <textarea class="form control" id="editor" cols="80" rows="10" name="content">{{$post->content}}</textarea><br>
            <button type="submit" class="btn btn-secondary mt-2">Submit</button>
          </form>
          <form action="{{ route('posts.destroy', [ 'post' => $post]) }}" method="POST">
            @method('DELETE')
            @csrf
            <button type="submit" class="btn btn-secondary mt-2">Delete Post</button>
          </form>
        </div>
        </div> <!-- /.row -->
        @endsection

  </body>
</html>
