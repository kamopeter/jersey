@extends('welcome')
@section('content')
<section class="container pricelist-main">
    <div class="header-container">
        <div class="hero">
            <h1>Árlista</h1>
            <p>Házi kézműves termékeink</p>
        </div>
    </div>
</section>
</header>
<section class="pricelist">
<table>
    <caption>Pellérdi sajtműhely árlista</caption>
    <thead>
      <tr>
        <th scope="col">Termék neve</th>
        <th scope="col" id="ar">Ár*</th>
      </tr>
    </thead>
    <tfoot>
      <tr>
        <td colspan="3">* Az árváltozás jogát fenntartjuk! </td>
      </tr>
    </tfoot>
    <tbody>
        @foreach($pricelist as $pricelistc)
      <tr>
        <th scope="row">
            {{$pricelistc->productname}}</th>
        <td>{{ $pricelistc->price }} Ft/{{ $pricelistc->unity }}</td>

      </tr>
      {{-- <tr>
        <th scope="row">Friss sajt</th>
        <td>2500 Ft-tól</td>

      </tr>
      <tr>
        <th scope="row">Vaj</th>
        <td>720 Ft/20dkg</td>

      </tr>
      <tr>
        <th scope="row">Natúr krémsajt</th>
        <td>2000 Ft/kg</td>

      </tr>--}}
      @endforeach
    </tbody>
  </table>
  <div style="text-align: center; font-weight: 400;">
  <a href="{{action('PricepageController@createPDF')}}">Árlista letöltése <i class="las la-download"></i></a>
  </div>
</section>
@endsection
