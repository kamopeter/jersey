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
        <h1 style="text-align: left;">Galéria</h1> <a href="{{ route('uploadcreate') }}" class="btn btn-success" style="margin-bottom: 20px;">Képek feltöltése</a>
    <table class="table" id="table">
      <thead>
          <tr class="table-warning">
            <td>Kép</td>
            <td>Kategória</td>
            <td>Feltöltés dátuma</td>
            <td class="text-center">Műveletek</td>
          </tr>
      </thead>
      <tbody>
          @foreach($images as $image)
          <tr>
              <td><img src="{{ url('img/gallery/'.$image->filename) }}" style="width: 100px; height: auto;"></td>
              <td>{{$image->place}}</td>
              <td>{{$image->created_at}}</td>
              <td class="text-center">
                  {{-- <a href="{{ route('opening.edit', $openings->id)}}" class="btn btn-primary btn-sm" style="margin: 5px;">Módosítás</a>--}}
                  <form  action="{{ route('uploadestroy', $image->id)}}" method="post" style="display: inline-block">
                    @csrf
                    @method('DELETE')
                      <button class="btn btn-danger btn-sm delete" data-id="{{ $image->id }}" data-action="{{ route('uploadestroy',$image->id) }}" onclick="deleteConfirmation({{$image->id}})">Törlés</button>
                    </form>

          </tr>
          @endforeach
      </tbody>
    </table>
        </div>
    </div>
@endsection

