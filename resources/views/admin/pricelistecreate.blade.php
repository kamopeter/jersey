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
<div class="row justify-content-center">
    <div class="col-md-8">

<div class="card push-top">
  <div class="card-header">
    Árlista
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
      <br>
      <form method="post" action="{{ route('pricedit.store') }}">
        <div class="form-group">
            @csrf
            <label for="local">Termék neve</label>
            <input type="text" class="form-control" name="productname"/>
        </div>
          <div class="form-group">
              <label for="value">Ár</label>
              <input type="text" class="form-control" name="price"/>
          </div>
          <div class="form-group">
              <label for="opened">Egység</label>
              <input type="text" class="form-control" name="unity"/>
          </div>
          <button type="submit" class="btn btn-block btn-success">Mentés</button>
      </form>
  </div>
</div>
    </div>
</div>
@endsection
