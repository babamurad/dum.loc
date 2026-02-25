<div class="container">

    <!--Section heading-->


    <h2 id="contacts" class="h2-responsive text-center font-weight-bold text-center my-4 pt-4 about text-uppercase">
        Свяжитесь с нами</h2>

    <!--Section description-->

    <p class="text-center w-responsive mx-auto mb-5">У Вас остались вопросы? Задайте свой вопрос заполнив форму
        снизу,

        наша команда ответит Вам в ближайшее время.</p>

    <div class="row">
        <!--Grid column-->

        <div class="col-md-9 mb-md-0 mb-5 wow animated fadeInLeft">

            <form wire:submit="save">

                @if (session()->has('message'))
                    <div class="alert alert-success">
                        {{ session('message') }}
                    </div>
                @endif

                <!--Grid row-->

                <div class="row">

                    <!--Grid column-->

                    <div class="col-md-6">

                        <div class="md-form mb-0">

                            <input type="text" id="name" wire:model="name" class="form-control @error('name') is-invalid @enderror">

                            @error('name')
                                <div class="invalid-feedback" style="display: block;">
                                    {{ $message }}
                                </div>
                            @enderror

                            <label for="name">Ваше имя</label>

                        </div>

                    </div>

                    <!--Grid column-->


                    <!--Grid column-->

                    <div class="col-md-6">

                        <div class="md-form mb-0">

                            <input type="text" id="email" wire:model="email" class="form-control @error('email') is-invalid @enderror">

                            @error('email')
                                <div class="invalid-feedback" style="display: block;">
                                    {{ $message }}
                                </div>
                            @enderror

                            <label for="email" class="">Ваш email</label>

                        </div>

                    </div>

                    <!--Grid column-->

                </div>

                <!--Grid row-->


                <!--Grid row-->

                <div class="row">

                    <div class="col-md-12">

                        <div class="md-form mb-0">

                            <input type="text" id="subject" wire:model="subject" class="form-control @error('subject') is-invalid @enderror">

                            @error('subject')
                                <div class="invalid-feedback" style="display: block;">
                                    {{ $message }}
                                </div>
                            @enderror

                            <label for="subject" class="">Тема</label>

                        </div>

                    </div>

                </div>

                <!--Grid row-->


                <!--Grid row-->

                <div class="row">


                    <!--Grid column-->

                    <div class="col-md-12">

                        <div class="md-form">

                                <textarea type="text" id="message" wire:model="message" rows="2"
                                          class="form-control md-textarea @error('message') is-invalid @enderror"></textarea>

                            @error('message')
                                <div class="invalid-feedback" style="display: block;">
                                    {{ $message }}
                                </div>
                            @enderror

                            <label for="message">Ваше сообщение</label>

                        </div>

                    </div>

                </div>

                <!--Grid row-->

                <div class="text-center text-md-left">
                    <button class="btn btn-rounded btn-orange-2 white-text btn-send" type="submit">
                        <span wire:loading.remove>Отправить</span>
                        <span wire:loading>Отправка...</span>
                    </button>
                </div>

            </form>

            <div class="status"></div>

        </div>

        <!-- Grid column -->

        <div class="col-md-4 col-lg-3 wow animated fadeInRight">

            <ul class="text-center list-unstyled float-md-right">

                <li class="firm-icon"><i class="fas fa-map-marker-alt fa-2x icon-color"></i>

                </li>

                <li>

                    <p>{{ optional($contacts)->address }}</p>

                </li>

                <li class="firm-icon"><i class="fas fa-phone fa-2x icon-color"></i>

                </li>

                <li>

                    <p><a href="tel: +99312468772">{{ optional($contacts)->phone }}</a></p>
                    <p>Телефон руководства:</p>
                    <p><a href="tel: +99312468739"> {{ optional($contacts)->fax }}</a></p>
                </li>

                <li class="firm-icon"><i class="fas fa-envelope fa-2x icon-color"></i>

                </li>

                <li>

                    <p>{{ optional($contacts)->email }}</p>

                </li>

            </ul>
        </div>
        <!-- Grid column -->
    </div>

    <!--Section: Contact v.2-->

</div>
