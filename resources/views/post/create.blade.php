@extends('layouts.master')

@section('content')
  <div class="mdl-grid">
    <div class="mdl-cell mdl-cell--2-col mdl-cell--hide-tablet mdl-cell--hide-phone"></div>

    <form class="mdl-card mdl-cell--8-col mdl-shadow--6dp" action="{{ route('post_post') }}" method="POST">
      {{ csrf_field() }}
      <div class="mdl-card__title">
        <h1 class="mdl-card__title-text">Create new post</h1>
      </div>
      <div class="mdl-card__title">
        <p>Share your story here,</p>
      </div>

      <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
        <input class="mdl-textfield__input" type="text" id="sample3" name="title">
        <label class="mdl-textfield__label" for="sample3">Your awesome title here...</label>
      </div>


      <div class="mdl-select mdl-js-select mdl-textfield--floating-label">
        <select class="mdl-select__input" id="category" name="category">
          <option value="">Select a category...</option>
          @foreach ($categories as $c)
            <option value="{{ $c->id }}"> {{$c->name}} </option>
          @endforeach
        </select>
      </div>

      <h4>Your story</h4>
      {{-- For summernote specs and all of the bloody goodness it provides go to the website --}}
      <div class="mdl-layout-spacer"></div>
      <textarea name="summernote" id="summernote" class="summernote"></textarea>
      <div class="mdl-layout-spacer"></div>
      <button type="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored">
        Submit
      </button>
      <div class="mdl-layout-spacer"></div>
    </form>

    <div class="mdl-cell mdl-cell--3-col mdl-cell--hide-tablet mdl-cell--hide-phone"></div>
  </div>
@endsection

@section('scripts')
  <link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.css" rel="stylesheet">
  <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.js"></script>
  <script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.js"></script>

  <!-- include summernote css/js-->
  <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.2/summernote.css" rel="stylesheet">
  <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.2/summernote.js"></script>
  {{-- <script src="{{ asset('js/summernote-config.js') }}"></script> --}}
  <script src="{{asset('js/summernote.js')}}"></script>
@endsection
