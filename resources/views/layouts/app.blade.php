<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Pellérdi Sajtműhely / Admin</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.21/af-2.3.5/b-1.6.3/cr-1.5.2/fc-3.3.1/fh-3.1.7/kt-2.5.2/r-2.2.5/rg-1.1.2/rr-1.2.7/sc-2.0.2/sp-1.1.1/sl-1.3.1/datatables.min.css"/>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/admin') }}">
                    Pellérdi Sajtműhely / Admin
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest

                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Bejelentkezés') }}</a>
                            </li>
                        @else
                        <li class="nav-item"><a class="nav-link" href="{{ route('opening.index') }}" style="font-weight: bold;">Nyitvatartás</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('pricedit.index') }}" style="font-weight: bold;">Árlista</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('referencies.index') }}" style="font-weight: bold;">Referenciák</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ url('admin/upload') }}" style="font-weight: bold;">Galéria</a></li>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Kijelentkezés') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>

      <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.21/af-2.3.5/b-1.6.3/cr-1.5.2/fc-3.3.1/fh-3.1.7/kt-2.5.2/r-2.2.5/rg-1.1.2/rr-1.2.7/sc-2.0.2/sp-1.1.1/sl-1.3.1/datatables.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" type="text/js"></script>
      <script type="text/javascript">

        $(document).ready(function() {
        $('#table').DataTable( {
            responsive: true,
            select: true,
            colReorder: true,
            columnDefs: [{targets: 6,
                    render: function ( data, type, row ) {
                      var color = 'black';
                      if (data == 'Beváltva') {
                        color = 'red';
                      }
                      return '<span style="color:' + color + '; font-size: 18px;">' + data + '</span>';
                    }
               }]
        });
    } );
          </script>
          <script type="text/javascript">

$(document).ready(function(){
 $('#uploadFile').on('change', function(){ //on file input change
    if (window.File &amp;&amp; window.FileReader &amp;&amp; window.FileList &amp;&amp; window.Blob) //check File API supported browser
    {

        var data = $(this)[0].files; //this file data

        $.each(data, function(index, file){ //loop though each file
            if(/(\.|\/)(gif|jpe?g|png)$/i.test(file.type)){ //check supported file type
                var fRead = new FileReader(); //new filereader
                fRead.onload = (function(file){ //trigger function on successful read
                return function(e) {
                    var img = $('<img/>').addClass('thumb').attr('src', e.target.result); //create image element
                    $('#imagepreview').append(img); //append image to output element
                };
                })(file);
                fRead.readAsDataURL(file); //URL representing the file's data.
            }
        });

    }else{
        alert("Your browser doesn't support File API!"); //if File API is absent
    }
 });
});

          </script>
          <script>
           function limitText() {
  var ta= document.getElementById('textarea'),
      count= ta.value.length,
      ml= ta.maxLength,
      remaining= ml - count,
      cc= document.getElementById('charcount_text');

  if(remaining <= 0) {
    cc.innerHTML = 'A '+ml+' karakteres keretet kihasználtad.' ;
  } else if(remaining <= 50) {
    cc.innerHTML = ml+' karaktert használhatsz fel, ' + remaining  + ' maradt.';
  } else {
    cc.innerHTML = '200 karakter áll rendelkezésedre';
  }
}
          </script>
</body>
</html>
