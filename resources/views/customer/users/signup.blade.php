@include('customer.partials.header')

    <body>
        <!-- Loader -->
        <!-- <div id="preloader">
            <div id="status">
                <div class="spinner">
                    <div class="double-bounce1"></div>
                    <div class="double-bounce2"></div>
                </div>
            </div>
        </div> -->
        <!-- Loader -->

        <!-- Hero Start -->
           <section class="bg-auth-home bg-circle-gradiant d-table w-100">
            <div class="bg-overlay bg-overlay-white"></div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-5 col-md-8"> 
                        <div class="card shadow rounded border-0 mt-4">
                            <div class="card-body">
                                <h4 class="card-title text-center">Signup</h4>  
                                <form  method="POST" class="login-form mt-4">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">First name <span class="text-danger">*</span></label>
                                                <div class="form-icon position-relative">
                                                    <i data-feather="user" class="fea icon-sm icons"></i>
                                                    <input type="text" class="form-control ps-5" placeholder="First Name" name="firstname" >
                                                </div>
                                                 @error('firstname')
                                                   <span class="alert-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div><!--end col-->

                                        <div class="col-md-6">
                                            <div class="mb-3"> 
                                                <label class="form-label">Last name <span class="text-danger">*</span></label>
                                                <div class="form-icon position-relative">
                                                    <i data-feather="user-check" class="fea icon-sm icons"></i>
                                                    <input type="text" class="form-control ps-5" placeholder="Last Name" name="lastname" >
                                                </div>
                                                @error('lastname')
                                                   <span class="alert-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div><!--end col-->

                                        <div class="col-md-12">
                                            <div class="mb-3">
                                                <label class="form-label">Your Email <span class="text-danger">*</span></label>
                                                <div class="form-icon position-relative">
                                                    <i data-feather="mail" class="fea icon-sm icons"></i>
                                                    <input type="email" class="form-control ps-5" placeholder="Email" name="email" >
                                                </div>
                                                @error('email')
                                                   <span class="alert-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div><!--end col-->

                                        <div class="col-md-12">
                                            <div class="mb-3">
                                                <label class="form-label">Password <span class="text-danger">*</span></label>
                                                <div class="form-icon position-relative">
                                                    <i data-feather="key" class="fea icon-sm icons"></i>
                                                    <input type="password" name="password" class="form-control ps-5" placeholder="Password" >
                                                </div>
                                                @error('password')
                                                   <span class="alert-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div><!--end col-->

                                        <div class="col-md-12">
                                            <div class="mb-3">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="terms" value="" id="flexCheckDefault">
                                                    
                                                    <label class="form-check-label" for="flexCheckDefault">I Accept <a href="#" class="text-primary">Terms And Condition</a></label>
                                                </div>
                                                @error('terms')
                                                    <span class="alert-danger">{{ $message }}</span>
                                                   @enderror
                                            </div>
                                        </div><!--end col-->

                                        <div class="col-md-12">
                                            <div class="d-grid">
                                                <button class="btn btn-primary">Register</button>
                                            </div>
                                        </div><!--end col-->

                                        <div class="col-lg-12 mt-4 text-center">
                                            <h6>Or Signup With</h6>
                                            <div class="row">
                                                <div class="col-6 mt-3">
                                                    <div class="d-grid">
                                                        <a href="javascript:void(0)" class="btn btn-light"><i class="mdi mdi-facebook text-primary"></i> Facebook</a>
                                                    </div>
                                                </div><!--end col-->
                                                
                                                <div class="col-6 mt-3">
                                                    <div class="d-grid">
                                                        <a href="javascript:void(0)" class="btn btn-light"><i class="mdi mdi-google text-danger"></i> Google</a>
                                                    </div>
                                                </div><!--end col-->
                                            </div>
                                        </div><!--end col-->

                                        <div class="mx-auto">
                                            <p class="mb-0 mt-3"><small class="text-dark me-2">Already have an account ?</small> <a href="auth-login-three.html" class="text-dark fw-bold">Sign in</a></p>
                                        </div>
                                    </div><!--end row-->
                                </form>
                            </div>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            </div> <!--end container-->
        </section><!--end section-->
        <!-- Hero End -->
@include('customer.partials.footer');