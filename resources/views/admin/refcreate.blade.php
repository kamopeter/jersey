@extends('layouts.app')
@section('content')

<div class="card push-top">
    <div class="card-header">
      Módosítás
    </div>
    <div class="card-body">
<form action="{{ route('referencies.store') }}" method="POST" name="add_product" enctype="multipart/form-data">
    @csrf
<div class="row justify-content-center">
<div class="col-md-6">
<div class="form-group">
<strong>Cím</strong>
<input type="text" name="title" class="form-control" placeholder="Írd be a címet">
<span class="text-danger">{{ $errors->first('title') }}</span>
</div>
</div>
</div>
<div class="row justify-content-center">
<div class="col-md-6">
<div class="form-group">
<strong>Leírás</strong>
<textarea class="form-control" col="4" name="description" placeholder="Ide írd a leírást" id="textarea" maxlength="300" onkeyup="limitText()"></textarea>
<div id="charcount_text"></div>
<span class="text-danger">{{ $errors->first('description') }}</span>
</div>
</div>
</div>
<div class="row justify-content-center">
<div class="col-md-6">
    <label for="title">Képek</label>
    <input type="file" id="uploadFile" name="image[]" class="form-control-file">
    @if($errors->has('image'))
        <span class="help-block text-danger">{{ $errors->first('file') }}</span>
    @endif
</div>
<div class="col-md-6">
    <br>
<button type="submit" class="btn btn-primary">Mentés</button>
</div>
</div>
</form>
    </div>
</div>
@endsection

