@extends('welcome')
@section('content')
<section class="container open-main">
    <div class="header-container">
        <div class="hero">
            <h1>Nyitvatartás</h1>
            <p><i class="las la-cheese"></i> Várunk egy kóstolóra! <i class="las la-cheese"></i></p>
        </div>
    </div>
</section>
</header>
<section class="content">
    <div class="jersey-ico"><img src="{{ url('https://aripwqkyxp.cloudimg.io/v7/jerseytehen.hu/img/openico.png') }}"></div>
    <div class="card-container">
        @foreach($open as $openings)
        <div class="card">
        <div class="card-image">
          <h1>{{ $openings->local }}</h1>
          <hr>
          <p>
            <strong>Cím:</strong> {{$openings->address}}<br>
            <strong>Nyitva tartás:</strong> {!! $openings->opened !!}<br>
            <strong>Telefonszám:</strong> <a href="tel:06706099910">+36 70/6099 910</a><br>
            {{-- <strong>E-mail cím:</strong> <a href="mailto:szandra@jerseytehen.hu">szandra@jerseytehen.hu</a> --}}
          </p>
        </div>
        <div class="card-body">
          <div class="controls">
            <a data-action="drawer">
                <i class="las la-map up"></i>
                <i class="las la-map-marked down"></i>
            </a>
        <span class="map-title"><a data-action="drawer"> Térkép</a></span>
          </div>
          <div class="mapouter"><div class="gmap_canvas"><iframe width="320" height="220" id="gmap_canvas" src="{{ $openings->mapindex }}" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://www.whatismyip-address.com">what is my ip</a></div><style>.mapouter{position:relative;text-align:right;height:220px;width:320px;}.gmap_canvas {overflow:hidden;background:none!important;height:220px;width:320px;} @media(max-width: 380px) { .mapouter{position:relative;text-align:right;height:220px;width:340px;}.gmap_canvas {overflow:hidden;background:none!important;height:220px;width:340px;}}</style></div>
        </div>
      </div>
      @endforeach
      {{-- <div class="card">
        <div class="card-image">
          <h1>Pécs - Vásárcsarnok</h1>
          <hr>
          <p>
            <strong>Cím:</strong> Vásárcsarnok, <br>Pécs, Bajcsy Zs. u. 31.<br>
            <strong>Nyitva tartás:</strong> Sz-Cs-P: 7-14 óráig<br>
            Vasárnap, hétfő, kedd: zárva<br>
            <strong>Telefonszám:</strong> <a href="tel:06706099910">+36 70/6099 910</a><br>
            <strong>E-mail cím:</strong> <a href="mailto:szandra@jerseytehen.hu">szandra@jerseytehen.hu</a>
          </p>
        </div>
        <div class="card-body">
          <div class="controls">
            <a data-action="drawer">
                <i class="las la-map up"></i>
                <i class="las la-map-marked down"></i>
            </a>
            <span class="map-title"><i class="las la-angle-double-left"></i> Térkép</span>
          </div>
          <div class="mapouter" style="margin-top: -20px; margin-left: -15px;"><div class="gmap_canvas"><iframe width="320" height="220" id="gmap_canvas" src="https://maps.google.com/maps?q=V%C3%A1s%C3%A1rcsarnok%2C%20P%C3%A9cs%20P%C3%A9cs%2C%20Bajcsy%20Zs.%20u.%2031.&t=&z=15&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://www.whatismyip-address.com">what is my ip</a></div><style>.mapouter{position:relative;text-align:right;height:220px;width:320px;}.gmap_canvas {overflow:hidden;background:none!important;height:220px;width:320px;}</style></div>        </div>
      </div>
      <div class="card">
        <div class="card-image">
          <h1>Pécs - Interspar</h1>
          <hr>
          <p>
            <strong>Cím:</strong> Interspar Hipermarket, Pécs, Siklósi út 37.<br>
            <strong>Nyitva tartás:</strong> Péntek: 10-19 óráig, Szombat: 8-15 óráig<br>
            <strong>Telefonszám:</strong> <a href="tel:06706099910">+36 70/6099 910</a><br>
            <strong>E-mail cím:</strong> <a href="mailto:szandra@jerseytehen.hu">szandra@jerseytehen.hu</a>
          </p>
        </div>
        <div class="card-body">
          <div class="controls">
            <a data-action="drawer">
                <i class="las la-map up"></i>
                <i class="las la-map-marked down"></i>
            </a>
            <span class="map-title"><i class="las la-angle-double-left"></i> Térkép</span>
          </div>
          <div class="mapouter" style="margin-top: -20px; margin-left: -15px;"><div class="gmap_canvas"><iframe width="320" height="220" id="gmap_canvas" src="https://maps.google.com/maps?q=Interspar%20Hipermarket%2C%20P%C3%A9cs%2C%20Sikl%C3%B3si%20%C3%BAt%2037.&t=&z=15&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://www.whatismyip-address.com">what is my ip</a></div><style>.mapouter{position:relative;text-align:right;height:220px;width:320px;}.gmap_canvas {overflow:hidden;background:none!important;height:220px;width:320px;}</style></div>
      </div>
    </div>--}}
</section>

@endsection
