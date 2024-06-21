<div>
    <style>

        .carousel {
            height: 60vh;
        }

        @media (max-width: 740px) {

            .carousel {
                height: 100vh;
            }
        }

        @media (min-width: 800px) and (max-width: 850px) {

            .carousel {
                height: 100vh;
            }
        }

        @media (min-width: 800px) and (max-width: 850px) {
            .navbar:not(.top-nav-collapse) {
                background: #929FBA !important;
            }
        }

    </style>

    <!--Carousel Wrapper-->
    <div id="carousel-example-1z" class="carousel slide carousel-fade" data-ride="carousel">

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

            <!--First slide  style="background-color: rgba(0, 0, 0, 0.7); -->
            <div class="carousel-item active">
                <div class="view" style="background-image: url({{ asset('img/small_0.jpg') }}); background-repeat: no-repeat; background-size: cover;">

                    <!-- Mask & flexbox options-->
                    <div class="mask rgba-black-strong d-flex justify-content-center align-items-center" ">

                        <!-- Content -->
                        <div class="text-center white-text mx-5 wow fadeIn">
                            <h1 class="mb-4">
                                <strong>Железнодорожные</strong>
                            </h1>

                            <p>
                                <strong>Перевозки</strong>
                            </p>

                            <p class="mb-4 d-none d-md-block">
                                <strong>Отличаются исключительной надежностью и вместимостью, безопасностью.
                                    Предлагаем выгодное решение цепи поставок, что снизит стоимость перевозки и сократит сроки поставки
                                    груза в конечный пункт назначения.</strong>
                            </p>

                            <a href="cart.html#kartocka" class="btn btn-danger btn-rounded btn-lg">ЧИТАТЬ ДАЛЕЕ

                                <i class="fas fa-subway ml-2"></i>

                            </a>
                        </div>
                        <!-- Content -->

                    </div>
                    <!-- Mask & flexbox options-->

                </div>
            </div>
            <!--/First slide-->

            <!--Second slide-->
            <div class="carousel-item">
                <div class="view" style="background-image: url({{ asset('img/slide4-1.jpg') }}); background-repeat: no-repeat; background-size: cover;">

                    <!-- Mask & flexbox options-->
                    <div class="mask rgba-black-light d-flex justify-content-center align-items-center">

                        <!-- Content -->
                        <div class="text-center white-text mx-5 wow fadeIn">
                            <h1 class="mb-4">
                                <strong>Морские</strong>
                            </h1>

                            <p>
                                <strong>Перевозки</strong>
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
                    <!-- Mask & flexbox options-->

                </div>
            </div>
            <!--/Second slide-->

            <!--Third slide-->
            <div class="carousel-item">
                <div class="view" style="background-image: url({{ asset('img/slide3-1.jpg') }}); background-repeat: no-repeat; background-size: cover;">

                    <!-- Mask & flexbox options-->
                    <div class="mask rgba-black-light d-flex justify-content-center align-items-center">

                        <!-- Content -->
                        <div class="text-center white-text mx-5 wow fadeIn">
                            <h1 class="mb-4">
                                <strong>Воздушные</strong>
                            </h1>

                            <p>
                                <strong>Перевозки</strong>
                            </p>

                            <p class="mb-4 d-none d-md-block">
                                <strong>Наши риски основаны на приверженности, преданности делу и профессионализме.

                                    Наша профессиональная команда придерживается всех стандартов качества и совершенства.</strong>
                            </p>

                            <a href="cart.html#kartocka" class="btn btn-danger btn-rounded btn-lg">ЧИТАТЬ ДАЛЕЕ

                                <i class="fas fa-plane ml-2"></i>

                            </a>
                        </div>
                        <!-- Content -->

                    </div>
                    <!-- Mask & flexbox options-->

                </div>
            </div>
            <!--/Third slide-->

            <!--Forth slide-->
            <div class="carousel-item">
                <div class="view" style="background-image: url({{ asset('img/slide2-1.jpg') }}); background-repeat: no-repeat; background-size: cover;">

                    <!-- Mask & flexbox options-->
                    <div class="mask rgba-black-light d-flex justify-content-center align-items-center">

                        <!-- Content -->
                        <div class="text-center white-text mx-5 wow fadeIn">
                            <h1 class="mb-4">
                                <strong>Автомобильные</strong>
                            </h1>

                            <p>
                                <strong>Перевозки</strong>
                            </p>

                            <p class="mb-4 d-none d-md-block">
                                <strong>Тысячи проектов сделали нас лидером в области транспорта. Мы стоим за нашим обещанием

                                    предоставлять своевременные и качественные страховые и складские услуги.</strong>
                            </p>

                            <a href="cart.html#kartocka" class="btn btn-danger btn-rounded btn-lg">ЧИТАТЬ ДАЛЕЕ

                                <i class="fas fa-plane ml-2"></i>

                            </a>
                        </div>
                        <!-- Content -->

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
</div>

