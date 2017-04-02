@extends('layouts.master')

@section('content')
  <div class="content-grid">
    @foreach (array_chunk($categories->getCollection()->all(), 3) as $rows)
      <div class="mdl-grid">
        @foreach ($rows as $category)
          <div class="mdl-card mdl-cell mdl-cell--4-col mdl-shadow--4dp">
            <h2>{{ $category->name }}</h2>
            <p>{{ $category->body }}</p>
            <div class="mdl-card__actions mdl-card--border">
              <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect" href="/?category={{ $category->id }}">
                I wanna see it!
              </a>
            </div>
          </div>
        @endforeach
      </div>
    @endforeach
    {{ $categories->links() }}
  </div>
@endsection
