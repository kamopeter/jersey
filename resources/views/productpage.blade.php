@extends('welcome')
@section('content')
<section class="container prodpage-main">
    <div class="header-container">
        <div class="hero">
            <h1>Termékeink</h1>
            <p>Tekintsd meg <span style="filter:brightness(200%);">prémium</span> kézműves termékeinket.</p>
        </div>
    </div>
</section>
</header>

<section class="content">
        <div class="prod-cont">
        <div class="food1"><img src="{{ url('https://aripwqkyxp.cloudimg.io/v7/jerseytehen.hu/img/food_1.png') }}"></div>
        <h1>100% természetes alapanyagokból</h1>
        <hr>
        </div>
</section>
<div class="clearfix"></div>
{{-- <section class="prod-class">
    <div class="col-50 main-bg prod-img">
        <img src="{{ url('img/products/sajt12.png') }}">
    </div>
    <div class="col-50 main-bg prod-text">
        <h2>Félkemény sajtok</h2>
        <p>Ezt a sajt fajtát talán kevesen ismernek.
            100% tej valamint baktérium kultúra és oltó hozzáadásával készítjük.<br>
            Egy sajt elkészítése kb. 2-3 órát vesz igénybe és ehhez jön a préselési idő.<br>
            Ha elkészült mehet a sózóba. Nem csak finom sós ízt biztosít a sajtnak a,
            de fertőtleníti és a kéregképződést is segíti. A sózás után szikkasztjuk a sajtokat,
            hogy egy vékony kéreg keletkezzen a sajt körül, majd mehet az érlelőbe, ahol minimum
            3 hónapig tartjuk. Az érlelés alatt fontos, a páratartalom és a hőfok. Naponta át kell
            szellőztetni az érlelő helységet. Ezeket is több ízben állítjuk elő. Chilis-Rozmaring,
            Kömény, Provence, Kapor, Metélőhagyma, fokhagyma, Natúr, Bazsalikom, Rózsaborsos.
            </p>
            <a href="{{ url('gallery#producty') }}"><span class="hvr-border-fade btn-next" style="margin-top: 20px;">Galéria</span></a>
        </div>
    <div class="col-50 main-bg prod-text-v" id="jogh1">
        <h2>Joghurtok</h2>
        <p><strong>Látványos, ízes, kellemes.</strong><br>
            Hűtve és fagyasztva is nagyszerű édesség. Uzsonnára éppen úgy fogyaszthatjuk,
            mint ünnepibb desszertnek, ugyanis nagyon jól kombinálható mindenféle szezonális
             gyümölcsökkel, piskótával, keksszel vagy ropogós corn flakesszel rétegezve pohárdesszertnek,
              de Túró Rudi-kedvelők akár csokoládédarabokkal is gazdagíthatják.<br>
              Viszonylag kevés kalóriát tartalmaz, rendkívül tápláló.</p>
    </div>
    <div class="col-50 main-bg prod-img" id="jogh2">
        <img src="{{ url('img/products/joghurt.png') }}">
    </div>
</section> --}}
<section class="content product-main">
    <div class="cont-flex">
        <div class="prod-text">
            <h2>Érlelt félkemény sajtok</h2>
            <div class="prod-flex">
        <p>Pasztőrözött tehéntejből készült, 3-8 hónapig érlelt zsíros, félkemény sajt.<br>
            Szilárd, de jól vágható, szeletelhető és reszelhető állományú sajt
            Natúr, chilis-rozmaringos, provance fűszeres ízesítésben készül.<br>
            Kellemes nem tolakodó ízű krémes állagú érlelt sajt.<br>
            Általában 6-8 kg os egy guriga sajt.<br>
            Minimum három hónapig érleljük, ezért igazán karakteres ízvilágot kapunk,
             az érlelés első három hetében naponta, kéthónapos koráig kétnaponta, aztán hetente kétszer
             kézzel forgatjuk a sajtokat és sós vízzel mossuk a kérgét.<br>
            Sajttálak, hidegtálak, tészták és pizzák feltétének kiváló alapanyaga. <br>
            Laktózérzékenyek fogyaszthatják, a hosszú érlelési idő alatt a tejben lévő tejcukor lebomlik!

            </p>
            <div class="product-main__img" data-aos="zoom-in" data-aos-offset="50" data-aos-delay="50" data-aos-duration="1000" data-aos-easing="ease-in-out" data-aos-once="true">
                <img class="drop-shadow" src="{{ url('https://aripwqkyxp.cloudimg.io/v7/jerseytehen.hu/img/felkemeny.png') }}">
            </div>
            </div>
        </div>
        <div class="prod-text joghurt">
            <h2>Natúr és gyümölcs joghurt</h2>
            <div class="prod-flex">
        <p>Pasztőrözött tehéntejből készült probiotikus (támogatja a bélflórát) joghurt.<br>
            Teljes (nem fölözött tejből készül, teljes beltartalommal) tejből készült, krémes,
            lágy, savanykás íz világú natúr vagy gyümölcs ágyra fektetett krém fehér mennyország.
            <br>
            Szezonális gyümölcs lekvárral.

            </p>
            <div class="product-main__img-j" data-aos="zoom-in" data-aos-offset="50" data-aos-delay="50" data-aos-duration="1000" data-aos-easing="ease-in-out" data-aos-once="true">
                <img class="drop-shadow" src="{{ url('https://aripwqkyxp.cloudimg.io/v7/jerseytehen.hu/img/prod-joghurt.png') }}">
            </div>
            </div>
        </div>
        <div class="prod-text  joghurt">
            <h2>Gomolya</h2>
            <div class="prod-flex">
        <p class="p-margin">Pasztőrözött tehéntejből készült 3-7 napig érlelt zsíros, félkemény „Friss sajt”.<br>
            Natúr és fűszeres változatokban kapható. pl: snidlinges, fokhagymás-bazsalikomos,
            kapros, lilahagymás.<br>
            Kapható népszerű füstölt verzióban is!
            </p>
            <div class="product-main__img-g" data-aos="zoom-in" data-aos-offset="50" data-aos-delay="50" data-aos-duration="1000" data-aos-easing="ease-in-out" data-aos-once="true">
                <img class="drop-shadow" src="{{ url('https://aripwqkyxp.cloudimg.io/v7/jerseytehen.hu/img/cheese.png') }}">
            </div>
            </div>
        </div>
        <div class="prod-text  joghurt">
            <h2>Krémsajt</h2>
            <div class="prod-flex">
        <p class="p-margin">Pasztőrözött tehéntejből készült zsíros, friss lágysajt.<br>
            Fokhagymás, snidlinges, magyaros változatokban készítjük.<br>
            A kész lágy sajtot ízesítjük, majd tejszínnel kihabosítjuk.

            </p>
            <div class="product-main__img-g xx" data-aos="zoom-in" data-aos-offset="50" data-aos-delay="50" data-aos-duration="1000" data-aos-easing="ease-in-out" data-aos-once="true">
                <img class="drop-shadow" src="{{ url('https://aripwqkyxp.cloudimg.io/v7/jerseytehen.hu/img/kremsajt.png') }}" style="width: 250px; margin-top: -20px;">
            </div>
            </div>
        </div>
    </div>
</section>

@endsection
