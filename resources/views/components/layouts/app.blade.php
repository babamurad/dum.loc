<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>Döwrebap ulag merkezi</title>

    <!-- MDB icon -->

    <link rel="icon" href="img/favicon.ico" type="image/x-icon">

    <!--Google Fonts-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400;0,500;0,600;0,700;1,700&display=swap"
          rel="stylesheet">
    <!--/Google Fonts-->
    <!-- Font Awesome -->

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">

    <!-- Bootstrap core CSS -->

    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- Material Design Bootstrap -->

    <link rel="stylesheet" href="css/mdb.min.css">

    <!-- Your custom styles (optional) -->

    <link rel="stylesheet" href="css/style.css">

    <style>
        @media (min-width: 800px) and (max-width: 850px) {

            .navbar:not(.top-nav-collapse) {

                background: #1C2331 !important;

            }

        }
    </style>
    <script>
        $('body').append('<div class="upbtn"></div>');
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
        });
        $('.upbtn').on('click', function() {
            $('html, body').animate({
                scrollTop: 0
            }, 500);
            return false;
        });
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

<section class="h100" id="home">

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top scrolling-navbar">
        <div class="container">
            <a class="navbar-brand" href="#home">
                <img src="img/Logo20.png" alt="logo" class="w-59">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav ml-auto smooth-scroll">
                    <li class="nav-item text-nowrap">
                        <a class="nav-link" href="#sectionAbout" data-offset="100">О компании</a>
                    </li>
                    <li class="nav-item text-nowrap">
                        <a class="nav-link" href="#mission" data-offset="100">Миссия и ценности</a>
                    </li>
                    <li class="nav-item text-nowrap">
                        <a class="nav-link" href="#our_files" data-offset="100">Наши файлы</a>
                    </li>
                    <li class="nav-item text-nowrap">
                        <a class="nav-link" href="#rascet" data-offset="100">Расчет ставок</a>
                    </li>
                    <li class="nav-item text-nowrap">
                        <a class="nav-link" href="#contacts" data-offset="100">Контакты</a>
                    </li>
                </ul>

            </div>
        </div>
    </nav>

    <!-- Navbar -->



    <!--Carousel Wrapper-->

    <div id="carousel-example-1z" class="carousel slide carousel-fade" data-ride="carousel">
        <h2 class="text-center vezet">« Везём МЫ- везёт ВАМ! »</h2>

        <!--Indicators-->

        <ol class="carousel-indicators">

            <li data-target="#carousel-example-1z" data-slide-to="0" class="active"></li>

            <li data-target="#carousel-example-1z" data-slide-to="1"></li>

            <li data-target="#carousel-example-1z" data-slide-to="2"></li>

            <li data-target="#carousel-example-1z" data-slide-to="3"></li>

        </ol>

        <!--/.Indicators-->

        <!--Slides-->

        <div class="carousel-inner" role="listbox">
            <!--First slide-->
            <div class="carousel-item active">

                <div class="view"
                     style="background-image: url('img/slide1-11.jpg'); background-repeat: no-repeat; background-size: cover;">
                    <!-- Mask & flexbox options-->
                    <div class="mask rgba-black-light d-flex justify-content-center align-items-center">
                        <div class="container p-0">
                            <div class="col-md-6">
                                <!-- Content -->

                                <div class="text-left white-text wow fadeIn tx-centr">

                                    <h1 class="mb-4 text-uppercase">

                                        <strong>Железнодорожные</strong>

                                    </h1>

                                    <p>

                                        <strong class="perew text-uppercase">Перевозки</strong>

                                    </p>

                                    <p class="mb-4 d-none d-md-block">

                                        <strong>Отличаются исключительной надежностью и вместимостью, безопасностью.
                                            Предлагаем выгодное решение цепи поставок, что снизит стоимость перевозки и сократит сроки поставки
                                            груза в конечный пункт назначения.
                                        </strong>

                                    </p>

                                    <a href="cart.html#kartocka" class="btn btn-danger btn-rounded btn-lg">ЧИТАТЬ ДАЛЕЕ

                                        <i class="fas fa-subway ml-2"></i>

                                    </a>

                                </div>
                                <!-- Content -->



                            </div>
                            <div class="col-md-6">


                            </div>

                        </div>
                    </div>
                    <!-- Mask & flexbox options-->
                </div>
            </div>
            <!--/First slide-->

            <!--Second slide-->
            <div class="carousel-item">

                <div class="view"
                     style="background-image: url('img/slide4-1.jpg'); background-repeat: no-repeat; background-size: cover;">
                    <!-- Mask & flexbox options-->

                    <div class="mask rgba-black-light d-flex justify-content-center align-items-center">
                        <div class="container p-0">
                            <div class="col-md-6">
                                <!-- Content -->

                                <div class="text-left white-text  wow fadeIn tx-centr">

                                    <h1 class="mb-4 text-uppercase">

                                        <strong>Морские</strong>

                                    </h1>

                                    <p>

                                        <strong class="perew text-uppercase">Перевозки</strong>

                                    </p>

                                    <p class="mb-4 d-none d-md-block">

                                        <strong>Востребованы благодаря низкой себестоимости, большой грузоподъёмности морских судов и
                                            минимальным ограничениям на пропускную способность, выгодно в случае транспортировки грузов на большие
                                            расстояния.</strong>

                                    </p>

                                    <a href="cart.html#kartocka" class="btn btn-danger btn-rounded btn-lg">ЧИТАТЬ ДАЛЕЕ

                                        <i class="fas fa-ship ml-2"></i>

                                    </a>

                                </div>
                                <!-- Content -->

                            </div>

                            <div class="col-md-6">



                            </div>
                        </div>
                    </div>

                    <!-- Mask & flexbox options-->
                </div>

            </div>

            <!--/Second slide -->

            <!--Third slide-->

            <div class="carousel-item">

                <div class="view"
                     style="background-image: url('img/slide3-1.jpg'); background-repeat: no-repeat; background-size: cover;">

                    <!-- Mask & flexbox options-->

                    <div class="mask rgba-black-light d-flex justify-content-center align-items-center">
                        <div class="container p-0">
                            <div class="col-md-6">

                                <!-- Content -->

                                <div class="text-left  white-text  wow fadeIn tx-centr">

                                    <h1 class="mb-4 text-uppercase">

                                        <strong>Воздушные</strong>

                                    </h1>

                                    <p>

                                        <strong class="perew text-uppercase">Перевозки</strong>

                                    </p>

                                    <p class="mb-4 d-none d-md-block">

                                        <strong>Наши риски основаны на приверженности, преданности делу и профессионализме.

                                            Наша профессиональная команда придерживается всех стандартов качества и совершенства.

                                        </strong>

                                    </p>

                                    <a href="cart.html#kartocka" class="btn btn-danger btn-rounded btn-lg">ЧИТАТЬ ДАЛЕЕ

                                        <i class="fas fa-plane ml-2"></i>

                                    </a>

                                </div>

                                <!-- Content -->


                            </div>

                            <div class="col-md-6">



                            </div>

                        </div>



                    </div>

                    <!-- Mask & flexbox options-->



                </div>

            </div>
            <!--/Third slide -->
            <!--Forth slide-->

            <div class="carousel-item">

                <div class="view"
                     style="background-image: url('img/slide2-1.jpg'); background-repeat: no-repeat; background-size: cover;">
                    <!-- Mask & flexbox options-->

                    <div class="mask rgba-black-light d-flex justify-content-center align-items-center">
                        <div class="container p-0">
                            <div class="col-md-6">



                                <!-- Content -->

                                <div class="text-left white-text  wow fadeIn tx-centr">

                                    <h1 class="mb-4 text-uppercase">

                                        <strong>Автомобильные</strong>

                                    </h1>

                                    <p>

                                        <strong class="perew text-uppercase">Перевозки</strong>

                                    </p>

                                    <p class="mb-4 d-none d-md-block">

                                        <strong>Тысячи проектов сделали нас лидером в области транспорта. Мы стоим за нашим обещанием

                                            предоставлять своевременные и качественные страховые и складские услуги.



                                        </strong>

                                    </p>

                                    <a href="cart.html#kartocka" class="btn btn-danger btn-rounded btn-lg">ЧИТАТЬ ДАЛЕЕ

                                        <i class="fas fa-truck ml-2"></i>

                                    </a>

                                </div>

                                <!-- Content -->


                            </div>

                            <div class="col-md-6">



                            </div>
                        </div>
                    </div>

                    <!-- Mask & flexbox options-->



                </div>

            </div>
            <!--/Forth slide-->
        </div>

        <!--/.Slides-->
        <!--Controls-->

        <a class="carousel-control-prev" href="#carousel-example-1z" role="button" data-slide="prev">

            <span class="carousel-control-prev-icon" aria-hidden="true"></span>

            <span class="sr-only">Previous</span>

        </a>

        <a class="carousel-control-next" href="#carousel-example-1z" role="button" data-slide="next">

            <span class="carousel-control-next-icon" aria-hidden="true"></span>

            <span class="sr-only">Next</span>

        </a>

        <!--/.Controls-->

    </div>
    <!--/.Carousel Wrapper-->
