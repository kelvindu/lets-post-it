<!--
  Hello fellow developper,
  if you're reading this it means that one way or another,
  you stumble upon this website and got interested to see the source files
  Whatever the reason may be, feel free to take an in-depth look for these at:

  https://github.com/kelvindu/lets-post-it

  Best regards,
  -KD
-->
<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
  <head>
    @include('layouts.meta')
  </head>
  <body class="mdl-demo mdl-color--grey-100 mdl-color-text--grey-700 mdl-base">
    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">

      @include('layouts.navbar')

      <main class="mdl-layout__content">
        @yield('content')

        @include('layouts.footer')
      </main>
    </div>
    <script src="{{ asset('js/listener.js') }}"></script>
    <script src="https://code.getmdl.io/1.3.0/material.min.js"></script>
    @yield('scripts')
  </body>
</html>
