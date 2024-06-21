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
    <link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400;0,500;0,600;0,700;1,700&display=swap"
          rel="stylesheet">
    <!--/Google Fonts-->
    <!-- Font Awesome -->

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">

    <!-- Bootstrap core CSS -->

    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">

    <!-- Material Design Bootstrap -->

    <link rel="stylesheet" href="{{ asset('css/mdb.min.css') }}">

    <!-- Your custom styles (optional) -->

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

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

<section id="home"
         style="background-image: url({{ asset('img/small_0.jpg') }}); background-repeat: no-repeat; background-size: cover;">
<div class="rgba-black-strong">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top scrolling-navbar">
        <div class="container">
            <a class="navbar-brand" href="#home">
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

    <section class="pt-5 rasc-form" style="display: flex; align-items: center;">
        <div class="container">
            <h2 class="about white-text text-center text-uppercase mb-3 pt-3 wow fadeInUp" data-wow-delay="0.2s">Расчет
                ставок </h2>
            <div class="row">
                <div class="col-sm-8">
                    <form class="fields" action="" id="Rasform" method="POST">
                        <div class="row">
                            <div class="col-md-12">
                                <fieldset class="form-group">
                                    <div class="col-ms-12">
                                        <label class="text-white" for="name_of_comp">Наименование компании</label>
                                        <input type="text" class="rscet form-control" id="name_of_comp" name="name_of_comp"
                                               placeholder="ООО Победа" required>
                                    </div>
                                </fieldset>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <fieldset class="form-group">
                                    <label class="text-white" for="email">Ваш email</label>
                                    <input type="email" class="rscet form-control" id="email" name="email"
                                           placeholder="email@example.com">
                                </fieldset>
                                <fieldset class="form-group">
                                    <label class="text-white" for="railcar_owner">Принадлежность вагона</label>
                                    <select type="text" class="rscet form-control" id="railcar_owner" name="railcar_owner">
                                        <option value="" selected disabled>Выберите принадлежность вагона</option>
                                        <option value="0">СПС</option>
                                        <option value="0">МПС</option>
                                    </select>
                                </fieldset>
                                <fieldset class="form-group">
                                    <label class="text-white" for="depart_station">Станция отправления</label>
                                    <input type="text" class="rscet form-control" id="depart_station" name="depart_station"
                                           placeholder="Костанай станция">
                                </fieldset>
                            </div>
                            <div class="col-md-6">
                                <fieldset class="form-group">
                                    <label class="text-white" for="first_name">Ваше имя</label>
                                    <input type="text" class="rscet form-control" id="first_name" placeholder="Иванов Иван">
                                </fieldset>
                                <fieldset class="form-group">
                                    <label class="text-white" for="railcar_type">Тип вагона</label>
                                    <select type="text" class="rscet form-control" id="railcar_type" name="railcar_type">
                                        <option value="" selected disabled>Выберите из списка</option>
                                        <option value="0">Крытый</option>
                                        <option value="1">Полувагон</option>
                                        <option value="2">Цистерны</option>
                                        <option value="3">Контейнер</option>
                                    </select>
                                    <!-- цистерны <input type="text" class="form-control" id="railcar_type" name="railcar_type">-->
                                </fieldset>
                                <fieldset class="form-group">
                                    <label class="text-white" for="destin_station">Станция назначения</label>
                                    <input type="text" class="rscet form-control" id="destin_station" name="destin_station"
                                           placeholder="Серхетабат эксп">
                                </fieldset>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <fieldset class="form-group">
                                    <label class="text-white" for="ter_exp">Территория экспедирования</label>
                                    <input type="text" class="rscet form-control" id="ter_exp" name="ter_exp"
                                           placeholder="Казахстан, Туркменистан">
                                </fieldset>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <fieldset class="form-group">
                                    <label class="text-white" for="cargo_name">Наименование груза</label>
                                    <input type="text" class="rscet form-control" id="cargo_name" name="cargo_name"
                                           placeholder="Пшеница">
                                </fieldset>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <fieldset class="form-group">
                                    <label class="text-white" for="cargo_code">Код груза</label>
                                    <input type="text" class="rscet form-control" id="cargo_code" name="cargo_code"
                                           placeholder="ГНГ10019000 / ЕТСНГ011005">
                                </fieldset>
                            </div>
                            <div class="col-md-6">
                                <fieldset class="form-group">
                                    <label class="text-white" for="cargo">Вес (тн)</label>
                                    <input type="text" class="rscet form-control" id="cargo_weight" name="cargo_weight"
                                           placeholder="70 тн">
                                </fieldset>
                            </div>
                        </div>

                        <button id="zayawka" type="submit" class="btn btn-danger btn-rounded">Отправить</button>
                    </form>
                </div>

                <div class="col-sm-4 d-flex align-items-center">
                    <div class="row">
                        <div class="col-sm-12 mb-2">
                            <h6 class="h5 work white-text text-center text-uppercase mb-3 pt-3 wow" data-wow-delay="0.2s">
                                Этапы работ:
                            </h6>
                            <h3 class="h2 text-white text-center" ><span style="color: rgb(255,53,71);">Как мы</span>  работаем</h3>
                        </div>
                        <div class="col-sm-3 text-center">
                            <img class="w50" src="{{ asset('img/order/businesswoman.svg') }}" alt="">
                        </div>
                        <div class="col-sm-9 mb-3">
                            <div class="text-left text-white">
                                <h3 style="color: rgb(255,53,71);">01</h3>
                                <h5>Заявка</h5>
                                <span style="font-size: 1rem;">Оставляете заявку</span>
                            </div>
                        </div>
                        <div class="col-sm-3 text-center">
                            <img class="w50" src="{{ asset('img/order/business_building.svg') }}" alt="">
                        </div>
                        <div class="col-sm-9 mb-3">
                                <div class="text-left text-white">
                                    <h3 style="color: rgb(255,53,71);">02</h3>
                                    <h5>Договор</h5>
                                    <span style="font-size: 1rem;">Согласуем условия</span>
                                </div>
                        </div>
                        <div class="col-sm-3 text-center">
                            <img class="w50" src="{{ asset('img/order/bank_card_dollar.svg') }}" alt="">
                        </div>
                        <div class="col-sm-9 mb-3">
                            <div class="text-left text-white">
                                <h3 style="color: rgb(255,53,71);">03</h3>
                                <h5>Оплата</h5>
                                <span style="font-size: 1rem;">Вы оплачиваете перевозку</span>
                            </div>
                        </div>
                        <div class="col-sm-3 text-center">
                            <img class="w50" src="{{ asset('img/order/city_railway_station.svg') }}" alt="">
                        </div>
                        <div class="col-sm-9 mb-3">
                            <div class="text-left text-white">
                                <h3 style="color: rgb(255,53,71);">04</h3>
                                <h5>Перевозка</h5>
                                <span style="font-size: 1rem;">Перевозим груз</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


</div>


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



                <img src="{{ asset('img/qr-code.gif') }}" alt="" class="m-0 p-0" style="max-width: 88%;">



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

<script type="text/javascript" src="{{ asset('js/jquery.min.js') }}"></script>

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
