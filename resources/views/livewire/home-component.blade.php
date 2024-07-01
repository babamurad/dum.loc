<div>
    <div class="container">

        <section id="about">
            <h2 id="sectionAbout"
                class="h2-responsive mt-5 mb-3 h3 text-center about text-uppercase wow animated fadeInDown">О
                компании</h2>
            <p class="text-center">
                <strong>ХО Довребап улаг меркези <span role="button" wire:click.prevent="toDashboard">(ХО ДУМ)</span> </strong> — транспортно-логистическая компания, резидент -
                объявленный экспедитор Туркменистана.
            </p>
            <!--Row About-->
            <div class="row">
                <div class="col-md-3 wow animated fadeInLeft"><img class="img-fluid" src="{{ asset('img/traintm.jpg') }}"
                                                                   alt="about-us"></div>
                <div class="col-md-9 wow animated fadeInRight">
                    <p class="text-justify"> Создана 7 мая 2016 года и специализируется на жд перевозках.<br>
                        Компания открыта с целью предоставления полного сервиса услуг по организации перевозки,
                        создания успешного бизнеса, работающего на долгосрочную перспективу.<a class="content_toggle"
                                                                                               href="#">
                            Подробнее...</a>
                    <div class="content_block text-justify" style="display: none;">
                        Основными направлениями нашей деятельности являются транспортировка и комплексное экспедиторское
                        обслуживание
                        экспортно-импортных и транзитных грузов железнодорожным и прочими видами транспорта по
                        территориям стран СНГ,
                        стран Балтии, Афганистана и др. Производится непрерывный контроль за всеми этапами перевозки
                        (погрузка, охрана
                        груза, слежение за подвижным
                        составом, обеспечение выгрузки на станциях, в портах и на терминалах и своевременный возврат
                        порожнего вагона).
                        <br><strong>Коммуникабельность и мобильность</strong> позволяют нам непрерывно работать над
                        снижением
                        себестоимости перевозки и предлагать клиентам максимально приемлемые тарифы на транспортные
                        услуги.<br>
                        <strong>ХО ДУМ</strong> нацелена на привлечения объёмов за счет гибкости цен, качественного
                        сервиса и индивидуального подхода к
                        каждому партнеру.
                        <h5 class="mt-2">Интересные факты</h5>
                        <p>
                            В 2019 году <strong>ХО ДУМ</strong> осуществил поставку по железной дороге 80% труб для
                            строительства газопровода <strong>ТАПИ</strong> , берущего свое
                            начало от самого крупного газового месторождения Туркмении Галкыныш (Возрождение), около
                            1814 километров.

                        </p>
                    </div>

                    </p>
                </div>

            </div>
        </section>

        @livewire('news-component')

        <!--Partners-->
        @livewire('partners-component')

        <!--/Partners-->

        <!-- Questions FAQ -->
        @livewire('question-component')
        <!-- Questions FAQ -->

        <!-- Grid column -->

        <!-- /Grid column -->
        <h2 id="sectionAbout" class="h2-responsive my-5 h3 text-center about text-uppercase animated fadeInDown">Наши
            преимущества</h2>
        <div class="row features-small mb-5 mt-3">
            <!--First column-->
            <div class="col-md-4 wow animated fadeInLeft hoverable">

                <!--First row-->

                <div class="row my-4">

                    <div class="col-2 ">

                        <i class="fas fa-check-circle fa-2x indigo-text"></i>

                    </div>

                    <div class="col-10">

                        <h6 class="feature-title">экспедирование грузов</h6>


                        <div style="height:15px"></div>

                    </div>

                </div>

                <!--/First row-->


                <!--Second row-->

                <div class="row my-4">

                    <div class="col-2">

                        <i class="fas fa-check-circle fa-2x indigo-text"></i>

                    </div>

                    <div class="col-10">

                        <h6 class="feature-title">оперирование подвижным составом</h6>


                        <div style="height:15px"></div>

                    </div>

                </div>

                <!--/Second row-->


                <!--Third row-->

                <div class="row my-4">

                    <div class="col-2">

                        <i class="fas fa-check-circle fa-2x indigo-text"></i>

                    </div>

                    <div class="col-10">

                        <h6 class="feature-title">комплексная логистика</h6>


                        <div style="height:15px"></div>

                    </div>

                </div>

                <!--/Third row-->


                <!--Fourth row-->

                <div class="row my-4">

                    <div class="col-2">

                        <i class="fas fa-check-circle fa-2x indigo-text"></i>

                    </div>

                    <div class="col-10">

                        <h6 class="feature-title">индивидуальный подход к потребностям каждого клиента</h6>


                        <div style="height:15px"></div>

                    </div>

                </div>

                <!--/Fourth row-->


                <!--Five row-->

                <div class="row my-4">

                    <div class="col-2">

                        <i class="fas fa-check-circle fa-2x indigo-text"></i>

                    </div>

                    <div class="col-10">

                        <h6 class="feature-title">предоставление клиентам качественных, выгодных и удобных услуг</h6>


                        <div style="height:15px"></div>

                    </div>

                </div>

                <!--/Five row-->

            </div>
            <!--/First column-->
            <!--Second column-->
            <div class="col-md-4 flex-center wow animated fadeInUp">
                <img src="{{ asset('images/preimus-cr.jpg') }}" alt="MDB Magazine Template displayed on iPhone"
                     class="z-depth-0 img-fluid">
            </div>
            <!--/Second column-->
            <!--Third column-->
            <div class="col-md-4 mt-2 wow animated fadeInRight hoverable">
                <!--First row-->
                <div class="row my-4">
                    <div class="col-2">
                        <i class="fas fa-check-circle fa-2x indigo-text"></i>
                    </div>
                    <div class="col-10">
                        <h6 class="feature-title">экономия затрат на транспорт и логистику</h6>
                        <div style="height:15px"></div>
                    </div>
                </div>
                <!--/First row-->
                <!--Second row-->
                <div class="row my-4">
                    <div class="col-2">
                        <i class="fas fa-check-circle fa-2x indigo-text"></i>
                    </div>
                    <div class="col-10">
                        <h6 class="feature-title">постоянное развитие </h6>
                        <div style="height:15px"></div>
                    </div>
                </div>
                <!--/Second row-->
                <!--Third row-->
                <div class="row my-4">
                    <div class="col-2">
                        <i class="fas fa-check-circle fa-2x indigo-text"></i>
                    </div>
                    <div class="col-10">
                        <h6 class="feature-title">ответственность за перевозочный процесс</h6>
                        <div style="height:15px"></div>
                    </div>
                </div>
                <!--/Third row-->
                <!--Five row-->
                <div class="row my-4">
                    <div class="col-2">
                        <i class="fas fa-check-circle fa-2x indigo-text"></i>
                    </div>
                    <div class="col-10">
                        <h6 class="feature-title">разработка оптимальных маршрутов транспортировки</h6>
                        <div style="height:15px"></div>
                    </div>
                </div>
                <!--/Five row-->
                <!--Six row-->
                <div class="row my-4">
                    <div class="col-2">
                        <i class="fas fa-check-circle fa-2x indigo-text"></i>
                    </div>
                    <div class="col-10">
                        <h6 class="feature-title">нацеленность на долгосрочное партнерство</h6>
                        <div style="height:15px"></div>
                    </div>
                </div>
                <!--/Six row-->
            </div>
            <!--/Third column-->
        </div>
        <!--/Row About-->
    </div>

    <!--Streak-->

    <div class="streak streak-photo" style="background-image:url('img/train.jpg')">

        <div class="mask flex-center rgba-black-light">

            <div class="container">


                <!--First row -->
                <div class="my-5 py-5">
                    <div class="row text-white text-center">

                        <!--First column -->

                        <div class="col-md-3 mb-2">

                            <h1 class="white-text mb-1 font-weight-bold customer"><strong>9500</strong></h1>

                            <p>счастливых клиентов</p>

                        </div>

                        <!-- First column -->


                        <!--Second column -->

                        <div class="col-md-3 mb-2">

                            <h1 class="white-text mb-1 font-weight-bold partners"><strong>320</strong></h1>

                            <p>постоянных партнеров</p>

                        </div>

                        <!-- Second column -->


                        <!--Third column -->

                        <div class="col-md-3 mb-2">

                            <h1 class="white-text mb-1 font-weight-bold trans"><strong>37</strong></h1>

                            <p>видов транспортировки</p>

                        </div>
                        <!-- Third column -->

                        <!--Fourth column -->

                        <div class="col-md-3">

                            <h1 class="white-text mb-1 font-weight-bold uslug"><strong>720</strong></h1>

                            <p>видов услуг</p>

                        </div>

                        <!-- Fourth column -->
                    </div>
                </div>

                <!-- First row -->

            </div>

        </div>

    </div>

    <!--/Streak-->

    <div class="container mt-5">

        <!-- section mission and value-->

        <section id="mission" class="mt-5 wow fadeIn text-center text-uppercase">

            <h3 class="h3 mb-5 text-center about wow animated fadeInDown" data-wow-delay="0.2s">Наша миссия</h3>

            <!--Grid row-->

            <div class="row mt-3">

                <!--Grid column-->

                <div class="col-md-6 mb-4 wow animated fadeInLeft" data-wow-delay="0.2s">

                    <img src="{{ asset('img/kogro_cr.jpg') }}" class="img-fluid z-depth-1-half" alt="mission">

                </div>

                <!--Grid column-->

                <!--Grid column-->

                <div class="col-md-6 mb-4 wow animated fadeInRight" data-wow-delay="0.2s">

                    <!-- Main heading -->

                    <p class="text-left"><strong>ХО ДУМ</strong> – один из немногих национальных операторов
                        Туркменистана, оказывающих услуги в Казахстане,

                        Узбекистане, Таджикистане и других странах СНГ.</p>

                    <!-- Main heading -->

                    <hr>


                    <ul>

                        <li class="text-left">оказывать качественные услуги по конкурентным ценам</li>

                        <li class="text-left">стремиться к минимизации стоимости перевозки</li>

                        <li class="text-left">находить инновационные решения и совершенствовать процессы перевозки</li>

                        <li class="text-left">быть эффективным партнером и поставщиком услуг в сфере грузовых
                            железнодорожных перевозок
                        </li>

                        <li class="text-left">способствовать развитию железнодорожных перевозок в Туркменистане</li>

                    </ul>


                </div>

                <!--Grid column-->

            </div>

            <h3 class="h3 mb-5 text-center about wow animated fadeInDown" data-wow-delay="0.2s">Ценности</h3>

            <div class="row mt-3">


                <div class="col-md-6 mb-4 wow animated fadeInLeft" data-wow-delay="0.2s">


                    <!-- Main heading -->


                    <p class="text-right"> Мы гордимся каждым <strong>нашим клиентом</strong> и мы делаем все для того,
                        чтобы они получили самые лучшие и качественные

                        услуги, соответствующие их ожиданиям и потребностям.</p>

                    <!-- Main heading -->


                    <hr>


                    <p class="text-right">

                        <strong>Финансовая стабильность</strong> – это гарантия устойчивости нашего бизнеса в любых
                        экономических реалиях,

                        а ее диверсифицированность страхует нас от рисков резких рыночных колебаний и негативных
                        тенденций в отдельных

                        секторах экономики.

                        Качественная клиентская база позволяет увеличивать географию перевозок.

                    </p>


                    <p class="text-right">

                        <strong>Командная работа</strong> является базовой ценностью обеспечивающий развитие и
                        прозрачность бизнеса.

                    </p>


                    </p>

                </div>

                <!--Grid column-->

                <div class="col-md-6 mb-4 wow animated fadeInRight" data-wow-delay="0.2s">


                    <img src="img/team.jpg" class="img-fluid z-depth-1-half" alt="team">


                </div>

                <!--Grid column-->


                <!--Grid column-->


                <!--Grid column-->


            </div>

            <!--Grid row-->


        </section>

        <!-- /section mission-->

        <!--Section: Details-->
    </div>



    <section class="blue-gradient">
        <div class="container mt-5">
            <h3 id="our_files" class="h3 py-4 text-center white-text wow animated fadeInDown about"
                data-wow-delay="0.2s">Наши файлы</h3>
            <div class="row  pb-4">
                <div class="col-md-6 wow animated fadeInLeft" data-wow-delay="0.2s">
                    <img class="img-fluid" src="{{ asset('img/resdefault.jpg') }}">
                </div>
                <div class="col-md-6 white-text justify-content-lg-center align-content-center wow animated fadeInRight"
                     data-wow-delay="0.2s">

                    <ul style="line-height: 2.8rem;">
                        @foreach($files as $file)
                        <li>
                            <a class="ourfl" href="{{ asset('images/files/' . $file->file) }}" target="_blank">{{ $file->title }}</a>
                        </li>
                        @endforeach
                    </ul>

                </div>

            </div>
            <hr>
            <h3 class="h3 pb-3 text-center white-text wow animated fadeInDown about" data-wow-delay="0.2s">Заключение
                договора</h3>
            <div class="row pb-3">
                <div class="col-md-6 white-text justify-content-lg-center align-content-center wow animated fadeInLeft"
                     data-wow-delay="0.2s">
                    <ul style="line-height: 2.8rem;">
                        @foreach($contracts as $contract)
                        <li>
                            <a class="ourfl" href="{{ asset('images/files/' . $contract->file) }}" target="_blank">{{ $contract->title }}</a>
                        </li>
                        @endforeach
                    </ul>
                    <div class="row text-center" style="line-height: 4rem;">
                        <div class="col-sm-12 align-content-center white-text pr-3 mt-5">
                            <h3>Карточка компании</h3>
                        </div>
                        <div class="col-sm-12">
                            <p class="text-center">
                                Карточка учета основных сведений ХО "Довребап улаг меркези"
                            </p>
                            <a href="{{ route('cart') }}#kartocka"
                               class="btn btn-white btn-rounded blue-text font-weight-bold ml-lg-0 wow fadeIn waves-effect waves-light"
                               data-wow-delay="0.3s"
                               style="visibility: visible; animation-name: fadeIn; animation-delay: 0.3s;">
                                Просмотр
                            </a>
                        </div>
                        <div class="col-sm-12">
                            <a href="Карточка компании.xlsx" download="Карточка компании.xlsx" target="_blank"
                               class="btn pink-gradient white-text btn-rounded font-weight-bold wow fadeIn waves-effect waves-light"
                               data-wow-delay="0.3s"
                               style="visibility: visible; animation-name: fadeIn; animation-delay: 0.3s;">
                                Скачать
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 wow animated fadeInRight" data-wow-delay="0.2s">
{{--                    <img class="img-fluid" src="img/senuscape-cr_cr_cr.jpg">--}}
                    @livewire('carousel-component')
                </div>
            </div>
        </div>

    </section>

    <!--Streak-->

    <div class="streak streak-photo"
         style="background-image:url('img/daniel-hazra-O96jiuCQht0-unsplash.jpg'); height: 3%;">

        <div class="mask flex-center rgba-black-light">

            <div class="container">

                <div class="row text-white  wow fadeInDownBig" data-wow-delay="0.2s">
                    <div class="col-md-12 text-center">
                        <br>
                        <h2 class="text-center my-5 py-5" style="line-height: 3rem;">Дорог железных паутина<br>Легла на
                            сотни тысяч вёрст.<br>Сложи все рельсы воедино -<br>Домчаться сможешь <br>и до звёзд!</h2>
                        <br>
                    </div>


                </div>

                <!-- First row -->

            </div>

        </div>

    </div>

    <!--/Streak-->

    @livewire('contact-front-component')
</div>
