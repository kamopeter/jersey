<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title></title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;1,300&display=swap');
        @font-face {
            font-family: 'Roboto', sans-serif;
            font-weight: normal;

            }
            tr, td {
                border: 1px solid #000;
            }
    </style>
  </head>
  <body>
    <table class="table" style="width: 100%; border: 1px solid #000;">
       <caption>Árlista</caption>
    <thead>
      <tr>
        <td><b>Termék</b></td>
        <td><b>Ár</b></td>
      </tr>
      </thead>
      <tbody>
          @foreach ($pricelist as $pricelistc)
      <tr>
        <td>
          {{$pricelistc->productname}}
        </td>
        <td>
          {{$pricelistc->price}} Ft/{{ $pricelistc->unity }}
        </td>
      </tr>
      @endforeach
      </tbody>
    </table>
  </body>
</html>
