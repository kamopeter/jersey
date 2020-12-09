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
        <h1 style="text-align: left;">Referenciák</h1> <a href="{{ route('referencies.create') }}" class="btn btn-success" style="margin-bottom: 20px;">Új referencia hozzáadása</a>
    <table class="table" id="table">
      <thead>
          <tr class="table-warning">
            <td>Kép</td>
            <td>Cím</td>
            <td>Szöveg</td>
            <td class="text-center">Műveletek</td>
          </tr>
      </thead>
      <tbody>
          @foreach($referencies as $reference)
          <tr>
              <td><img src="{{ url('img/ref/'.$reference->image) }}" style="width: 100px; height: auto;"></td>
              <td>{{$reference->title}}</td>
              <td style="overflow: hidden;">{{$reference->description}}</td>
              <td class="text-center">
                <a href="{{ route('referencies.edit', $reference->id)}}" class="btn btn-primary btn-sm" style="margin: 5px;">Módosítás</a>
                  {{-- <a href="{{ route('opening.edit', $openings->id)}}" class="btn btn-primary btn-sm" style="margin: 5px;">Módosítás</a>--}}
                  <form  action="{{ route('referencies.destroy', $reference->id)}}" method="post" style="display: inline-block">
                    @csrf
                    @method('DELETE')
                      <button class="btn btn-danger btn-sm delete" data-id="{{ $reference->id }}" data-action="{{ route('referencies.destroy',$reference->id) }}" onclick="deleteConfirmation({{$reference->id}})">Törlés</button>
                    </form>

          </tr>
          @endforeach
      </tbody>
    </table>
        </div>
    </div>
@endsection
