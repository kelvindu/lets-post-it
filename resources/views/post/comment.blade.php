@foreach ($post->comments as $c)
  <div class="mdl-grid">
    <div class="mdl-cell mdl-cell--2-col mdl-cell--hide-tablet mdl-cell--hide-phone"></div>

    <div class="mdl-card mdl-cell mdl-cell--8-col mdl-shadow--6dp">
      <h4> <a href="#"> {{ $c->user->name }} </a> &nbsp; {{ $c->created_at->diffForHumans() }}</h4>
      <hr>
      {{ $c->body }}
    </div>

    <div class="mdl-cell mdl-cell--2-col mdl-cell--hide-tablet mdl-cell--hide-phone"></div>
  </div>
@endforeach

@if (Auth::check())
  <div class="mdl-grid">
    <div class="mdl-cell mdl-cell--2-col mdl-cell--hide-tablet mdl-cell--hide-phone"></div>

    <div class="mdl-card mdl-cell mdl-cell--8-col mdl-shadow--6dp">
      <!-- Floating Multiline Textfield -->
      <form action="{{ route('post_comment',['post' => $post->id])}}" method="POST">
        {{ csrf_field() }}

        <div class="mdl-textfield mdl-js-textfield">
          <textarea class="mdl-textfield__input" name="body" type="text" rows= "3" id="comment"></textarea>
          <label class="mdl-textfield__label" for="comment">Your comment here...</label>
        </div>
        <div class="mdl-layout-spacer"></div>
        <button type="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored">
          Leave a comment!
        </button>

        @include('layouts.errors')
      </form>
    </div>

    <div class="mdl-cell mdl-cell--2-col mdl-cell--hide-tablet mdl-cell--hide-phone"></div>
  </div>
@else
  <div class="mdl-grid">
    <div class="mdl-cell mdl-cell--2-col mdl-cell--hide-tablet mdl-cell--hide-phone"></div>

    <div class="mdl-card mdl-cell mdl-cell--8-col mdl-shadow--6dp">
      <div class="mdl-card__title">
        <h1 class="mdl-card__title-text"> Sorry, to leave a comment you must &nbsp;<a href="{{route('login')}}">login</a></h1>
      </div>
      <hr>
    </div>

    <div class="mdl-cell mdl-cell--2-col mdl-cell--hide-tablet mdl-cell--hide-phone"></div>
  </div>
@endif