</section>
<main>

    {{ $slot }}

</main>

<!--Footer-->

<footer class="page-footer mdb-color darken-3 text-center text-md-left pt-5">



    <!--Footer Links-->

    <div class="container mb-3">



        <!--First row-->

        <div class="row">



            <!--First column-->

            <div class="col-md-4 mt-1 mb-1 wow fadeIn" data-wow-delay="0.3s">

                <!--About-->

                <h5 class="title mb-4">ХО Довребап улаг меркези </h5>



                <p>транспортно-логистическая компания в Туркменистане. </p>



                <p>Создана 7 мая 2016 года и специализируется на жд перевозках.</p>

                <!--/About -->



                <div class="footer-socials mt-2">

                    <!--Facebook-->

                    <a type="button" class="btn-floating hvred btn-danger-2"><i class="fab fa-facebook-f"></i></a>

                    <!--Dribbble-->

                    <a type="button" class="btn-floating hvred  btn-danger-2"><i class="fab fa-dribbble"></i></a>

                    <!--Twitter-->

                    <a type="button" class="btn-floating hvred btn-danger-2"><i class="fab fa-twitter"></i>

                        <!--Google +-->

                        <a type="button" class="btn-floating hvred btn-danger-2"><i class="fab fa-google-plus-g"></i></a>

                </div>

            </div>

            <!--/First column-->



            <hr class="w-100 clearfix d-md-none">



            <!--Second column-->

            <div class="col-lg-3 ml-lg-auto col-md-4 mt-1 mb-1 wow fadeIn" data-wow-delay="0.3s">

                <!--Search-->

                <!--Info-->

                <p><i class="fas fa-home pr-1"></i>744036, Туркменистан, г. Ашгабат, ул Б. Сапармырата Туркменбаши шаелы, д.124, 7 этаж, 201 офис</p>

                <p><i class="fas fa-envelope pr-1"></i>mail@dum-tm.com</p>

                <p><i class="fas fa-phone pr-1"></i> +(99312) 46-87-72 </p>

                <p><i class="fas fa-print pr-1"></i> +(99312) 46-87-39</p>



            </div>

            <!--/Second column-->



            <hr class="w-100 clearfix d-md-none">



            <!--Third column-->

            <div class="col-lg-3 ml-lg-auto col-md-4 mt-1 mb-1 wow fadeIn" data-wow-delay="0.3s">

                <!--Contact-->

                <h5 class="text-uppercase mb-4 ">QR код нашего директора</h5>



                <img src="img/MyahriQR-cod.jpg" alt="" class="m-0 p-0" style="max-width: 88%;">



            </div>

            <!--/Third column-->



        </div>

        <!--/First row-->



    </div>

    <!--/Footer Links-->



    <!--Copyright-->

    <div class="footer-copyright py-3 text-center">

        <div class="container-fluid">

            © 2024 Copyright: <a href="http://dum-tm.com" target="_blank">dum-tm.com </a>


        </div>

    </div>

    <!--/Copyright-->

</footer>

<!--/Footer-->



<!-- End your project here-->



<!-- jQuery -->

<script type="text/javascript" src="js/jquery.min.js"></script>

<!-- Bootstrap tooltips -->

<script type="text/javascript" src="js/popper.min.js"></script>

<!-- Bootstrap core JavaScript -->

<script type="text/javascript" src="js/bootstrap.min.js"></script>

<!-- MDB core JavaScript -->

<script type="text/javascript" src="js/mdb.min.js"></script>

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
            'background:url(img/svg/icons8_double_up_1.svg) 0 0 no-repeat; }' +
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
                    //alert('Успешно');
                    result = '<h3>Ваше сообщение отправлено.</h3>';
                    $('.status').html(result);
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
