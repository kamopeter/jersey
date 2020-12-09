<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

    {!! SEOMeta::generate(true) !!}
    {!! OpenGraph::generate(true) !!}
    <link rel="apple-touch-icon" sizes="57x57" href="{{ url('img/favicon/apple-icon-57x57.png') }}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{ url('img/favicon/apple-icon-60x60.png') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ url('img/favicon/apple-icon-72x72.png') }}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ url('img/favicon/apple-icon-76x76.png') }}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ url('img/favicon/apple-icon-114x114.png') }}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ url('img/favicon/apple-icon-120x120.png') }}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{ url('img/favicon/apple-icon-144x144.png') }}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ url('img/favicon/apple-icon-152x152.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ url('img/favicon/apple-icon-180x180.png') }}">
    <link rel="icon" type="image/png" sizes="192x192" href="{{ url('img/favicon/android-icon-192x192.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ url('img/favicon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{ url('img/favicon/favicon-96x96.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ url('img/favicon/favicon-16x16.png') }}">
    <meta name="msapplication-TileImage" content="{{ url('img/favicon/ms-icon-144x144.png') }}">
    <!-- Fonts -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link rel="stylesheet"
        href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />
    <!-- Styles -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/1.6.0/css/lightgallery.min.css" rel="stylesheet">
    {{-- <link href="{{ asset('css/lg-transitions.css') }}" rel="stylesheet"> --}}
    {{-- <script src="https://www.google.com/recaptcha/api.js" async defer></script> --}}
    <script>
        function onSubmit(token) {
            document.getElementById("form").submit();
        }

    </script>
</head>

