<!DOCTYPE html>
@php
use App\Models\User;
@endphp
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

        <div class="col-sm-2 col-sm-offset-1 blog-sidebar mt-3">
            <div class="sidebar-module">
            <ul class="list-group border-0">
                <a href="blog" class="list-group-item border border-secondary list-group-item-action active bg-warning">首頁</a>
                <a href="posts/create" class="list-group-item">發表文章</a>
            </ul>
          </div>
        </div><!-- /.blog-sidebar -->
        <div class="col-sm-6 offset-sm-1 blog-main">
          @foreach($posts->reverse() as $post)
          <div class="blog-post">
            <h2 class="blog-post-title">{{$post->title}}</h2>
            <p class="blog-post-meta">{{$post->updated_at}} by <a href="#">{{(User::find($post->user_id)->name)}}</a>&nbsp @if(Auth::user()->id == $post->user_id)<a href="{{route('posts.edit', [ 'post' => $post])}}">edit</a>@endif</p>
            <p>{!!nl2br(e($post->content))!!}</p>

            </div>
            <hr>
          @endforeach
        </div>  <!-- /.blog-main -->

      </div>  <!-- /.row -->

    </div>
    @endsection

  </body>
</html>
