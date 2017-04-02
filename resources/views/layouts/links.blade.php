<a class="mdl-navigation__link" href="/category">Category</a>
<a class="mdl-navigation__link" href="/posts/create">I want to post something too!</a>
@if (Auth::check())
  <a class="mdl-navigation__link" href="#"></a>
  <a class="mdl-navigation__link" href="{{ route('logout') }}" onclick="logout()">Sign Out</a>
  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    {{ csrf_field() }}
  </form>
@else
  {{-- TODO: create the register, login, logout stuff --}}
  <a class="mdl-navigation__link" href="{{ route('login') }}">Sign In</a>
  <a class="mdl-navigation__link" href="{{ route('register') }}">Sign Up</a>
@endif
