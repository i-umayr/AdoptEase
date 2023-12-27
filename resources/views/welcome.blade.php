@extends('layout')
@section ('content')

<div class="hero-wrap js-fullheight">
            <div class="overlay"></div>
            <div class="container-fluid px-0">
                <div
                    class="row d-md-flex no-gutters slider-text align-items-center js-fullheight justify-content-end"
                >
                    <img
                        class="one-third js-fullheight align-self-end order-md-last img-fluid"
                        src="{{url('images/main-banner.svg')}}"  
                        alt=""
                    />
                    <div
                        class="one-forth d-flex align-items-center ftco-animate js-fullheight"
                    >
                        <div class="text mt-5">
                            <span class="subheading"
                                >Be A Part Of The Future</span
                            >
                            <h1 class="mb-3">
                                <span>Register,</span> <span>Request,</span>
                                <span>Adopt</span>
                            </h1>
                            <p>
                                Every child deserves a family. Make theirs
                                yours.
                            </p>
                            <!-- LINK GET IN TOUCH BUTTON TO REGISTER BUTTON -->
                            <p>
                                <a href="#" class="btn btn-primary px-4 py-3"
                                    >Get in touch</a
                                >
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <section class="ftco-section services-section bg-light">
            <div class="container">
                <div class="row justify-content-center mb-5 pb-3">
                    <div
                        class="col-md-7 text-center heading-section ftco-animate"
                    >
                        <h2 class="mb-4">Why Choose Us</h2>
                    </div>
                </div>
                <div class="row">
                    <div
                        class="col-md-6 d-flex align-self-stretch ftco-animate"
                    >
                        <div
                            class="media block-6 services d-flex align-items-center"
                        >
                            <div
                                class="icon d-flex align-items-center justify-content-center order-md-last"
                            >
                                <span class="flaticon-cloud"></span>
                            </div>
                            <div
                                class="media-body pl-4 pl-md-0 pr-md-4 text-md-right"
                            >
                                <h3 class="heading">Seamless Connection</h3>
                                <p class="mb-0">
                                    Our platform bridges the gap between loving
                                    families and children in need, simplifying
                                    the adoption journey.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div
                        class="col-md-6 d-flex align-self-stretch ftco-animate"
                    >
                        <div
                            class="media block-6 services d-flex align-items-center"
                        >
                            <div
                                class="icon d-flex align-items-center justify-content-center"
                            >
                                <span class="flaticon-server"></span>
                            </div>
                            <div class="media-body pl-4">
                                <h3 class="heading">Personalized Matching</h3>
                                <p class="mb-0">
                                    We go beyond just profiles. Our team
                                    carefully considers individual needs and
                                    preferences to ensure long-lasting,
                                    fulfilling matches.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div
                        class="col-md-6 d-flex align-self-stretch ftco-animate"
                    >
                        <div
                            class="media block-6 services d-flex align-items-center"
                        >
                            <div
                                class="icon d-flex align-items-center justify-content-center order-md-last"
                            >
                                <span class="flaticon-customer-service"></span>
                            </div>
                            <div
                                class="media-body pl-4 pl-md-0 pr-md-4 text-md-right"
                            >
                                <h3 class="heading">Supportive Community</h3>
                                <p>
                                    You're not alone on this path. We offer
                                    resources, guidance, and a supportive
                                    community of adoptive families every step of
                                    the way.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div
                        class="col-md-6 d-flex align-self-stretch ftco-animate"
                    >
                        <div
                            class="media block-6 services d-flex align-items-center"
                        >
                            <div
                                class="icon d-flex align-items-center justify-content-center"
                            >
                                <span class="flaticon-life-insurance"></span>
                            </div>
                            <div class="media-body pl-4">
                                <h3 class="heading">Transparency and Trust</h3>
                                <p>
                                    We value openness and clear communication.
                                    You'll have access to comprehensive
                                    information about children and the adoption
                                    process.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div
                        class="col-md-6 d-flex align-self-stretch ftco-animate"
                    >
                        <div
                            class="media block-6 services d-flex align-items-center"
                        >
                            <div
                                class="icon d-flex align-items-center justify-content-center order-md-last"
                            >
                                <span class="flaticon-cloud-computing"></span>
                            </div>
                            <div
                                class="media-body pl-4 pl-md-0 pr-md-4 text-md-right"
                            >
                                <h3 class="heading">Ethical and Responsible</h3>
                                <p>
                                    We adhere to the highest ethical standards
                                    in adoption, ensuring a safe and secure
                                    environment for both families and children.
                                </p>
                            </div>
                            
                        </div>
                    </div>
                    <div
                        class="col-md-6 d-flex align-self-stretch ftco-animate"
                    >
                        <div
                            class="media block-6 services d-flex align-items-center"
                        >
                            <div
                                class="icon d-flex align-items-center justify-content-center"
                            >
                                <span class="flaticon-settings"></span>
                            </div>
                            <div class="media-body pl-4">
                                <h3 class="heading">Celebrating Uniqueness</h3>
                                <p>
                                    We believe every child deserves a loving
                                    home, and families seeking children with
                                    special needs are heroes. Let us help your
                                    family grow through shared understanding and
                                    unwavering support.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="ftco-section ftco-counter img" id="section-counter">
            <div class="container">
                <div class="row justify-content-center mb-5">
                    <div
                        class="col-md-7 text-center heading-section heading-section-white ftco-animate"
                    >
                        <span class="subheading"
                            >Our Experience Speaks For Us</span
                        >
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-10">
                        <div class="row">
                            <div
                                class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate"
                            >
                                <div class="block-18 text-center">
                                    <div class="text">
                                        <strong
                                            class="number"
                                            data-number="1225"
                                            >0</strong
                                        >
                                        <span>Orphans Residing</span>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate"
                            >
                                <div class="block-18 text-center">
                                    <div class="text">
                                        <strong class="number" data-number="433"
                                            >0</strong
                                        >
                                        <span>Families Connected</span>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate"
                            >
                                <div class="block-18 text-center">
                                    <div class="text">
                                        <strong class="number" data-number="610"
                                            >0</strong
                                        >
                                        <span>Registered Parents</span>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate"
                            >
                                <div class="block-18 text-center">
                                    <div class="text">
                                        <strong class="number" data-number="45"
                                            >0</strong
                                        >
                                        <span>Total Employees</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="ftco-section bg-light">
            <div class="container">
                <div class="row justify-content-center mb-5 pb-5">
                    <div
                        class="col-md-7 text-center heading-section ftco-animate"
                    >
                        <span class="subheading">Services</span>
                        <h2 class="mb-4">How it works</h2>
                    </div>
                </div>
                <div class="row">
                    <div
                        class="col-md-12 nav-link-wrap mb-5 pb-md-5 pb-sm-1 ftco-animate"
                    >
                        <div
                            class="nav ftco-animate nav-pills justify-content-center text-center"
                            id="v-pills-tab"
                            role="tablist"
                            aria-orientation="vertical"
                        >
                            <a
                                class="nav-link active"
                                id="v-pills-nextgen-tab"
                                data-toggle="pill"
                                href="#v-pills-nextgen"
                                role="tab"
                                aria-controls="v-pills-nextgen"
                                aria-selected="true"
                                >Step 1</a
                            >

                            <a
                                class="nav-link"
                                id="v-pills-performance-tab"
                                data-toggle="pill"
                                href="#v-pills-performance"
                                role="tab"
                                aria-controls="v-pills-performance"
                                aria-selected="false"
                                >Step 2</a
                            >

                            <a
                                class="nav-link"
                                id="v-pills-effect-tab"
                                data-toggle="pill"
                                href="#v-pills-effect"
                                role="tab"
                                aria-controls="v-pills-effect"
                                aria-selected="false"
                                >Step 3</a
                            >
                        </div>
                    </div>
                    <div class="col-md-12 align-items-center ftco-animate">
                        <div
                            class="tab-content ftco-animate"
                            id="v-pills-tabContent"
                        >
                            <div
                                class="tab-pane fade show active"
                                id="v-pills-nextgen"
                                role="tabpanel"
                                aria-labelledby="v-pills-nextgen-tab"
                            >
                                <div class="d-md-flex">
                                    <div class="one-forth align-self-center">
                                        <img
                                            src="images/register-with-us.svg"
                                            class="img-fluid"
                                            alt=""
                                        />
                                    </div>
                                    <div
                                        class="one-half ml-md-5 align-self-center"
                                    >
                                        <h2 class="mb-4">Register With Us</h2>
                                        <p>
                                            Sign yourself up by entering your
                                            details. This will help us contact
                                            you later on.
                                        </p>
                                        <p>
                                            <a
                                                href="#"
                                                class="btn btn-primary py-3"
                                                >Get in touch</a
                                            >
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div
                                class="tab-pane fade"
                                id="v-pills-performance"
                                role="tabpanel"
                                aria-labelledby="v-pills-performance-tab"
                            >
                                <div class="d-md-flex">
                                    <div
                                        class="one-forth order-last align-self-center"
                                    >
                                        <img
                                            src="images/adoption-request.svg"
                                            class="img-fluid"
                                            alt=""
                                        />
                                    </div>
                                    <div
                                        class="one-half order-first mr-md-5 align-self-center"
                                    >
                                        <h2 class="mb-4">
                                            Put In An Adoption Request
                                        </h2>
                                        <p>
                                            Our employees are always looking out
                                            for compatibility. Stay in touch
                                            with us for your dream family.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div
                                class="tab-pane fade"
                                id="v-pills-effect"
                                role="tabpanel"
                                aria-labelledby="v-pills-effect-tab"
                            >
                                <div class="d-md-flex">
                                    <div class="one-forth align-self-center">
                                        <img
                                            src="images/hear-from-us.svg"
                                            class="img-fluid"
                                            alt=""
                                        />
                                    </div>
                                    <div
                                        class="one-half ml-md-5 align-self-center"
                                    >
                                        <h2 class="mb-4">Hear Back From Us</h2>
                                        <p>
                                            Our employees are always on the go.
                                            Get a response within 2-5 working
                                            days.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <footer class="ftco-footer ftco-bg-dark ftco-section">
            <div class="container">
                <div class="row align-items-center d-flex">
                    <div class="col-md-6">
                        <div
                            class="heading-section heading-section-white ftco-animate"
                        >
                            <span class="subheading">Adopt Ease</span>
                            <h2 style="font-size: 30px">
                                Connecting families one step at a time
                            </h2>
                        </div>
                    </div>
                </div>
                <div class="row mb-5">
                    <div class="col-md">
                        <div class="ftco-footer-widget mb-4">
                            <h2 class="ftco-heading-2">Navigational</h2>
                            <ul class="list-unstyled">
                                <li>
                                    <a href="#" class="py-2 d-block">Home</a>
                                </li>
                                <li>
                                    <a href="#" class="py-2 d-block">Domain</a>
                                </li>
                                <li>
                                    <a href="#" class="py-2 d-block">Hosting</a>
                                </li>
                                <li>
                                    <a href="#" class="py-2 d-block">About</a>
                                </li>
                                <li>
                                    <a href="#" class="py-2 d-block">Blog</a>
                                </li>
                                <li>
                                    <a href="#" class="py-2 d-block">Contact</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md">
                        <div class="ftco-footer-widget mb-4">
                            <h2 class="ftco-heading-2">Office</h2>
                            <div class="block-23">
                                <ul>
                                    <li>
                                        <span
                                            class="icon icon-map-marker"
                                        ></span
                                        ><span class="text"
                                            >Sector H-12, Islamabad,
                                            Pakistan</span
                                        >
                                    </li>
                                    <li>
                                        <a href="#"
                                            ><span
                                                class="icon icon-phone"
                                            ></span
                                            ><span class="text"
                                                >+92 336 5222 449</span
                                            ></a
                                        >
                                    </li>
                                    <li>
                                        <a href="#"
                                            ><span
                                                class="icon icon-envelope"
                                            ></span
                                            ><span class="text"
                                                >adoptease@gmail.com</span
                                            ></a
                                        >
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

        <!-- loader -->
        <div id="ftco-loader" class="show fullscreen">
            <svg class="circular" width="48px" height="48px">
                <circle
                    class="path-bg"
                    cx="24"
                    cy="24"
                    r="22"
                    fill="none"
                    stroke-width="4"
                    stroke="#eeeeee"
                />
                <circle
                    class="path"
                    cx="24"
                    cy="24"
                    r="22"
                    fill="none"
                    stroke-width="4"
                    stroke-miterlimit="10"
                    stroke="#F96D00"
                />
            </svg>
        </div>

        <script src="js/jquery.min.js"></script>
        <script src="js/jquery-migrate-3.0.1.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.easing.1.3.js"></script>
        <script src="js/jquery.waypoints.min.js"></script>
        <script src="js/jquery.stellar.min.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/jquery.magnific-popup.min.js"></script>
        <script src="js/aos.js"></script>
        <script src="js/jquery.animateNumber.min.js"></script>
        <script src="js/bootstrap-datepicker.js"></script>
        <script src="js/jquery.timepicker.min.js"></script>
        <script src="js/scrollax.min.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
        <script src="js/google-map.js"></script>
        <script src="js/main.js"></script>
  
@endsection