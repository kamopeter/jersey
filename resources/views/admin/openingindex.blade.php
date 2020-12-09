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
        <h1 style="text-align: left;">Nyitvatartás</h1> <a href="{{ route('opening.create') }}" class="btn btn-success" style="margin-bottom: 20px;">Új hely felvétele</a>
    <table class="table" id="table">
      <thead>
          <tr class="table-warning">
            <td>Hely</td>
            <td>Cím</td>
            <td>Nyitvatartás</td>
            <td class="text-center">Műveletek</td>
          </tr>
      </thead>
      <tbody>
          @foreach($open as $openings)
          <tr>
              <td>{{$openings->local}}</td>
              <td>{{$openings->address}}</td>
              <td>{{$openings->opened}}</td>
              <td class="text-center">
                  <a href="{{ route('opening.edit', $openings->id)}}" class="btn btn-primary btn-sm" style="margin: 5px;">Módosítás</a>
                      @csrf
                      @method('DELETE')
          <form  action="{{ route('opening.destroy', $openings->id)}}" method="post" style="display: inline-block">
                      <button class="btn btn-danger btn-sm delete" data-id="{{ $openings->id }}" data-action="{{ route('opening.destroy',$openings->id) }}" onclick="deleteConfirmation({{$openings->id}})">Törlés</button>
                    </form>

          </tr>
          @endforeach
      </tbody>
    </table>
        </div>
    </div>
@endsection
