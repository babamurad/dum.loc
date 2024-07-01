<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>Döwrebap ulag merkezi</title>

    <!-- MDB icon -->

    <link rel="icon" href="{{ asset('img/favicon.ico') }}" type="image/x-icon">

    <!--Google Fonts-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
{{--    <link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400;0,500;0,600;0,700;1,700&display=swap"--}}
          rel="stylesheet">
    <!--/Google Fonts-->
    <!-- Font Awesome -->

{{--    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">--}}

    <!-- Bootstrap core CSS -->

    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">

    <!-- Material Design Bootstrap -->

    <link rel="stylesheet" href="{{ asset('css/mdb.min.css') }}">

    <!-- Your custom styles (optional) -->

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <!-- jQuery -->

    <script type="text/javascript" src="{{ asset('js/jquery.min.js') }}"></script>

    <style>
        @media (min-width: 800px) and (max-width: 850px) {

            .navbar:not(.top-nav-collapse) {

                background: #1C2331 !important;

            }

        }
    </style>
    <script>
        // $('body').append('<div class="upbtn"></div>');

            $(window).scroll(function() {
                if ($(this).scrollTop() > 100) {
                    $('.upbtn').css({
                        bottom: '15px'
                    });
                } else {
                    $('.upbtn').css({
                        bottom: '-80px'
                    });
                }
            })
        $(".upbtn").on('click', function() {
            $('html, body').animate({
                scrollTop: 0
            }, 500);
            return false;
        })
    </script>


    <!-- Yandex.Metrika counter -->
    <script type="text/javascript">
        (function(m, e, t, r, i, k, a) {
            m[i] = m[i] || function() {
                (m[i].a = m[i].a || []).push(arguments)
            };
            m[i].l = 1 * new Date();
            k = e.createElement(t), a = e.getElementsByTagName(t)[0], k.async = 1, k.src = r, a.parentNode.insertBefore(k, a)
        })
        (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

        ym(76255030, "init", {
            clickmap: true,
            trackLinks: true,
            accurateTrackBounce: true
        });
    </script>
    <noscript>
        <div><img src="https://mc.yandex.ru/watch/76255030" style="position:absolute; left:-9999px;" alt="" /></div>
    </noscript>
    <!-- /Yandex.Metrika counter -->
</head>

<body>
@if (Route::current()->uri == '/')
<section id="home" style="background-image: url({{ asset('img/small_0.jpg') }}); background-repeat: no-repeat; background-size: cover;">

    <div class="rgba-black-strong">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top scrolling-navbar">
            <div class="container">
                <a class="navbar-brand" href="{{ route('home') }}#home" wire:navigate>
                    <img src="{{ asset('img/Logo20.png') }}" alt="logo" class="w-59">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                    <ul class="navbar-nav ml-auto smooth-scroll ">
                        <li class="nav-item text-nowrap">
                            <a class="nav-link" href="#sectionAbout" data-offset="100">О компании</a>
                        </li>
                        <li class="nav-item text-nowrap">
                            <a class="nav-link" href="#mission" data-offset="100">Миссия и ценности</a>
                        </li>
                        <li class="nav-item text-nowrap">
                            <a class="nav-link" href="#our_files" data-offset="100">Файлы</a>
                        </li>
                        <li class="nav-item text-nowrap">
                            <a class="nav-link" href="#partners" data-offset="100">Партнеры</a>
                        </li>
                        <li class="nav-item text-nowrap">
                            <a class="nav-link" href="#awards" data-offset="100">Награды</a>
                        </li>
                        <li class="nav-item text-nowrap">
                            <a class="nav-link" href="#faq" data-offset="100">FAQ</a>
                        </li>
                        <li class="nav-item text-nowrap">
                            <a class="nav-link" href="#contacts" data-offset="100">Контакты</a>
                        </li>
                    </ul>

                </div>
            </div>
        </nav>
        <!-- Navbar -->

        @livewire('rascet-stavok-component')

    </div>
</section>
    @else
    <section>

        <div class="rgba-black-strong">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg navbar-dark fixed-top scrolling-navbar top-nav-collapse" style="        background-color: #1c2a48 !important;">
                <div class="container">
                    <a class="navbar-brand" href="{{ route('home') }}#home">
                        <img src="{{ asset('img/Logo20.png') }}" alt="logo" class="w-59">
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                        <ul class="navbar-nav ml-auto smooth-scroll ">
                            <li class="nav-item text-nowrap">
                                <a class="nav-link" href="{{ url('home/') }}#sectionAbout" data-offset="100">О компании</a>
                            </li>
                            <li class="nav-item text-nowrap">
                                <a class="nav-link" href="{{ url('home/') }}#mission" data-offset="100" wire:navigate>Миссия и ценности</a>
                            </li>
                            <li class="nav-item text-nowrap">
                                <a class="nav-link" href="{{ url('home/') }}#our_files" data-offset="100">Файлы</a>
                            </li>
                            <li class="nav-item text-nowrap">
                                <a class="nav-link" href="{{ url('home/') }}#partners" data-offset="100">Партнеры</a>
                            </li>
                            <li class="nav-item text-nowrap">
                                <a class="nav-link" href="{{ url('home/') }}#awards" data-offset="100">Награды</a>
                            </li>
                            <li class="nav-item text-nowrap">
                                <a class="nav-link" href="{{ url('home/') }}#faq" data-offset="100">FAQ</a>
                            </li>
                            <li class="nav-item text-nowrap">
                                <a class="nav-link" href="{{ url('home/') }}#contacts" data-offset="100">Контакты</a>
                            </li>
                        </ul>

                    </div>
                </div>
            </nav>
            <!-- Navbar -->
        </div>
    </section>
    @endif
<main>

    {{ $slot }}

</main>

<!--Footer-->

@livewire('footer-component')

<!--/Footer-->



<!-- End your project here-->





<!-- Bootstrap tooltips -->

<script type="text/javascript" src="{{ asset('js/popper.min.js') }}"></script>

<!-- Bootstrap core JavaScript -->

<script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>

<!-- MDB core JavaScript -->

<script type="text/javascript" src="{{ asset('js/mdb.min.js') }}"></script>

<!-- Your custom scripts (optional)<script type="text/javascript" src="js/jakor.js"></script> -->



<script type="text/javascript">
    new WOW().init();

    $(document).on('click', 'ul li', function() {
        $(this).addClass('active').siblings().removeClass('active')
    })

</script>
<!-- Здесь реализация элемента Читать далее...-->
<script>
    $(document).ready(function () {
        $('.content_toggle').click(function () {
            $('.content_block').slideToggle(300);
            return false;
        });
    });
</script>
<!--/-->

<script type="text/javascript">
    jQuery(document).ready(function($) {
        $('<style>' +
            '.scrollTop{ display:none; z-index:9999; position:fixed;' +
            'bottom:20px; left:87%; width:88px; height:125px;' +
            'background:url({{ asset('img/svg/icons8_double_up_1.svg') }}) 0 0 no-repeat; }' +
            '</style>').appendTo('body');
        var
            speed = 550,
            $scrollTop = $('<a href="#" class="scrollTop">').appendTo('body');
        $scrollTop.click(function(e) {
            e.preventDefault();
            $('html:not(:animated),body:not(:animated)').animate({
                scrollTop: 0
            }, speed);
        });

        //появление
        function show_scrollTop() {
            ($(window).scrollTop() > 330) ? $scrollTop.fadeIn(700): $scrollTop.fadeOut(700);
        }
        $(window).scroll(function() {
            show_scrollTop();
        });
        show_scrollTop();
    });
</script>
<script>
    $(document).ready(function(){
        $("#call").submit(function() {
            var form_data = $(this).serialize();
            $.ajax({
                type: "POST",
                url:  "call.php",
                data: form_data,
                success: function () {
                    $('.callstatus').hide;
                    result = '<h5>Мы вам перезвоним в ближайшее время.</h5>';
                    $('.callstatus').html(result);
                },
                error: function () {
                    alert('возникла ошибка');
                    result = msg;
                }
                //$('.note').html(result);
            });
            return false;
        });
        $("#contact-form").submit(function() {
            var form_data = $(this).serialize();
            $.ajax({
                type: "POST",
                url:  "contact.php",
                data: form_data,
                success: function () {
                    // Сообщение об успешной отправке
                    result = '<h3>Ваше сообщение успешно отправлено.</h3>';
                    $('.status').html(result);

                    // Очистка полей формы
                    $('#contact-form')[0].reset();
                },
                error: function () {
                    alert('возникла ошибка');
                    result = msg;
                }
                //$('.note').html(result);
            });
            return false;
        });
    });
</script>
<script>
    $(document).ready(function(){
        $("#Rasform").submit(function() {
            var form_data = $(this).serialize();
            $.ajax({
                type: "POST",
                url: "mail.php",
                data: form_data,
                success: function () {
                    $(".fields").hide();
                    //alert('Успешно');
                    result = '<h2>Ваша заявка принята.</h2><p>Мы ответим вам в ближайшее время.</p>';
                    $('.notes').html(result);
                },
                error: function () {
                    alert('возникла ошибка');
                    result = msg;
                }
                //$('.note').html(result);
            });
            return false;
        });
    });
</script>
</body>

</html>
