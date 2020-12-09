@extends('welcome')
@section('content')
<section class="container head-img">
    <div class="header-container">
       <img src="{{ url('https://aripwqkyxp.cloudimg.io/v7/jerseytehen.hu/img/logo-main.png') }}">
    </div>
</section>
</header>
<section class="content">
  <div class="features">
    <div class="cont">
  <h1>Prémium kézműves sajtok 100% természetes alapanyagokból</h1>
  <hr>
  <h3 data-aos="zoom-in" data-aos-offset="200" data-aos-delay="10" data-aos-duration="1000" data-aos-easing="ease-in-out" data-aos-once="true">Gyere el hozzánk és tekintsd meg termékeinket</h3>
    {{-- <div class="feat-flex">
        <div class="feat-sajt">
            <div class="slick-food">
              <div><img src="{{ url('img/sajtcar.png') }}"/></div>
              <div><img src="{{ url('img/jogcar.png') }}"/></div>
              <div><img src="{{ url('img/sajt2car.png') }}"/></div>
            </div>
        </div> --}}
       {{--  <div class="feat-jogh">

          <h3>Sajtok</h3>
          <p>
            Sokféle formájú és állagú sajt megtalálható a kínálatunkban.
            Készítünk kenhető krémsajtokat, lágy, gyúrt, friss érlelésű,
            ízesített illetve hosszú érlelésű sajtokat is. Kiemelném a félkemény hosszú érlelésű
            sajtokat, amiket talán kevesen ismernek. 100% tej valamint baktérium kultúra és oltó
            hozzáadásával készítjük. Ezeket is több ízben állítjuk elő. Chilis-Rozmaring, Kömény,
            Provence, Kapor, Metélőhagyma, fokhagyma, Natúr, Bazsalikom, Rózsaborsos.
          </p>
          <a href="{{ route('product') }}"><span class="hvr-border-fade btn-next">További termékek</span></a>
        </div> --}}
    {{-- </div> --}}
    </div>
</div>
{{-- <div class="add">
    <h1>Referenciáink</h1>
    <hr>
    <div class="add__container">
        @foreach ($referencies as $reference)
        <div class="add-card">
            <div class="add-card__img">
                <img src="{{ url('img/ref/'.$reference->image) }}">
            </div>
            <div class="add-card__text">
                <h2>{{ $reference->title }}</h2>
                <p>{{ $reference->description }}</p>
            </div>
        </div>
        @endforeach
    </div>--}}
</div>
</section>
  {{-- <div class="block">
      <img src="{{ url('img/tehen.jpg') }}" data-speed="1" class="img-parallax">
    </div> --}}
    <div class="slick-food">
        <div class="slide1">
        <div class="slide1__text" data-aos="zoom-in" data-aos-offset="200" data-aos-delay="10" data-aos-duration="1000" data-aos-easing="ease-in-out" data-aos-once="true">
        <h2>Rólunk</h2>
        <p>4 éve fogalmazódott meg bennünk, hogy szeretnénk jerseykkel foglalkozni.<br>
            Szüleim tartottak állatokat: csirkét, kacsát, libát, disznót.<br>
            Így nem ált messze a tőlünk a földműves szerep. Minden húsvétkor kezdődött,
            amikor párom lesétált a hátsó területre és megkérdezte miért nem tartunk állatokat?
            Én megrántottam a vállam és kérdeztem: Minek? Így kezdődött és ez lett belőle.
            A visszajelzésekből nézve megérte a sok munka, és ami még vissza van.</p>
        </div>
        </div>
        {{-- <div class="slide2"></div> --}}
      </div>
  <div class="social-btns">
      <h4><a href="https://www.facebook.com/dombaifarm" class="hvr-grow"><i class="lab la-facebook"></i></a></h4><br>
  </div>
  <div class="content test">
    <h2>Akik már tőlünk vásárolnak</h2>
    <hr>
    <div class="testimonial">
        <div class="test-slick">
        <div class="test-card">
            <i>Az itt összeállított finom és látványos sajttálakkal megoldottunk már születésnapi
                 és karácsonyi ajándékokat is és aki kapta, mindig nagyon örült neki.</i><br>
                 <strong>- Nagy Oláh Ildikó -</strong>
        </div>
        <div class="test-card">
            <i>ATej, túró, tejföl, medvehagymás sajt és feta sajt minősége,
                a házhozszállítás és a kommunikáció gyorsasága tökéletes! Köszönjük.</i><br>
                 <strong>- Szücs Petra -</strong>
        </div>
        <div class="test-card">
            <i>Igazi kézműves sajtok, tejtermékek. Vigyázz, ha kipróbálod könnyen függőséget okoz..</i><br>
                 <strong>- Münster Tamás -</strong>
        </div>
        </div>
    </div>
  </div>
  <div class="divider"><hr></div>
  {{-- <div class="block">
    <img src="{{ url('img/tehen.jpg') }}" data-speed="1" class="img-parallax">
  </div> --}}

  <section class="contact content">
      @if ($agent->isDesktop())
      <div class="fb">
        <div class="fb-page" style="padding-top: 10px; padding-bottom: 10px;" data-href="https://www.facebook.com/dombaifarm" data-tabs="timeline" data-width="500" data-height="" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="false" data-lazy="true"><blockquote cite="https://www.facebook.com/dombaifarm" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/dombaifarm">Dombai Jersey Farm Pellérdi Sajtműhely</a></blockquote></div>
  </div>
      @endif
      <div class="mail">
          <h4>Küldj nekünk üzenetet!</h4>
          <form id="form" class="topBefore" method="POST">

              <input id="name" type="text" placeholder="NÉV">
              <input id="email" type="text" placeholder="E-MAIL">
              <textarea id="message" type="text" placeholder="ÜZENET"></textarea>
      <input id="submit" type="submit" class="g-recaptcha" data-sitekey="6LdmLv4ZAAAAAHrfhMfpikjHo5NMtcQEFGxL2a0H" data-action='submit' data-callback='onSubmit' value="ELKÜLDÖM">
    </form>
      </div>
  </section>
  {{-- <div class="slick-food-end">
    <div class="slide2">
    </div>
  </div> --}}
@endsection
