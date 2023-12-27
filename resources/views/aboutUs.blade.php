@extends('layout')
@section('content')

<div class="hero-wrap hero-wrap-2" style="background-image: url('images/about-us.svg')" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-start">
            <div class="col-md-8 ftco-animate text-center text-md-left mb-5">
                <p class="breadcrumbs mb-0">
                    <span class="mr-3"><a href="index.html">Home
                            <i class="ion-ios-arrow-forward"></i></a></span>
                    <span>About</span>
                </p>
                <h1 class="mb-3 bread">About</h1>
            </div>
        </div>
    </div>
</div>

<section class="ftco-section ftco-no-pt">
    <div class="container">
        <div class="row d-md-flex">
            <div class="col-md-6 ftco-animate img about-image" style="background-image: url(images/about.jpg)"></div>
            <div class="col-md-6 ftco-animate p-md-5">
                <div class="row py-md-5">
                    <div class="col-md-12 nav-link-wrap mb-5">
                        <div class="nav ftco-animate nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                            <a class="nav-link active" id="v-pills-whatwedo-tab" data-toggle="pill" href="#v-pills-whatwedo" role="tab" aria-controls="v-pills-whatwedo" aria-selected="true">What we do</a>

                            <a class="nav-link" id="v-pills-mission-tab" data-toggle="pill" href="#v-pills-mission" role="tab" aria-controls="v-pills-mission" aria-selected="false">Our mission</a>

                            <a class="nav-link" id="v-pills-goal-tab" data-toggle="pill" href="#v-pills-goal" role="tab" aria-controls="v-pills-goal" aria-selected="false">Our goal</a>
                        </div>
                    </div>
                    <div class="col-md-12 d-flex align-items-center">
                        <div class="tab-content ftco-animate" id="v-pills-tabContent">
                            <div class="tab-pane fade show active" id="v-pills-whatwedo" role="tabpanel" aria-labelledby="v-pills-whatwedo-tab">
                                <div>
                                    <h2 class="mb-4">
                                        Building Loving Families
                                    </h2>
                                    <p>
                                        We bridge the gap between
                                        families yearning to open their
                                        hearts and children longing for
                                        a forever home. Our platform
                                        seamlessly connects families
                                        with our partner orphanage,
                                        facilitating the adoption
                                        process with personalized
                                        support and unwavering guidance.
                                    </p>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="v-pills-mission" role="tabpanel" aria-labelledby="v-pills-mission-tab">
                                <div>
                                    <h2 class="mb-4">Change Lives</h2>
                                    <p>
                                        We believe every child deserves
                                        a loving family, and every
                                        family deserves the joy of
                                        parenthood. We're passionate
                                        about creating a platform that
                                        fosters informed connections,
                                        celebrates individual needs, and
                                        ultimately helps build families
                                        based on love, understanding,
                                        and lasting bonds.
                                    </p>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="v-pills-goal" role="tabpanel" aria-labelledby="v-pills-goal-tab">
                                <div>
                                    <h2 class="mb-4">
                                        Provide a Trusted Platform
                                    </h2>
                                    <p>
                                        Our ultimate goal is to change
                                        the landscape of adoption. We
                                        strive to make the process more
                                        accessible, efficient, and
                                        supportive for both families and
                                        children. We envision a future
                                        where every potential parent has
                                        the resources and confidence to
                                        embark on this life-changing
                                        journey, and every child finds
                                        the haven of a loving family.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section testimony-section">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
            <div class="col-md-7 text-center heading-section ftco-animate">
                <span class="subheading">Testimonials</span>
                <h2 class="mb-4">See What People Say About Us</h2>
            </div>
        </div>
        <div class="row ftco-animate">
            <div class="col-md-12">
                <div class="carousel-testimony owl-carousel ftco-owl">
                    <div class="item">
                        <div class="testimony-wrap p-4 text-center">
                            <div class="text">
                                <p class="mb-4">
                                    We always dreamed of becoming a
                                    family, but the traditional adoption
                                    process felt overwhelming. This
                                    platform streamlined everything,
                                    with personalized support and a
                                    warm, understanding community. We
                                    finally held our precious daughter
                                    in our arms, and our hearts haven't
                                    stopped overflowing with gratitude
                                </p>
                                <p class="name">
                                    Hadiya and Mustafa Kiyani
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimony-wrap p-4 text-center">
                            <div class="text">
                                <p class="mb-4">
                                    As a single parent, I knew adoption
                                    would be an extraordinary journey.
                                    This platform provided the
                                    confidence and support I needed
                                    every step of the way. They
                                    connected me with a son who fills my
                                    life with laughter and adventure,
                                    and we're building a beautiful
                                    future together, brick by brick.
                                </p>
                                <p class="name">Zubair Hamaad</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimony-wrap p-4 text-center">
                            <div class="text">
                                <p class="mb-4">
                                    The dedication and compassion of
                                    this platform's team is truly
                                    inspiring. They treat every child
                                    with respect and care, ensuring they
                                    feel loved and supported throughout
                                    the adoption process. Witnessing
                                    these families unite is a constant
                                    reminder of the power of love and
                                    the immense impact this platform has
                                    on our children's lives
                                </p>
                                <p class="name">Ahmed Raheem</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>