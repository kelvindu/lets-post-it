<div class="mdl-grid">

  <div class="mdl-cell mdl-cell--2-col"></div>

  <div class="mdl-cell mdl-cell--8-col mdl-card mdl-shadow--4dp">

    <div class="mdl-card__title">
      <h1 class="mdl-card__title-text"><strong>{{ $p->title }}</strong></h1>
    </div>
    <div class="mdl-card__title">
      <p><a href="#">{{ $p->user->name }}</a>: on {{ $p->created_at->toFormattedDateString() }}
        <br>Category : <a href="{{route('home',['category' => $p->category->id])}}">{{ $p->category->name }}</a></p>
    </div>

    <div class="mdl-card__title block-the-text">
      <p>{{ str_limit(strip_tags($p->body), $limit = 400, $end = '...') }}</p>
    </div>

    <div class="mdl-card__actions">
      <a href="{{route('single_post', ['post' => $p->id])}}" class="mdl-button">Read more...</a>
    </div>

  </div>

  <div class="mdl-cell mdl-cell--2-col"></div>

</div>
