@extends('frontend.layout.master')
@section('title', 'About Hiref')
@section('content')

{{--    <!-- Page Content -->
    <div class="py-10 bg-white">
        <div class="container">
            <div class="row">
                <div class="offset-lg-2 col-lg-8 col-md-12 col-12 mb-12">
                    <!-- caption-->
                    <h1 class="display-2 fw-bold mb-3">Hi there, we’re <span class="text-primary">{{ config("app.name") }}</span></h1>
                    <!-- para -->
                    <p class="h2 mb-3 ">We’re building the best next-generation interactive bootstrap based UI Kit design tool for
                        developers, engineers, Full-Stack developer, and digital agency.</p>
                    <p class="mb-0 h4 text-body lh-lg">{{ config("app.name") }} provide clean and consistent page designs to help you to create beautiful
                        looking contents. Geek is feature-rich components and beautifully designed pages that help you create the
                        best possible website and web application projects.</p>
                </div>
            </div>
            <!-- gallery -->
            <div class="gallery mb-12">
                <!-- gallery-item -->
                <figure class="gallery__item gallery__item--1 mb-0">
                    <img src="{{ asset("frontend") }}/assets/images/about/geeksui-img-1.jpg" alt="Gallery image 1" class="gallery__img rounded-3">
                </figure>
                <!-- gallery-item -->
                <figure class="gallery__item gallery__item--2 mb-0">
                    <img src="{{ asset("frontend") }}/assets/images/about/geeksui-img-2.jpg" alt="Gallery image 2" class="gallery__img rounded-3">
                </figure>
                <!-- gallery-item -->
                <figure class="gallery__item gallery__item--3 mb-0">
                    <img src="{{ asset("frontend") }}/assets/images/about/geeksui-img-3.jpg" alt="Gallery image 3" class="gallery__img rounded-3">
                </figure>
                <!-- gallery-item -->
                <figure class="gallery__item gallery__item--4 mb-0">
                    <img src="{{ asset("frontend") }}/assets/images/about/geeksui-img-4.jpg" alt="Gallery image 4" class="gallery__img rounded-3">
                </figure>
                <!-- gallery-item -->
                <figure class="gallery__item gallery__item--5 mb-0">
                    <img src="{{ asset("frontend") }}/assets/images/about/geeksui-img-5.jpg" alt="Gallery image 5" class="gallery__img rounded-3">
                </figure>
                <!-- gallery-item -->
                <figure class="gallery__item gallery__item--6 mb-0">
                    <img src="{{ asset("frontend") }}/assets/images/about/geeksui-img-6.jpg" alt="Gallery image 6" class="gallery__img rounded-3">
                </figure>
            </div>
            <div class="row">
                <!-- row -->
                <div class="col-md-6 offset-right-md-6">
                    <!-- heading -->
                    <h1 class="display-4 fw-bold mb-3">Our global reach</h1>
                    <!-- para -->
                    <p class="lead">{{ config("app.name") }} is the leading global marketplace for teaching and learning, connecting millions of
                        students to the skills they need to succeed.</p>
                </div>
                <div class="col-lg-3 col-md-6 col-6">
                    <!-- counter -->
                    <div class="border-top pt-4 mt-6 mb-5">
                        <h1 class="display-3 fw-bold mb-0">20M</h1>
                        <p class="text-uppercase text-muted">Learners</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-6">
                    <!-- counter -->
                    <div class="border-top pt-4 mt-6 mb-5">
                        <h1 class="display-3 fw-bold mb-0">57K</h1>
                        <p class="text-uppercase text-muted">Instructors</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-6">
                    <!-- counter -->
                    <div class="border-top pt-4 mt-6 mb-5">
                        <h1 class="display-3 fw-bold mb-0">21K</h1>
                        <p class="text-uppercase text-muted">Courses</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-6">
                    <!-- counter -->
                    <div class="border-top pt-4 mt-6 mb-5">
                        <h1 class="display-3 fw-bold mb-0">380M</h1>
                        <p class="text-uppercase text-muted">Course enrollments</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- features -->
    <div class="py-lg-16 py-10">
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-right-md-6 col-12 mb-6">
                    <!-- caption -->
                    <h2 class="display-4 mb-3 fw-bold">Our core values</h2>
                    <p class="lead">Our core values are the fundamental beliefs of a person or organization {{ config("app.name") }} academy. We help
                        people understand the difference between right and wrong.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-12">
                    <!-- card -->
                    <div class="card mb-4 mb-lg-0">
                        <!-- card body -->
                        <div class="card-body p-5">
                            <!-- icon -->
                            <div class="mb-3"><i class="mdi mdi-school-outline mdi-48px text-primary lh-1 "></i></div>
                            <h3 class="mb-2">Make Education Accessible</h3>
                            <p class="mb-0">Quis cursus turpis in habitant sagittis amet dolor malesuada ut. Volutpat nunc id
                                blanvolutpat nunc.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-12">
                    <!-- card -->
                    <div class="card mb-4 mb-lg-0">
                        <!-- card body -->
                        <div class="card-body p-5">
                            <!-- icon -->
                            <div class="mb-3"><i class="mdi mdi-account-group mdi-48px text-primary lh-1 "></i></div>
                            <h3 class="mb-2">Learn and Grow</h3>
                            <p class="mb-0">Quis cursus turpis in habitant sagittis amet dolor malesuada ut. Volutpat nunc id
                                blanvolutpat nunc.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-12">
                    <!-- card -->
                    <div class="card mb-4 mb-lg-0">
                        <!-- card body -->
                        <div class="card-body p-5">
                            <!-- icon -->
                            <div class="mb-3"><i class="mdi mdi-finance mdi-48px text-primary lh-1 "></i></div>
                            <h3 class="mb-2">Make Education Accessible</h3>
                            <p class="mb-0">Quis cursus turpis in habitant sagittis amet dolor malesuada ut. Volutpat nunc id
                                blanvolutpat nunc.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team -->
    <div class="py-lg-16 py-10 bg-white">
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-right-md-6 col-12 mb-10">
                    <!-- heading -->
                    <h2 class="display-4 mb-3 fw-bold">Our Team</h2>
                    <!-- lead -->
                    <p class="lead mb-5">Want to work with some of the best global talent and build a tool used by all the
                        companies you know and love? Join the {{ config("app.name") }} team and help shape the future of design.</p>
                    <!-- btn -->
                    <a href="#" class="btn btn-primary">Openings</a>
                </div>
            </div>
            <div class="row">
                <div class="col-md-2 col-3">
                    <div class="p-xl-5 p-lg-3 mb-3 mb-lg-0">
                        <!-- avatar -->
                        <img src="{{ asset("frontend") }}/assets/images/avatar/avatar-1.jpg" alt="" class="imgtooltip img-fluid rounded-circle" data-template="one">
                        <!-- text -->
                        <div id="one" class="d-none">
                            <h4 class="mb-0 fw-bold">Paul Haney</h4>
                            <span>CEO </span>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 col-3">
                    <div class="p-xl-5 p-lg-3 mb-3 mb-lg-0">
                        <!-- avatar -->
                        <img src="{{ asset("frontend") }}/assets/images/avatar/avatar-2.jpg" alt="" class="imgtooltip img-fluid rounded-circle" data-template="two">
                        <!-- text -->
                        <div id="two" class="d-none">
                            <h4 class="mb-0 fw-bold">Gail Lanier</h4>
                            <span>Engineering </span>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 col-3">
                    <div class="p-xl-5 p-lg-3 mb-3 mb-lg-0">
                        <!-- avatar -->
                        <img src="{{ asset("frontend") }}/assets/images/avatar/avatar-3.jpg" alt="" class="imgtooltip img-fluid rounded-circle" data-template="three">
                        <!-- text -->
                        <div id="three" class="d-none">
                            <h4 class="mb-0 fw-bold">Gail Lanier</h4>
                            <span>Manager </span>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 col-3">
                    <div class="p-xl-5 p-lg-3 mb-3 mb-lg-0">
                        <!-- avatar -->
                        <img src="{{ asset("frontend") }}/assets/images/avatar/avatar-4.jpg" alt="" class="imgtooltip img-fluid rounded-circle" data-template="four">
                        <!-- text -->
                        <div id="four" class="d-none">
                            <h4 class="mb-0 fw-bold">Mary Holler</h4>
                            <span>Sales</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 col-3">
                    <div class="p-xl-5 p-lg-3 mb-3 mb-lg-0">
                        <!-- avatar -->
                        <img src="{{ asset("frontend") }}/assets/images/avatar/avatar-5.jpg" alt="" class="imgtooltip img-fluid rounded-circle" data-template="five">
                        <!-- text -->
                        <div id="five" class="d-none">
                            <h4 class="mb-0 fw-bold">Gilbert Farr</h4>
                            <span>Oprator </span>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 col-3">
                    <div class="p-xl-5 p-lg-3 mb-3 mb-lg-0">
                        <!-- avatar -->
                        <img src="{{ asset("frontend") }}/assets/images/avatar/avatar-6.jpg" alt="" class="imgtooltip img-fluid rounded-circle" data-template="six">
                        <!-- text -->
                        <div id="six" class="d-none">
                            <h4 class="mb-0 fw-bold">Charlie Holland</h4>
                            <span>Designer </span>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 col-3">
                    <div class="p-xl-5 p-lg-3 mb-3 mb-lg-0">
                        <!-- avatar -->
                        <img src="{{ asset("frontend") }}/assets/images/avatar/avatar-7.jpg" alt="" class="imgtooltip img-fluid rounded-circle" data-template="seven">
                        <!-- text -->
                        <div id="seven" class="d-none">
                            <h4 class="mb-0 fw-bold">James Butler</h4>
                            <span>Developer </span>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 col-3">
                    <div class="p-xl-5 p-lg-3 mb-3 mb-lg-0">
                        <!-- avatar -->
                        <img src="{{ asset("frontend") }}/assets/images/avatar/avatar-8.jpg" alt="" class="imgtooltip img-fluid rounded-circle" data-template="eight">
                        <!-- text -->
                        <div id="eight" class="d-none">
                            <h4 class="mb-0 fw-bold">Richard Lane</h4>
                            <span>Insight </span>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 col-3">
                    <div class="p-xl-5 p-lg-3 mb-3 mb-lg-0">
                        <!-- avatar -->
                        <img src="{{ asset("frontend") }}/assets/images/avatar/avatar-9.jpg" alt="" class="imgtooltip img-fluid rounded-circle" data-template="eleven">
                        <!-- text -->
                        <div id="eleven" class="d-none">
                            <h4 class="mb-0 fw-bold">Gail Lanier</h4>
                            <span>Seo</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 col-3">
                    <div class="p-xl-5 p-lg-3 mb-3 mb-lg-0">
                        <!-- avatar -->
                        <img src="{{ asset("frontend") }}/assets/images/avatar/avatar-10.jpg" alt="" class="imgtooltip img-fluid rounded-circle" data-template="twelve">
                        <!-- text -->
                        <div id="twelve" class="d-none">
                            <h4 class="mb-0 fw-bold">Mary Holler</h4>
                            <span>Content</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 col-3">
                    <div class="p-xl-5 p-lg-3 mb-3 mb-lg-0">
                        <!-- avatar -->
                        <img src="{{ asset("frontend") }}/assets/images/avatar/avatar-11.jpg" alt="" class="imgtooltip img-fluid rounded-circle" data-template="thirteen">
                        <!-- text -->
                        <div id="thirteen" class="d-none">
                            <h4 class="mb-0 fw-bold">Gilbert Farr</h4>
                            <span>Designer </span>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 col-3">
                    <div class="p-xl-5 p-lg-3 mb-3 mb-lg-0">
                        <!-- avatar -->
                        <img src="{{ asset("frontend") }}/assets/images/avatar/avatar-12.jpg" alt="" class="imgtooltip img-fluid rounded-circle" data-template="fourteen">
                        <!-- text -->
                        <div id="fourteen" class="d-none">
                            <h4 class="mb-0 fw-bold">James Butler</h4>
                            <span>Developer </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- cta -->
    <div class="bg-primary">
        <div class="container">
            <!-- row -->
            <div class="row align-items-center g-0">
                <div class="col-xl-6 col-lg-6 col-md-12">
                    <!-- heading -->
                    <div class="pt-6 pt-lg-0">
                        <h1 class="text-white display-4 fw-bold pe-lg-8">Join the {{ config("app.name") }} team & shape the future of design
                        </h1>
                        <!-- text -->
                        <p class="text-white-50 mb-4 lead">
                            If you’re passionate and ready to dive in, we’d love to meet you. We’re committed to supporting our
                            employee professional development and well-being.
                        </p>
                        <!-- btn -->
                        <a href="#" class="btn btn-dark">View opportunities</a>
                    </div>
                </div>
                <!-- img -->
                <div class=" col-xl-6 col-lg-6 col-md-12 text-lg-end text-center pt-6">
                    <img src="{{ asset("frontend") }}/assets/images/hero/hero-img.png" alt="" class="img-fluid">
                </div>
            </div>
        </div>
    </div>--}}


@endsection
