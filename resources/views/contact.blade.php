@extends('welcome')
@section('content')
<section class="container contact-main">
    <div class="header-container">
        <div class="hero">
            <h1>Kapcsolat</h1>
            <p>Írj nekünk vagy hívj minket!</p>
        </div>
    </div>
</section>
</header>
<section class="content">
    <div class="cont-flex">
<div class="cont-left">
    <div class="cont-card">
        <div class="avatar"><img src="{{ url('https://aripwqkyxp.cloudimg.io/v7/jerseytehen.hu/img/contactp.png') }}"></div>
        <h2>Tel: <a href="tel:+36706099910">+36-70-6099-910</a><br>
            E-mail: <a href="mailto:szandra@jerseytehen.hu">szandra@jerseytehen.hu</a>
        </h2>
        {{-- <div class="cont-card__content">
            <p>
                4 éve fogalmazódott meg bennünk, hogy szeretnénk jerseykkel foglalkozni.
                Szüleim tartottak állatokat: csirkét, kacsát, libát, disznót.
                Így nem ált messze a tőlünk a földműves szerep. Minden húsvétkor kezdődött,
                amikor párom lesétált a hátsó területre és megkérdezte miért nem tartunk állatokat?
                Én megrántottam a vállam és kérdeztem: Minek? Így kezdődött és ez lett belőle.
                A visszajelzésekből nézve megérte a sok munka, és ami még vissza van.
            </p>
        </div> --}}
    </div>

</div>
<div class="cont-right">
    <div class="cont-card">
        <h4>Küldj nekünk üzenetet!</h4>
          <form id="form" class="topBefore" action="{{ route('send_mail') }}" method="post">
            @csrf
              <input id="name" type="text" placeholder="NÉV" name="name">
              <input id="email" type="text" placeholder="E-MAIL" name="email">
              <textarea id="message" type="text" placeholder="ÜZENET" name="message"></textarea>
              <input id="submit" type="submit" value="ELKÜLDÖM" disabled>
              <div style="display: flex; justify-content: center;">
                <label for="checkboxG3" style="display: inline-block;"><input type="checkbox" name="checkboxG3" id="checkboxG3" style="display: inline; width: 20px; height: auto; padding: 0px;"/>
                    <i style="font-size: 12px;">Elolvastam és elfogadom az <a href="{{ route('adatk') }}">Adatvédelmi nyilatkozatot</a>!</i><br>
                <i style="font-size: 10px;">Kötelező bepipálni, hogy az üzenetet el tudjuk küldeni!</i>
                </label>
                </div>
                </form>
    </div>
</div>
    </div>
</section>
@endsection
@section('captcha')
<script>
    $(function() {
    $('#checkboxG3').click(function() {
        if ($(this).is(':checked')) {
            $('#submit').removeAttr('disabled');
        } else {
            $('#submit').attr('disabled', 'disabled');
        }
        });
    });
</script>
@endsection
