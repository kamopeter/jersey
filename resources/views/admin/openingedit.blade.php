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
      <form method="post" action="{{ route('opening.update', $open->id) }}">
          <div class="form-group">
              @csrf
              @method('PATCH')
              <label for="name">Hely</label>
              <input type="text" class="form-control" name="local" value="{{ $open->local }}"/>
          </div>
          <div class="form-group">
            <label for="value">Címek</label>
            <input type="text" class="form-control" name="address"  value="{{ $open->address }}" >
        </div>
          <div class="form-group">
            <label for="value">Nyitvatartás</label>
            <input type="text" class="form-control" name="opened" value="{{ $open->opened }}" />
        </div>
          <div class="form-group">
              <label for="value">Térkép link</label>
              <input type="text" class="form-control" name="mapindex" value="{{ $open->mapindex }}"/>
          </div>
        <button type="submit" class="btn btn-block btn-success">Módosítás</button>
      </form>
  </div>
</div>
@endsection
