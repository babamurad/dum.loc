<div>
    <section class="pt-5 rasc-form" style="display: flex; align-items: center;">
        <div class="container">
            <h2 class="about white-text text-center text-uppercase mb-3 pt-3 wow fadeInUp" data-wow-delay="0.2s">Расчет
                ставок </h2>
            <div class="row">
                <div class="col-sm-8">
                    @if (session()->has('message'))
                        <div class="alert alert-success">
                            {{ session('message') }}
                        </div>
                    @endif

                    <form class="fields" wire:submit="save" id="Rasform">
                        <div class="row">
                            <div class="col-md-12">
                                <fieldset class="form-group">
                                    <div class="col-ms-12">
                                        <label class="text-white" for="name_of_comp">Наименование компании</label>
                                        <input type="text" class="rscet form-control @error('company_name') is-invalid @enderror" id="name_of_comp" wire:model="company_name"
                                               placeholder="ООО Победа">
                                        @error('company_name') <div class="invalid-feedback">{{ $message }}</div> @enderror
                                    </div>
                                </fieldset>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <fieldset class="form-group">
                                    <label class="text-white" for="email">Ваш email</label>
                                    <input type="email" class="rscet form-control @error('email') is-invalid @enderror" id="email" wire:model="email"
                                           placeholder="email@example.com">
                                    @error('email') <div class="invalid-feedback">{{ $message }}</div> @enderror
                                </fieldset>
                                <fieldset class="form-group">
                                    <label class="text-white" for="railcar_owner">Принадлежность вагона</label>
                                    <select type="text" class="rscet form-control @error('railcar_owner') is-invalid @enderror" id="railcar_owner" wire:model="railcar_owner">
                                        <option value="" selected disabled>Выберите принадлежность вагона</option>
                                        <option value="СПС">СПС</option>
                                        <option value="МПС">МПС</option>
                                    </select>
                                    @error('railcar_owner') <div class="invalid-feedback">{{ $message }}</div> @enderror
                                </fieldset>
                                <fieldset class="form-group">
                                    <label class="text-white" for="depart_station">Станция отправления</label>
                                    <input type="text" class="rscet form-control @error('departure_station') is-invalid @enderror" id="depart_station" wire:model="departure_station"
                                           placeholder="Костанай станция">
                                    @error('departure_station') <div class="invalid-feedback">{{ $message }}</div> @enderror
                                </fieldset>
                            </div>
                            <div class="col-md-6">
                                <fieldset class="form-group">
                                    <label class="text-white" for="first_name">Ваше имя</label>
                                    <input type="text" class="rscet form-control @error('contact_person') is-invalid @enderror" id="first_name" wire:model="contact_person" placeholder="Иванов Иван">
                                    @error('contact_person') <div class="invalid-feedback">{{ $message }}</div> @enderror
                                </fieldset>
                                <fieldset class="form-group">
                                    <label class="text-white" for="railcar_type">Тип вагона</label>
                                    <select type="text" class="rscet form-control @error('railcar_type') is-invalid @enderror" id="railcar_type" wire:model="railcar_type">
                                        <option value="" selected disabled>Выберите из списка</option>
                                        <option value="Крытый">Крытый</option>
                                        <option value="Полувагон">Полувагон</option>
                                        <option value="Цистерны">Цистерны</option>
                                        <option value="Контейнер">Контейнер</option>
                                    </select>
                                    @error('railcar_type') <div class="invalid-feedback">{{ $message }}</div> @enderror
                                </fieldset>
                                <fieldset class="form-group">
                                    <label class="text-white" for="destin_station">Станция назначения</label>
                                    <input type="text" class="rscet form-control @error('destination_station') is-invalid @enderror" id="destin_station" wire:model="destination_station"
                                           placeholder="Серхетабат эксп">
                                    @error('destination_station') <div class="invalid-feedback">{{ $message }}</div> @enderror
                                </fieldset>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <fieldset class="form-group">
                                    <label class="text-white" for="ter_exp">Территория экспедирования</label>
                                    <input type="text" class="rscet form-control @error('forwarding_territory') is-invalid @enderror" id="ter_exp" wire:model="forwarding_territory"
                                           placeholder="Казахстан, Туркменистан">
                                    @error('forwarding_territory') <div class="invalid-feedback">{{ $message }}</div> @enderror
                                </fieldset>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <fieldset class="form-group">
                                    <label class="text-white" for="cargo_name">Наименование груза</label>
                                    <input type="text" class="rscet form-control @error('cargo_name') is-invalid @enderror" id="cargo_name" wire:model="cargo_name"
                                           placeholder="Пшеница">
                                    @error('cargo_name') <div class="invalid-feedback">{{ $message }}</div> @enderror
                                </fieldset>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <fieldset class="form-group">
                                    <label class="text-white" for="cargo_code">Код груза</label>
                                    <input type="text" class="rscet form-control @error('cargo_code') is-invalid @enderror" id="cargo_code" wire:model="cargo_code"
                                           placeholder="ГНГ10019000 / ЕТСНГ011005">
                                    @error('cargo_code') <div class="invalid-feedback">{{ $message }}</div> @enderror
                                </fieldset>
                            </div>
                            <div class="col-md-6">
                                <fieldset class="form-group">
                                    <label class="text-white" for="cargo">Вес (тн)</label>
                                    <input type="text" class="rscet form-control @error('cargo_weight') is-invalid @enderror" id="cargo_weight" wire:model="cargo_weight"
                                           placeholder="70 тн">
                                    @error('cargo_weight') <div class="invalid-feedback">{{ $message }}</div> @enderror
                                </fieldset>
                            </div>
                        </div>

                        <button id="zayawka" type="submit" class="btn btn-danger btn-rounded">
                            <span wire:loading.remove>Отправить</span>
                            <span wire:loading>Отправка...</span>
                        </button>
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
