@extends('layouts.app')
@section('content')
<style>
    .push-top {
      margin-top: 50px;
    }
  </style>

  <div class="push-top">
    @if(session()->get('success'))
      <div class="alert alert-success">
        {{ session()->get('success') }}
      </div><br />
    @endif
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
        <h1 style="text-align: left;">Árlisták</h1> <a href="{{ route('pricedit.create') }}" class="btn btn-success" style="margin-bottom: 20px;">Új termék</a>
    <table class="table" id="table">
      <thead>
          <tr class="table-warning">
            <td>Termék neve</td>
            <td>Ár</td>
            <td>Egység</td>
            <td class="text-center">Műveletek</td>
          </tr>
      </thead>
      <tbody>
          @foreach($pricelist as $pricelistc)
          <tr>
              <td>{{$pricelistc->productname}}</td>
              <td>{{$pricelistc->price}}</td>
              <td>{{$pricelistc->unity}}</td>
              <td class="text-center">
                  <a href="{{ route('pricedit.edit', $pricelistc->id)}}" class="btn btn-primary btn-sm" style="margin: 5px;">Módosítás</a>
          <form  action="{{ route('pricedit.destroy', $pricelistc->id)}}" method="post" style="display: inline-block">
            @csrf
            @method('DELETE')
                      <button class="btn btn-danger btn-sm delete" data-id="{{ $pricelistc->id }}" data-action="{{ route('pricedit.destroy',$pricelistc->id) }}" onclick="deleteConfirmation({{$pricelistc->id}})">Törlés</button>
                    </form>

          </tr>
          @endforeach
      </tbody>
    </table>
        </div>
    </div>
@endsection