<body>
    @if ($agent->isDesktop())
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/hu_HU/sdk.js#xfbml=1&version=v8.0"
        nonce="RqRs0aJh"></script>
    @endif
    <header>
        <nav>
            <div class="menu-icon">
                <i class="las la-bars" id="bread"></i>
            </div>
            <div id="logo" class="logo-hide">
                <img src="{{ url('img/logo.png') }}" />
            </div>
            <div class="menu">
                <ul>
                    <li><a href="{{ route('index') }}" class="hvr-grow"><i class="las la-home"></i> Főoldal</a></li>
                    <li><a href="{{ route('jersey') }}" class="hvr-grow"><img src="{{ url('img/cow-50.png') }}"
                                style="width: 15px; height: auto;" /> Jersey tenyészet</a></li>
                    <li><a href="{{ route('product') }}" class="hvr-grow"><i class="las la-cheese"></i> Termékeink</a>
                    </li>
                    <li><a href="{{ route('pricelist') }}" class="hvr-grow"><i class="las la-tags"></i> Árlista</a></li>
                    <li><a href="{{ route('open') }}" class="hvr-grow"><i class="las la-clock"></i> Nyitvatartás</a>
                    </li>
                    {{-- <li><a href="#" class="hvr-grow"><i class="las la-store"></i>
                            Kitelepülések</a></li>--}}
                    <li><a href="{{ route('gallery') }}" class="hvr-grow">{{-- <i
                                class="las la-thumbs-up"></i>--}} <i
                                class="las la-camera"></i> Galéria</a></li>
                    <li><a href="{{ route('contact') }}" class="hvr-grow"><i class="las la-phone"></i> Kapcsolat</a>
                    </li>
                    <li><a href="https://www.facebook.com/dombaifarm" class="hvr-grow" target="_blank"><i
                                class="lab la-facebook-square" style="font-size: 18px;"></i></a></li>
                </ul>
            </div>
        </nav>
        @yield('content')
        <footer>
            <p><a href="{{ route('adatk') }}" target="_blank" class="hvr-grow">Adatvédelmi nyilatkozat</a> | <a href="#" class="hvr-grow">Süti
                    szabályzat</a> | <a href="{{ route('contact') }}" class="hvr-grow">Kapcsolat</a></p>
        </footer>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="{{ asset('js/lightgallery.js') }}"></script>
        <script src="{{ asset('js/jquery.mousewheel.min.js') }}"></script>
        {{-- <script src="https://cdn.jsdelivr.net/picturefill/2.3.1/picturefill.min.js">
        </script> --}}
        <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
        <script src="{{ asset('js/main.js') }}"></script>
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script type="text/javascript">
            $(document).ready(function() {
                $(".menu-icon").on("click", function() {
                    $("nav ul").toggleClass("showing");
                });
            });
            // Scrolling Effect
            if ($(window).width() <= 768) {
                $('nav').addClass('black');
                $('#logo').addClass('logo');
                $('#logo').removeClass('logo-hide');
            } else {
                $(window).on("scroll", function() {
                    if ($(window).scrollTop()) {
                        $('nav').addClass('black');
                        $('#logo').addClass('logo');
                        $('#logo').removeClass('logo-hide');

                    } else {
                        $('nav').removeClass('black');
                        $('#logo').removeClass('logo');
                        $('#logo').addClass('logo-hide');
                    }
                })
            }

        </script>
        {{-- <script>
            $('.img-parallax').each(function() {
                var img = $(this);
                var imgParent = $(this).parent();

                function parallaxImg() {
                    var speed = img.data('speed');
                    var imgY = imgParent.offset().top;
                    var winY = $(this).scrollTop();
                    var winH = $(this).height();
                    var parentH = imgParent.innerHeight();


                    // The next pixel to show on screen
                    var winBottom = winY + winH;

                    // If block is shown on screen
                    if (winBottom > imgY && winY < imgY + parentH) {
                        // Number of pixels shown after block appear
                        var imgBottom = ((winBottom - imgY) * speed);
                        // Max number of pixels until block disappear
                        var imgTop = winH + parentH;
                        // Porcentage between start showing until disappearing
                        var imgPercent = ((imgBottom / imgTop) * 100) + (50 - (speed * 50));
                    }
                    img.css({
                        top: imgPercent + '%',
                        transform: 'translate(-50%, -' + imgPercent + '%)'
                    });
                }
                $(document).on({
                    scroll: function() {
                        parallaxImg();
                    },
                    ready: function() {
                        parallaxImg();
                    }
                });
            });

        </script> --}}
        <script>
            $(document).ready(function() {
                /* $('.slick-food').slick({
                   autoplay: true,
                   autoplaySpeed: 4000,
                   arrows: false,
                     mobileFirst: true,
                     variableWidth: false,
                     lazyLoad: 'ondemand',
                     infinite: true,
                     fade: true,
                    cssEase: 'linear',
                    accessibility: false
               }); */
                $('.jersey-slick').slick({
                    autoplay: true,
                    autoplaySpeed: 3000,
                    arrows: false,
                    slidesToShow: 4,
                    slidesToScroll: 3,
                    variableWidth: false,
                    lazyLoad: 'ondemand',
                    infinite: true,
                    cssEase: 'linear',
                    accessibility: false,
                    responsive: [{
                            breakpoint: 1100,
                            settings: {
                                slidesToShow: 3,
                                slidesToScroll: 3
                            }
                        },
                        {
                            breakpoint: 786,
                            settings: {
                                slidesToShow: 2,
                                slidesToScroll: 2
                            }
                        },
                        {
                            breakpoint: 420,
                            settings: {
                                slidesToShow: 1,
                                slidesToScroll: 1
                            }
                        }
                    ]
                });
                $('.test-slick').slick();
            });

        </script>
        <script>
            $('.card').on('click', '[data-action="drawer"]', function() {
                $(this).closest('.card').toggleClass("active");
            });

        </script>
        @yield('lightgallery')
        {{-- <script>
            $(document).ready(function() {
                $("#open").click(function() {
                    $(".flipper").toggleClass("flipped");
                    $(".avatar").toggleClass("small");
                    $(".small-name").toggleClass("small");
                    $('input.subject').focus();
                    $(".buttons.large").toggleClass("hide");
                });

                // transitions for the cancel button
                $('#cancel').click(function() {
                    $(".flipper").toggleClass("flipped");
                    $(".avatar").toggleClass("small");
                    $(".small-name").toggleClass("small");
                    $(".buttons.large").toggleClass("hide");
                })

                // Float label styles for subject & comments on focus
                $("input.subject").focus(function() {
                    $("label.subject").addClass('active blue');
                })
                $("textarea.comments").focus(function() {
                    $("label.comments").addClass('active blue');
                })

                // Float label styles for subject & comments on blur, if there is no value in the section.
                $("input.subject").blur(function() {
                    $('label.subject').removeClass('blue');
                    if (!$(this).val()) {
                        $('label.subject').removeClass('active blue');
                    }
                })
                $("textarea.comments").blur(function() {
                    $('label.comments').removeClass('blue');
                    if (!$(this).val()) {
                        $('label.comments').removeClass('active blue');
                    }
                })
            });

        </script> --}}
        <script>
            AOS.init();

        </script>
</body>

</html>
