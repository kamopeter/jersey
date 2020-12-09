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
    Nyitvatartás
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
      <form method="post" action="{{ route('opening.store') }}">
        <div class="form-group">
            @csrf
            <label for="local">Hely</label>
            <input type="text" class="form-control" name="local"/>
        </div>
          <div class="form-group">
              <label for="value">Címek</label>
              <input type="text" class="form-control" name="address"/>
          </div>
          <div class="form-group">
              <label for="opened">Nyitvatartás</label>
              <input type="text" class="form-control" name="opened"/>
          </div>
          <div class="form-group">
            <label for="opened">Térkép link</label>
            <input type="text" class="form-control" name="mapindex"/>
        </div>
          <button type="submit" class="btn btn-block btn-success">Mentés</button>
      </form>
  </div>
</div>
    </div>
</div>
@endsection
