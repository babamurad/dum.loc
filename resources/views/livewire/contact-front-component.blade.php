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

            <form id="contact-form" action="" method="POST">

                <!--Grid row-->

                <div class="row">

                    <!--Grid column-->

                    <div class="col-md-6">

                        <div class="md-form mb-0">

                            <input type="text" id="name" name="name" class="form-control" value="" required>

                            <div class="invalid-feedback">

                                Please choose a username.

                            </div>

                            <label for="validationCustom012">Ваше имя</label>

                        </div>

                    </div>

                    <!--Grid column-->


                    <!--Grid column-->

                    <div class="col-md-6">

                        <div class="md-form mb-0">

                            <input type="text" id="email" name="email" class="form-control" required>

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

                            <input type="text" id="subject" name="subject" class="form-control" required>

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

                                <textarea type="text" id="message" name="message" rows="2"
                                          class="form-control md-textarea" required></textarea>

                            <label for="message">Ваше сообщение</label>

                        </div>

                    </div>

                </div>

                <!--Grid row-->

                <div class="text-center text-md-left">
                    <button class="btn btn-rounded btn-orange-2 white-text btn-send" type="submit">Отправить
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

                    <p>{{ $contacts->address }}</p>

                </li>

                <li class="firm-icon"><i class="fas fa-phone fa-2x icon-color"></i>

                </li>

                <li>

                    <p><a href="tel: +99312468772">{{ $contacts->phone }}</a></p>
                    <p>Телефон руководства:</p>
                    <p><a href="tel: +99312468739"> {{ $contacts->fax }}</a></p>
                </li>

                <li class="firm-icon"><i class="fas fa-envelope fa-2x icon-color"></i>

                </li>

                <li>

                    <p>{{ $contacts->email }}</p>

                </li>

            </ul>
        </div>
        <!-- Grid column -->
    </div>

    <!--Section: Contact v.2-->

</div>
