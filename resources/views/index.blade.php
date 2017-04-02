@extends('layouts.master')

@section('content')
  <div class="content-grid">
    {{-- if there is no post then tell the users that there is no post --}}
    @if (count($posts) < 1)
      @include('post.nopost')
    @else
      @foreach ($posts as $p)
        @include('post.card')
      @endforeach
      {{-- the paginator for many posts --}}
      {{ $posts->links() }}
    @endif
  </div>
@endsection
