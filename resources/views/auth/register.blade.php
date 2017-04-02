@extends('layouts.master')

@section('content')
  <div class="content-grid">
    <div class="mdl-grid">
      <div class="mdl-cell mdl-cell--4-col"></div>

      <div class="mdl-cell mdl-card mdl-cell--4-col mdl-shadow--4dp">
        <div class="mdl-card__title">
          <h1 class="mdl-card__title-text">Be part of our community!</h1>
        </div>
        <div class="mdl-card__title">
          <p>it's free any way</p>
        </div>
        <form action="{{ route('register') }}" method="POST">
          {{ csrf_field() }}
          <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
            <input class="mdl-textfield__input" type="text" id="name" name="name" value="{{ old('name') }}" autofocus>
            <label class="mdl-textfield__label" for="name">My Name is...</label>
          </div>
          <div class="mdl-layout-spacer"></div>

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

          <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
            <input class="mdl-textfield__input" type="password" id="password-confirm" name="password_confirmation">
            <label class="mdl-textfield__label" for="password-confirm">Confirm Password</label>
          </div>
          <div class="mdl-layout-spacer"></div>

          <div style="padding:20px 0 20px 0">
            <button type="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect">
              I'm in!
            </button>
          </div>

          @include('layouts.errors')

        </form>
      </div>

      <div class="mdl-cell mdl-cell--4-col"></div>
    </div>
  </div>
@endsection
