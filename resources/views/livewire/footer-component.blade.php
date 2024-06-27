<div>
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

                    <p><i class="fas fa-home pr-1"></i>{{ $contacts->address }}</p>

                    <p><i class="fas fa-envelope pr-1"></i>{{ $contacts->email }}</p>

                    <p><i class="fas fa-phone pr-1"></i> {{ $contacts->phone }} </p>

                    <p><i class="fas fa-print pr-1"></i> {{ $contacts->fax }}</p>



                </div>

                <!--/Second column-->



                <hr class="w-100 clearfix d-md-none">



                <!--Third column-->

                <div class="col-lg-3 ml-lg-auto col-md-4 mt-1 mb-1 wow fadeIn" data-wow-delay="0.3s">

                    <!--Contact-->

                    <h5 class="text-uppercase mb-4 ">QR код нашего директора</h5>



                    <img src="{{ asset('images/contacts') . '/' . $contacts->image }}" alt="" class="m-0 p-0" style="max-width: 88%;">



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
</div>
