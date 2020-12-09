@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Képek feltöltése</div>

                    <div class="card-body">

                        <!-- print success message after file upload  -->
                        @if(Session::has('success'))
                            <div class="alert alert-success">
                                {{ Session::get('success') }}
                                @php
                                    Session::forget('success');
                                @endphp
                            </div>
                        @endif

                        <form method="post" action="{{ route('upload') }}" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label>Feltöltés helye</label>
                                <select class="form-control" name="place">
                                    <option selected>Válassz</option>
                                    <option value="termek">Termék</option>
                                    <option value="tehen">Boci</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="title">Képek</label>
                                <input type="file" id="uploadFile" name="files[]" class="form-control-file" multiple="">
                                @if($errors->has('files'))
                                    <span class="help-block text-danger">{{ $errors->first('files') }}</span>
                                @endif
                            </div>

                            <div class="text-center">
                                <button class="btn btn-primary">Feltöltés</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="imagepreview"></div>
@endsection
