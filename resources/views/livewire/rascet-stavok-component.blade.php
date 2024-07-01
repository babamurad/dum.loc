<div>
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
                    <div class="notes mt-5 pt-5"></div>
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
