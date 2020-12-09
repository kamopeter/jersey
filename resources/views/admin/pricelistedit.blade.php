@extends('layouts.app')

@section('content')

<style>
    .container {
      max-width: 450px;
    }
    .push-top {
      margin-top: 50px;
    }
</style>

<div class="card push-top">
  <div class="card-header">
    Módosítás
  </div>

  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('pricedit.update', $pricelist->id) }}">
          <div class="form-group">
              @csrf
              @method('PATCH')
              <label for="name">Termék neve</label>
              <input type="text" class="form-control" name="productname" value="{{ $pricelist->productname }}"/>
          </div>
          <div class="form-group">
            <label for="value">Ár</label>
            <input type="text" class="form-control" name="price"  value="{{ $pricelist->price }}" >
        </div>
          <div class="form-group">
            <label for="value">Egység</label>
            <input type="text" class="form-control" name="unity" value="{{ $pricelist->unity }}" />
        </div>
        <button type="submit" class="btn btn-block btn-success">Módosítás</button>
      </form>
  </div>
</div>
@endsection
