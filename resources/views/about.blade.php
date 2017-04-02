{{-- The about page --}}
@extends('layouts.master')

@section('content')
  <div class="content-grid">
    <div class="mdl-grid">
      <div class="mdl-cell mdl-cell--2-col"></div>

      <div class="mdl-cell mdl-cell--8-col mdl-card mdl-shadow--6dp">
        <div class="mdl-card__title">
          <h1>About this site</h1>
        </div>
        <hr>
        <p>Okay to explain this site, let's answer some questions you might had</p>
        <h2>What is this site is all about?</h2><br>
        <p>Basically this is a simple blog site that adding users log into it, so it's like a blogging, it's just that anyone can post something.</p>
        <h2>But, isn't there sites like wordpress, etc. why bother creating this site?</h2>
        <p>You have a point there. Sure, there are way more amazing sites that provides the same kind of thing just like this one, and probably providing a way better features than this one.</p>
        <p>But this site's own purpose was never to go on production stage, this is just a little playground I have to showcase my current experience on developping web apps.</p>
        <h2>You say you're developping a web app, but isn't this is just a normal website?</h2>
        <p>Web apps and websites are both the same things actually :) it's just that in creating a web app we must consider that sometimes websites are accessed by using smartphones. Hence, it's expecting to behave like a mobile apps.</p>
        <p>So I encourage you to browse this site from your phone as well to see how responsive this site is.</p>
        <h2>Okay... so what it got to do with me?</h2>
        <p>Actually nothing at all, you don't have to mind about this site completely.</p>
        <p>But if you feel you up to it, you can explore this sites and all it's features in it. who knows you might discover some bugs that can help me grow.</p>
        <h2>Alright I want to help you, but how?</h2>
        <p>Start sign up an account! it's free and you can start using every features on this site!</p>
        <p>If you a developper (and like me you're the cool kid that uses chrome) you can start by pressing F12 to open the chrome developper tools, there you can tinker my site to however you like. If you're not using google chrome just open your browser's dev tools it should works just the same.</p>
        <p>Who knows maybe you can find some security issues that I probably need to fix, but don't worry if you can't find one. It's optional anyway.</p>
        <p>But if you do however find something please do kindly send me an <a href="mailto:du_kelvin@yahoo.com?subject=Let's-Post-It-Report">email</a> and let me know as well, it helps me a lot.</p>
        <hr>
        <p>This site is built using <a href="https://laravel.com/" target="_blank">laravel framework</a> and <a href="https://getmdl.io/" target="_blank">material design lite</a> -KD</p>
      </div>

      <div class="mdl-cell mdl-cell--2-col"></div>
    </div>
  </div>
@endsection
