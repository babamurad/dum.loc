<div>
    <section id="partners">
        <div class="container">
            <h2 id="sectionAbout" class="h2-responsive mt-5 mb-3 h3 text-center about text-uppercase wow animated fadeInUp">
                Наши партнеры
            </h2>

            <div class="row justify-content-center">
                @foreach($partners as $partner)
                <div class="col-6 col-md-3">
                    <div class="card mb-3">
                        <img src="{{ asset('images/partners') . '/' . $partner->image }}" class="card-img-top" alt="Логотип партнера">
                        <div class="card-body">
                            <h5 class="card-title">{{ $partner->title }}</h5>
{{--                            <p class="card-text">{{ $partner->desc }}</p>--}}
{{--                            <button type="button" class="btn btn-danger btn-rounded waves-effect waves-light">Подробнее</button>--}}
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="py-5"  id="awards">
        <div class="container">
            <h2 id="sectionAbout" class="h2-responsive mt-5 mb-3 h3 text-center about text-uppercase wow animated fadeInUp">
                Наши награды
            </h2>

            <div class="row justify-content-center">
                <div class="col-6 col-md-4">
                    <div class="card mb-3">
                        <img src="{{ asset('img/award.png') }}" class="card-img-top" alt="Награда 1">
                        <div class="card-body">
                            <h5 class="card-title">Название награды 1</h5>
                            <p class="card-text">Краткое описание награды 1.</p>
                        </div>
                    </div>
                </div>

                <div class="col-6 col-md-4">
                    <div class="card mb-3">
                        <img src="{{ asset('img/award.png') }}" class="card-img-top" alt="Награда 2">
                        <div class="card-body">
                            <h5 class="card-title">Название награды 2</h5>
                            <p class="card-text">Краткое описание награды 2.</p>
                        </div>
                    </div>
                </div>

                <div class="col-6 col-md-4">
                    <div class="card mb-3">
                        <img src="{{ asset('img/award.png') }}" class="card-img-top" alt="Награда 3">
                        <div class="card-body">
                            <h5 class="card-title">Название награды 3</h5>
                            <p class="card-text">Краткое описание награды 3.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

{{--    <section id="faq">--}}
{{--        <h2 id="sectionAbout" class="h2-responsive mt-5 mb-4 h3 text-center about text-uppercase wow animated fadeInDown">--}}
{{--            Часто задаваемые вопросы--}}
{{--        </h2>--}}
{{--        <div class="accordion" id="accordionExample">--}}
{{--            <div class="card">--}}
{{--                <div class="card-header" id="headingOne">--}}
{{--                    <h2 class="mb-0">--}}
{{--                        <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">--}}
{{--                            <h6>Как рассчитать стоимость доставки?</h6>--}}
{{--                        </button>--}}
{{--                    </h2>--}}
{{--                </div>--}}

{{--                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">--}}
{{--                    <div class="card-body">--}}
{{--                        Стоимость доставки зависит от нескольких факторов, таких как вес, объем, пункт назначения и выбранный тип доставки.--}}
{{--                        Вы можете рассчитать примерную стоимость на нашем сайте, используя калькулятор доставки.--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="card">--}}
{{--                <div class="card-header" id="headingTwo">--}}
{{--                    <h2 class="mb-0">--}}
{{--                        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">--}}
{{--                            <h6>Какие сроки доставки?</h6>--}}
{{--                        </button>--}}
{{--                    </h2>--}}
{{--                </div>--}}
{{--                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">--}}
{{--                    <div class="card-body">--}}
{{--                        Сроки доставки варьируются в зависимости от пункта назначения и выбранного типа доставки.--}}
{{--                        Более точную информацию о сроках доставки вы можете получить, связавшись с нами.--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="card">--}}
{{--                <div class="card-header" id="headingThree">--}}
{{--                    <h2 class="mb-0">--}}
{{--                        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">--}}
{{--                            <h6>Как отследить свою посылку?</h6>--}}
{{--                        </button>--}}
{{--                    </h2>--}}
{{--                </div>--}}
{{--                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">--}}
{{--                    <div class="card-body">--}}
{{--                        Вы можете отследить свою посылку на нашем сайте, используя номер отслеживания.--}}
{{--                        Номер отслеживания вы получите после оформления заказа.--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}




</div>
