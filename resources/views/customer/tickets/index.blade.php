@include('partials.header');
 <div class="container-fluid">
                    <div class="layout-specing">
                        <div class="d-md-flex justify-content-between">
                            <div>
                                <h5 class="mb-0">FAQs</h5>

                                <nav aria-label="breadcrumb" class="d-inline-block mt-1">
                                    <ul class="breadcrumb breadcrumb-muted bg-transparent rounded mb-0 p-0">
                                        <li class="breadcrumb-item text-capitalize"><a href="index.html">Landrick</a></li>
                                        <li class="breadcrumb-item text-capitalize active" aria-current="page">FAQs</li>
                                    </ul>
                                </nav>
                            </div>

                            <div class="mt-4 mt-sm-0">
                                <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#add-faqs">Add Questions</a>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-md-6 mt-4">
                                <div class="card border-0 rounded shadow p-4">
                                    <div class="section-title" id="tech">
                                        <h6 class="mb-0 fw-bold">Buying Product</h6>
                                    </div>
            
                                    <div class="accordion mt-4" id="buyingquestion">
                                        <div class="accordion-item rounded">
                                            <h2 class="accordion-header" id="headingOne">
                                                <button class="accordion-button border-0 bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
                                                    aria-expanded="true" aria-controls="collapseOne">
                                                    How does it work ?
                                                </button>
                                            </h2>
                                            <div id="collapseOne" class="accordion-collapse border-0 collapse show" aria-labelledby="headingOne"
                                                data-bs-parent="#buyingquestion">
                                                <div class="accordion-body text-muted bg-white">
                                                    There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="accordion-item rounded mt-2">
                                            <h2 class="accordion-header" id="headingTwo">
                                                <button class="accordion-button border-0 bg-light collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                                    aria-expanded="false" aria-controls="collapseTwo">
                                                    Do I need a designer to use Landrick ?
                                                </button>
                                            </h2>
                                            <div id="collapseTwo" class="accordion-collapse border-0 collapse" aria-labelledby="headingTwo"
                                                data-bs-parent="#buyingquestion">
                                                <div class="accordion-body text-muted bg-white">
                                                    There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.
                                                </div>
                                            </div>
                                        </div>
            
                                        <div class="accordion-item rounded mt-2">
                                            <h2 class="accordion-header" id="headingThree">
                                                <button class="accordion-button border-0 bg-light collapsed" type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                    What do I need to do to start selling ?
                                                </button>
                                            </h2>
                                            <div id="collapseThree" class="accordion-collapse border-0 collapse" aria-labelledby="headingThree"
                                                data-bs-parent="#buyingquestion">
                                                <div class="accordion-body text-muted bg-white">
                                                    There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.
                                                </div>
                                            </div>
                                        </div>
            
                                        <div class="accordion-item rounded mt-2">
                                            <h2 class="accordion-header" id="headingFour">
                                                <button class="accordion-button border-0 bg-light collapsed" type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                                    What happens when I receive an order ?
                                                </button>
                                            </h2>
                                            <div id="collapseFour" class="accordion-collapse border-0 collapse" aria-labelledby="headingFour"
                                                data-bs-parent="#buyingquestion">
                                                <div class="accordion-body text-muted bg-white">
                                                    There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!--end col-->

                            <div class="col-md-6 mt-4">
                                <div class="card border-0 rounded shadow p-4">
                                    <div class="section-title" id="general">
                                        <h6 class="mb-0 fw-bold">General Questions</h6>
                                    </div>
            
                                    <div class="accordion mt-4" id="generalquestion">
                                        <div class="accordion-item rounded">
                                            <h2 class="accordion-header" id="headingfive">
                                                <button class="accordion-button border-0 bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#collapsefive"
                                                    aria-expanded="true" aria-controls="collapsefive">
                                                    How does it work ?
                                                </button>
                                            </h2>
                                            <div id="collapsefive" class="accordion-collapse border-0 collapse show" aria-labelledby="headingfive"
                                                data-bs-parent="#generalquestion">
                                                <div class="accordion-body text-muted bg-white">
                                                    There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="accordion-item rounded mt-2">
                                            <h2 class="accordion-header" id="headingsix">
                                                <button class="accordion-button border-0 bg-light collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesix"
                                                    aria-expanded="false" aria-controls="collapsesix">
                                                    Do I need a designer to use Landrick ?
                                                </button>
                                            </h2>
                                            <div id="collapsesix" class="accordion-collapse border-0 collapse" aria-labelledby="headingsix"
                                                data-bs-parent="#generalquestion">
                                                <div class="accordion-body text-muted bg-white">
                                                    There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.
                                                </div>
                                            </div>
                                        </div>
            
                                        <div class="accordion-item rounded mt-2">
                                            <h2 class="accordion-header" id="headingseven">
                                                <button class="accordion-button border-0 bg-light collapsed" type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#collapseseven" aria-expanded="false" aria-controls="collapseseven">
                                                    What do I need to do to start selling ?
                                                </button>
                                            </h2>
                                            <div id="collapseseven" class="accordion-collapse border-0 collapse" aria-labelledby="headingseven"
                                                data-bs-parent="#generalquestion">
                                                <div class="accordion-body text-muted bg-white">
                                                    There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.
                                                </div>
                                            </div>
                                        </div>
            
                                        <div class="accordion-item rounded mt-2">
                                            <h2 class="accordion-header" id="headingeight">
                                                <button class="accordion-button border-0 bg-light collapsed" type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#collapseeight" aria-expanded="false" aria-controls="collapseeight">
                                                    What happens when I receive an order ?
                                                </button>
                                            </h2>
                                            <div id="collapseeight" class="accordion-collapse border-0 collapse" aria-labelledby="headingeight"
                                                data-bs-parent="#generalquestion">
                                                <div class="accordion-body text-muted bg-white">
                                                    There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!--end col-->

                            <div class="col-md-6 mt-4">
                                <div class="card border-0 rounded shadow p-4">
                                    <div class="section-title" id="payment">
                                        <h6 class="mb-0 fw-bold">Payments Questions</h6>
                                    </div>
            
                                    <div class="accordion mt-4" id="paymentquestion">
                                        <div class="accordion-item rounded">
                                            <h2 class="accordion-header" id="headingnine">
                                                <button class="accordion-button border-0 bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#collapsenine"
                                                    aria-expanded="true" aria-controls="collapsenine">
                                                    How does it work ?
                                                </button>
                                            </h2>
                                            <div id="collapsenine" class="accordion-collapse border-0 collapse show" aria-labelledby="headingnine"
                                                data-bs-parent="#paymentquestion">
                                                <div class="accordion-body text-muted bg-white">
                                                    There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="accordion-item rounded mt-2">
                                            <h2 class="accordion-header" id="headingten">
                                                <button class="accordion-button border-0 bg-light collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseten"
                                                    aria-expanded="false" aria-controls="collapseten">
                                                    Do I need a designer to use Landrick ?
                                                </button>
                                            </h2>
                                            <div id="collapseten" class="accordion-collapse border-0 collapse" aria-labelledby="headingten"
                                                data-bs-parent="#paymentquestion">
                                                <div class="accordion-body text-muted bg-white">
                                                    There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.
                                                </div>
                                            </div>
                                        </div>
            
                                        <div class="accordion-item rounded mt-2">
                                            <h2 class="accordion-header" id="headingeleven">
                                                <button class="accordion-button border-0 bg-light collapsed" type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#collapseeleven" aria-expanded="false" aria-controls="collapseeleven">
                                                    What do I need to do to start selling ?
                                                </button>
                                            </h2>
                                            <div id="collapseeleven" class="accordion-collapse border-0 collapse" aria-labelledby="headingeleven"
                                                data-bs-parent="#paymentquestion">
                                                <div class="accordion-body text-muted bg-white">
                                                    There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.
                                                </div>
                                            </div>
                                        </div>
            
                                        <div class="accordion-item rounded mt-2">
                                            <h2 class="accordion-header" id="headingtwelve">
                                                <button class="accordion-button border-0 bg-light collapsed" type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#collapsetwelve" aria-expanded="false" aria-controls="collapsetwelve">
                                                    What happens when I receive an order ?
                                                </button>
                                            </h2>
                                            <div id="collapsetwelve" class="accordion-collapse border-0 collapse" aria-labelledby="headingtwelve"
                                                data-bs-parent="#paymentquestion">
                                                <div class="accordion-body text-muted bg-white">
                                                    There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!--end col-->

                            <div class="col-md-6 mt-4">
                                <div class="card border-0 rounded shadow p-4">
                                    <div class="section-title" id="support">
                                        <h6 class="mb-0 fw-bold">Support Questions</h6>
                                    </div>
            
                                    <div class="accordion mt-4" id="supportquestion">
                                        <div class="accordion-item rounded">
                                            <h2 class="accordion-header" id="headingthirteen">
                                                <button class="accordion-button border-0 bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#collapsethirteen"
                                                    aria-expanded="true" aria-controls="collapsethirteen">
                                                    How does it work ?
                                                </button>
                                            </h2>
                                            <div id="collapsethirteen" class="accordion-collapse border-0 collapse show" aria-labelledby="headingthirteen"
                                                data-bs-parent="#supportquestion">
                                                <div class="accordion-body text-muted bg-white">
                                                    There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="accordion-item rounded mt-2">
                                            <h2 class="accordion-header" id="headingfourteen">
                                                <button class="accordion-button border-0 bg-light collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsefourteen"
                                                    aria-expanded="false" aria-controls="collapsefourteen">
                                                    Do I need a designer to use Landrick ?
                                                </button>
                                            </h2>
                                            <div id="collapsefourteen" class="accordion-collapse border-0 collapse" aria-labelledby="headingfourteen"
                                                data-bs-parent="#supportquestion">
                                                <div class="accordion-body text-muted bg-white">
                                                    There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.
                                                </div>
                                            </div>
                                        </div>
            
                                        <div class="accordion-item rounded mt-2">
                                            <h2 class="accordion-header" id="headingfifteen">
                                                <button class="accordion-button border-0 bg-light collapsed" type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#collapsefifteen" aria-expanded="false" aria-controls="collapsefifteen">
                                                    What do I need to do to start selling ?
                                                </button>
                                            </h2>
                                            <div id="collapsefifteen" class="accordion-collapse border-0 collapse" aria-labelledby="headingfifteen"
                                                data-bs-parent="#supportquestion">
                                                <div class="accordion-body text-muted bg-white">
                                                    There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.
                                                </div>
                                            </div>
                                        </div>
            
                                        <div class="accordion-item rounded mt-2">
                                            <h2 class="accordion-header" id="headingsixteen">
                                                <button class="accordion-button border-0 bg-light collapsed" type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#collapsesixteen" aria-expanded="false" aria-controls="collapsesixteen">
                                                    What happens when I receive an order ?
                                                </button>
                                            </h2>
                                            <div id="collapsesixteen" class="accordion-collapse border-0 collapse" aria-labelledby="headingsixteen"
                                                data-bs-parent="#supportquestion">
                                                <div class="accordion-body text-muted bg-white">
                                                    There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!--end col-->
                        </div><!--end row-->
                    </div>
                </div><!--end container-->
            <div class="offcanvas-footer p-3 border-top text-center">
                <ul class="list-unstyled social-icon mb-0">
                    <li class="list-inline-item mb-0"><a href="https://1.envato.market/landrick" target="_blank" class="rounded"><i class="ti ti-shopping-cart align-middle" title="Buy Now"></i></a></li>
                    <li class="list-inline-item mb-0"><a href="https://dribbble.com/shreethemes" target="_blank" class="rounded"><i class="ti ti-brand-dribbble align-middle" title="dribbble"></i></a></li>
                    <li class="list-inline-item mb-0"><a href="https://www.facebook.com/shreethemes" target="_blank" class="rounded"><i class="ti ti-brand-facebook align-middle" title="facebook"></i></a></li>
                    <li class="list-inline-item mb-0"><a href="https://www.instagram.com/shreethemes/" target="_blank" class="rounded"><i class="ti ti-brand-instagram align-middle" title="instagram"></i></a></li>
                    <li class="list-inline-item mb-0"><a href="https://twitter.com/shreethemes" target="_blank" class="rounded"><i class="ti ti-brand-twitter align-middle" title="twitter"></i></a></li>
                    <li class="list-inline-item mb-0"><a href="mailto:support@shreethemes.in" class="rounded"><i class="ti ti-mail align-middle" title="email"></i></a></li>
                    <li class="list-inline-item mb-0"><a href="https://shreethemes.in" target="_blank" class="rounded"><i class="ti ti-world align-middle" title="website"></i></a></li>
                </ul><!--end icon-->
            </div>
        </div>
        <!-- Offcanvas End -->
        
        <!-- javascript -->
        <script src="{{ url('assets/js/bootstrap.bundle.min.js')}}"></script>
        <!-- simplebar -->
        <script src="{{ url('assets/js/simplebar.min.js')}}"></script>
        <!-- Icons -->
        <script src="{{ url('assets/js/feather.min.js')}}"></script>
        <!-- Chart -->
        <script src="{{ url('assets/js/apexcharts.min.js')}}"></script>
        <!-- Main Js -->
        <script src="{{ url('assets/js/plugins.init.js')}}"></script>
        <script src="{{ url('assets/js/app.js')}}"></script>
        
    </body>

</html>
