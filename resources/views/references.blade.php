@extends('welcome')
@section('content')
<section class="container ref-main">
    <div class="header-container">
        <div class="hero">
            <h1>Referenciák</h1>
            <p>és partnereink</p>
        </div>
    </div>
</section>
</header>
<section class="content">
    <div class="ref-container">
        @foreach ($referencies as $reference)
        <div class="ref-card">
            <div class="ref-card__img">
                <img src="{{ url('img/ref/'.$reference->image) }}">
            </div>
            <div class="ref-card__text">
                <h2>{{ $reference->title }}</h2>
                <p>{{ $reference->description }}</p>
            </div>
        </div>
        @endforeach
    </div>
</section>
@endsection
