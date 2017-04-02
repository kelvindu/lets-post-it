@extends('layouts.master')

@section('content')
  <div class="content-grid">
    <div class="mdl-grid">
      <div class="mdl-cell mdl-cell--2-col mdl-cell--hide-tablet mdl-cell--hide-phone"></div>

      <div class="mdl-card mdl-cell mdl-cell--8-col mdl-shadow--6dp">
        <h1>{{ $post->title }}</h1>
        <p style="font-size: 20px"><a href="#">{{ $post->user->name }}</a>: on {{ $post->created_at->toFormattedDateString() }}</p>
        <p>Category : <a>{{ $post->category->name }}</a></p>
        <hr>
        {!! $post->body !!}
      </div>

      <div class="mdl-cell mdl-cell--2-col mdl-cell--hide-tablet mdl-cell--hide-phone"></div>
    </div>
    @include('post.comment')
  </div>
@endsection
