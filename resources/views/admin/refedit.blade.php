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
      <form method="post" action="{{ route('referencies.update', $referencies->id) }}" enctype="multipart/form-data">
          <div class="form-group">
              @csrf
              @method('PATCH')
              <label for="name">Cím</label>
              <input type="text" class="form-control" name="title" value="{{ $referencies->title }}"/>
          </div>
          <div class="form-group">
            <label for="value">Szöveg</label>
            <input type="text" class="form-control" name="description"  value="{{ $referencies->description }}" >
        </div>
          <div class="form-group">
            <label for="value">Kép cseréje</label>
            <input type="file" class="form-control" name="image[]"/>
            <br>
            <img src="{{ url('img/ref/'.$referencies->image) }}" style="width: 200px;">
        </div>
        <button type="submit" class="btn btn-block btn-success">Módosítás</button>
      </form>
  </div>
</div>
@endsection
