@extends('layouts.master')

@section('content')
  <div class="content-grid">
    <div class="mdl-grid">
      <div class="mdl-cell mdl-cell--4-col"></div>

      <div class="mdl-cell mdl-card mdl-cell--4-col mdl-shadow--4dp">
        <div class="mdl-card__title">
          <h1 class="mdl-card__title-text">Let us know your story as well!</h1>
        </div>
        <div class="mdl-card__title">
          <p>Sign in now</p>
        </div>
        <form action="{{ route('login') }}" method="POST">
          {{ csrf_field() }}
          <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
            <input class="mdl-textfield__input" type="email" id="email" name="email" value="{{ old('email') }}" autofocus>
            <label class="mdl-textfield__label" for="email">User Email</label>

            @if ($errors->has('email'))
              <span class="mdl-textfield__error">Oops, seems like no email there...</span>
            @endif
          </div>
          <div class="mdl-layout-spacer"></div>

          <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
            <input class="mdl-textfield__input" type="password" id="password" name="password">
            <label class="mdl-textfield__label" for="password">Password</label>
            @if ($errors->has('password'))
              <span class="mdl-textfield__error">Don't worry we all have been there before...</span>
            @endif
          </div>
          <div class="mdl-layout-spacer"></div>

          <div style="padding:20px 0 20px 0">
            <button type="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect">
              Log me in now!
            </button>
          </div>

        </form>
      </div>

      <div class="mdl-cell mdl-cell--4-col"></div>
    </div>
  </div>
@endsection
