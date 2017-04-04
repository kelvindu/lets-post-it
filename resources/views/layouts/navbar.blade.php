<header class="mdl-layout__header mdl-shadow--8dp">
  <div class="mdl-layout__header-row">
    @if (Auth::check())
      <a class="mdl-layout__title" href="{{route('home')}}">Hi&nbsp;{{ Auth::User()->name .', welcome to '.config('app.name') }}</a>
    @else
      <a class="mdl-layout__title" href="{{route('home')}}">{{ config('app.name') }}</a>
    @endif
    <div class="mdl-layout-spacer"></div>
    <nav class="mdl-navigation mdl-layout--large-screen-only">
      @include('layouts.links')
    </nav>
  </div>
</header>
<div class="mdl-layout__drawer">
  <span class="mdl-layout__title">
    @if (Auth::check())
      Hello, {{Auth::User()->name}}
    @else
      {{ config('app.name') }}
    @endif
  </span>
  <nav class="mdl-navigation mdl-typography--body-1-force-preferred-font">
    @include('layouts.links')
  </nav>
</div>
