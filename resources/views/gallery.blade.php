@extends('welcome')
@section('content')
<section class="container gallery-main">
    <div class="header-container">
        <div class="hero">
            <h1>Galéria</h1>
            <p>Nézd meg képeinket!</p>
        </div>
    </div>
</section>
</header>
    <section class="content gallery-content">
        <h1 id="producty">Termékek</h1>
        <hr>
        <div class="img-gal" id="lightgallery">

        @foreach ($images as $image)
        @if($image->place === 'termek')

        <a href="{{ url('https://aripwqkyxp.cloudimg.io/v7/jerseytehen.hu/img/gallery/'.$image->filename) }}">
        <span class="img-box"><img src="{{ url('https://aripwqkyxp.cloudimg.io/v7/jerseytehen.hu/img/gallery/'.$image->filename) }}"></span>
        </a>
        @endif
        @endforeach
        </div>
        <h1 id="farm">Jersey farm</h1>
        <hr>
        <div class="img-gal" id="lightgallery2">
            @foreach ($images as $image)
        @if($image->place === 'tehen')
        <a href="{{ url('https://aripwqkyxp.cloudimg.io/v7/jerseytehen.hu/img/gallery/'.$image->filename) }}">
        <span class="img-box"><img src="{{ url('https://aripwqkyxp.cloudimg.io/v7/jerseytehen.hu/img/gallery/'.$image->filename) }}"></span>
        </a>
        @endif
        @endforeach
        </div>
    </section>

@endsection
@section('lightgallery')
<script type="text/javascript">
    $(document).ready(function() {
        $("#lightgallery").lightGallery();
        $("#lightgallery2").lightGallery();
    });
</script>
@endsection
