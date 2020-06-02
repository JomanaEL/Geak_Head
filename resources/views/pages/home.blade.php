@extends('layouts.app')
@section('content')

<!-- main content -->
<br>
    <div id="content">
      <section id="News" class="clear">
        <ul>
          <li>
            <article class="clear">
              <figure><img src="images/Game-Covers/undertale 2.jpg" alt="">
                <figcaption>
                  <h2>Undertale</h2>
                  <p>Undertale is a role-playing video game created <a href="https://en.wikipedia.org/wiki/Toby_Fox" title="Creater">by American indie developer Toby Fox</a>. Fox developed the entirety of the game independently, including writing and composing the score.</p>
                  <a href="http://undertale.wikia.com/wiki/Undertale">Read More &raquo;</a>
                </figcaption>
              </figure>
            </article>
          </li>
          <li class="clear">
            <article class="clear">
              <figure><img src="images/Game-Covers/Cuphead.jpg" alt="">
                <figcaption>
                  <h2>Cuphead</h2>
                  <p>Cuphead is a run and gun indie video game developed and published <a href="http://studiomdhr.com/">by StudioMDHR</a>.</p>
                  <a href="http://cuphead.wikia.com/wiki/Cuphead_(game)">Read More &raquo;</a>
                </figcaption>
              </figure>
            </article>
          </li><br><br>
          <li>
            <article class="clear">
              <figure><img src="images/Game-Covers/Fran Bow.jpg" alt="">
                <figcaption>
                  <h2>Fran Bow</h2>
                  <p>Fran Bow isa point and click adventure with a touch of horror. it is developed and published <a href="https://www.killmondaygames.com/">by Killmonday Games</a>. You play as Fran Bow, a ten year old girl with extraordinary curiosity but also a troubled mind and a story to tell.</p>
                  <a href="http://fran-bow.wikia.com/wiki/Fran_Bow_Wiki">Read More &raquo;</a>
                </figcaption>
              </figure>
            </article>
          </li>
          <li class="last">
            <article class="clear">
              <figure><img src="images/Game-Covers/Stardew valley.jpg" alt="">
                <figcaption>
                  <h2>Stardew valley</h2>
                  <p>Stardew Valley is an open-ended country-life RPG! You’ve inherited your grandfather’s old farm plot in Stardew Valley. Armed with hand-me-down tools and a few coins, you set out to begin your new life. the game is developed <a href="https://twitter.com/concernedape?lang=en">by Eric "ConcernedApe" Barone</a>.</p>
                  <a href="https://stardewvalleywiki.com/Stardew_Valley_Wiki">Read More &raquo;</a>
                </figcaption>
              </figure>
            </article>
          </li>
        </ul>
      </section>
    </div>
    <!-- right column -->
    <div id="contentTow">
    <aside id="right_column">
      <h2 class="title">Categories</h2>
      <nav>
        <ul>
          <li><a href="#">Massively Multiplayer Online (MMO)</a></li>
          <li><a href="#">Real-Time Strategy (RTS)</a></li>
          <li><a href="#">First Person Shooters (FPS)</a></li>
          <li><a href="#">Role-Playing (RPG)</a></li>
          <li><a href="#">Stealth Shooter</a></li>
          <li><a href="#">Combat</a></li>
          <li><a href="#">Action</a></li>
          <li><a href="#">Adventure</a></li>
          <li><a href="#">Sports</a></li>
          <li><a href="#">Simulations</a></li>
          <li><a href="#">Puzzle</a></li>
                    <li class="last"><a href="#">Educational</a></li>
        </ul>
      </nav>
      <!-- /nav -->
    </aside>
    </div>
    <!-- / content body -->

@endsection
