@extends('frontend.layout.master')


@section('content')
    <div class="bg-light-primary py-lg-14 py-12 bg-cover "
    >
        <!-- container -->
        <div class="container ">
            <!-- row -->
            <div class="row align-items-center">
                <div class="col-lg-6 col-12">
                    <div>
                        <div class=" text-center text-md-start ">
                            <!-- heading -->
                            <h1 class=" display-2 fw-bold  mb-3">Find your dream job
                                that you love to do.</h1>
                            <!-- lead -->
                            <p class="lead">The largest remote work community in the world. Sign up and post a job
                                or create your developer profile.</p>
                        </div>
                        <div class="mt-8">
                            <!-- card -->
                            <div class="bg-white rounded-md-pill shadow rounded-3 mb-4">
                                <!-- card body -->
                                <div class="p-md-2 p-4">
                                    <!-- form -->
                                    <form class="row g-1">
                                        <div class="col-12 col-md-5">

                                            <!-- input -->
                                            <div class="input-group mb-2 mb-md-0 border-md-0 border rounded-pill">
                                                <!-- input group -->
                                                <span class="input-group-text bg-transparent border-0 pe-0 ps-md-3 ps-md-0" id="searchJob"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor"
                                                        class="bi bi-search text-muted" viewBox="0 0 16 16">
                                                  <path
                                                      d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                                                </svg>
                                            </span>
                                                <!-- search -->
                                                <input type="search" class="form-control  rounded-pill border-0 ps-3 form-focus-none"
                                                       placeholder="Job Title" aria-label="Job Title" aria-describedby="searchJob">
                                            </div>

                                        </div>
                                        <div class="col-12 col-md-4">
                                            <!-- inpt group -->
                                            <div class="input-group mb-3 mb-md-0 border-md-0 border rounded-pill">
                                          <span class="input-group-text bg-transparent border-0 pe-0 ps-md-0" id="location"><svg
                                                  xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                                  class="bi bi-geo-alt  text-muted" viewBox="0 0 16 16">
                                              <path
                                                  d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z" />
                                              <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                                            </svg>
                                          </span>
                                                <!-- search -->
                                                <input type="search" class="form-control rounded-pill  border-0 ps-3 form-focus-none"
                                                       placeholder="Location" aria-label="Search Job" aria-describedby="location">
                                            </div>

                                        </div>
                                        <div class="col-12 col-md-3  text-end d-grid">
                                            <!-- button -->
                                            <button type="submit" class="btn btn-primary rounded-pill">Search</button>
                                        </div>
                                    </form>
                                </div>

                            </div>

                            <!-- text -->
                            <span class=" fs-4">Currently listing 30,642 jobs from 5,717 companies</span>
                        </div>
                    </div>
                </div>
                <div class="offset-lg-1 col-lg-5 col-12 text-center">
                    <div class="position-relative ">
                        <img src="{{ asset("frontend") }}/assets/images/job/png/job-hero-section.png" class="img-fluid ">
                        <div class="position-absolute top-0 mt-7 ms-n6 ms-md-n6 ms-lg-n12 start-0">
                            <img src="{{ asset("frontend") }}/assets/images/job/job-hero-block-1.svg" class="img-fluid ">
                        </div>
                        <div class="position-absolute bottom-0 mb-12 me-n6 me-md-n4 me-lg-n12 end-0 ">
                            <img src="{{ asset("frontend") }}/assets/images/job/job-hero-block-2.svg" class="img-fluid ">
                        </div>
                        <div class="position-absolute bottom-0 mb-n4 ms-n1 ms-md-n4 ms-lg-n7 start-0">
                            <img src="{{ asset("frontend") }}/assets/images/job/job-hero-block-3.svg" class="img-fluid ">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="py-8">
        <!-- container -->
        <div class="container">
            <div class="row">
                <div class="offset-xl-1 col-xl-10 col-md-12 col-12">
                    <!-- row -->
                    <div class="row text-center">
                        <!-- col -->
                        <div class="col">
                            <div class="mb-3 mt-3">
                                <img src="{{ asset("frontend") }}/assets/images/brand/gray-logo-airbnb.svg" alt="">
                            </div>
                        </div>
                        <!-- col -->
                        <div class="col">
                            <div class="mb-3 mt-3">
                                <img src="{{ asset("frontend") }}/assets/images/brand/gray-logo-discord.svg" alt="">
                            </div>
                        </div>
                        <div class="col">
                            <div class="mb-3 mt-3">
                                <img src="{{ asset("frontend") }}/assets/images/brand/gray-logo-intercom.svg" alt="">
                            </div>
                        </div>
                        <!-- col -->
                        <div class="col">
                            <div class="mb-3 mt-3">
                                <img src="{{ asset("frontend") }}/assets/images/brand/gray-logo-stripe.svg" alt="">
                            </div>
                        </div>
                        <!-- col -->
                        <div class="col">
                            <div class="mb-3 mt-3">
                                <img src="{{ asset("frontend") }}/assets/images/brand/gray-logo-netflix.svg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="py-lg-12 pb-8">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <div class="offset-xl-2 col-xl-8 col-md-12 col-12">
                    <div class=" text-center mb-8">
                        <!-- col -->

                        <!-- text -->
                        <span class="text-uppercase text-primary fw-semi-bold ls-md">Latest Job Opening</span>
                        <!-- heading -->

                        <h2 class="h1 fw-bold mt-3">Explore remote friendly, flexible
                            job opportunities.
                        </h2>
                    </div>
                    <!-- row -->

                    @forelse($jobs as $job)
                        @include('frontend.inc.job_card')
                    <!-- card -->
                    @empty
                        <h2>NO HAVE NOBS AVAILABLE</h2>
                    @endforelse

                    <!-- button -->
                    <div class="mt-6 text-center">
                        <a href="#!" class="btn btn-outline-primary">Browse All Jobs Postings</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="py-lg-14 pt-8 py-10">
        <!-- container -->
        <div class="container">
            <div class="row">
                <div class="offset-xl-1 col-xl-10 col-md-12 col-12">
                    <div class="row text-center">
                        <!-- col -->
                        <div class="col-md-12 px-lg-10 mb-8 mt-6">
                            <span class="text-uppercase text-primary fw-semi-bold ls-md">Process</span>
                            <!-- heading -->
                            <h2 class="h1 fw-bold mt-3">How It Works
                            </h2>
                        </div>
                    </div>
                    <div class="row gy-6">
                        <!-- col -->

                        <div class="col-md-4 col-12">
                            <div class=" text-center">
                                <!-- icon -->

                                <div
                                    class="icon-shape icon-lg border border-primary border-2 fs-3 rounded-circle mb-4 process-line text-primary smooth-shadow-md">
                                    1
                                </div>
                                <!-- heading -->

                                <h3>Click on 'Post a job' </h3>
                                <!-- text -->

                                <p class="mb-0 px-4">Fill in the details of the job be sure to
                                    include your location restrictions if you
                                    have em!</p>

                            </div>
                        </div>
                        <!-- col -->

                        <div class="col-md-4 col-12">
                            <div class=" text-center">
                                <!-- icon -->

                                <div
                                    class="icon-shape icon-lg border border-primary border-2 fs-3 rounded-circle mb-4 process-line text-primary smooth-shadow-md">
                                    2</div>
                                <!-- heading -->

                                <h3>Select an upgrade if required </h3>
                                <!-- text -->

                                <p class="mb-0 px-2">The base price for a job listing on {{ config("app.name") }} is
                                    $29 per month. Choose one of our optional
                                    upgrades to gain more visibility to your
                                    listing.</p>

                            </div>
                        </div>
                        <!-- col -->

                        <div class="col-md-4 col-12">
                            <div class=" text-center">
                                <!-- icon -->

                                <div
                                    class="icon-shape icon-lg border border-primary border-2 fs-3 rounded-circle mb-4 text-primary smooth-shadow-md">
                                    3</div>
                                <!-- heading -->

                                <h3>Purchase the listing </h3>
                                <!-- text -->

                                <p class="mb-0 px-3">Preview your listing and once you are
                                    ready to post it you can add your billing
                                    information.</p>

                            </div>
                        </div>
                        <!-- button -->

                        <div class="col-12 mt-8 text-center">
                            <a href="#" class="btn btn-primary">Apply Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="py-lg-14 bg-light pt-8 pb-10">
        <!-- container -->

        <div class="container">
            <div class="row">
                <!-- col -->

                <div class="offset-xl-1 col-xl-10 col-md-12 col-12">

                    <div class="row text-center">
                        <div class="col-md-12 px-lg-10 mb-8 mt-6">
                            <!-- text -->

                            <span class="text-uppercase text-primary fw-semi-bold ls-md">Browse Category</span>
                            <!-- heading -->

                            <h2 class="h1 fw-bold mt-3">Discover jobs across popular roles
                            </h2>
                            <!-- text -->

                            <p class="mb-0 fs-4">Select a role and we'll show you relevant jobs for it!</p>

                        </div>
                    </div>
                    <div class="row gy-4">
                        <div class="col-lg-3 col-md-4 col-12">
                            <!-- card -->

                            <div class="card  border-top border-muted border-4  card-hover-with-icon">
                                <!-- card body -->

                                <div class="card-body">
                                    <!-- icon  -->

                                    <div class="icon-shape icon-lg rounded-circle bg-light text-muted mb-3  card-icon"><svg
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                                            class="bi bi-activity" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd"
                                                  d="M6 2a.5.5 0 0 1 .47.33L10 12.036l1.53-4.208A.5.5 0 0 1 12 7.5h3.5a.5.5 0 0 1 0 1h-3.15l-1.88 5.17a.5.5 0 0 1-.94 0L6 3.964 4.47 8.171A.5.5 0 0 1 4 8.5H.5a.5.5 0 0 1 0-1h3.15l1.88-5.17A.5.5 0 0 1 6 2Z" />
                                        </svg></div>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div>
                                            <!-- heading -->

                                            <h4 class="mb-0">Analtyics</h4>
                                            <!-- text -->

                                            <p class="mb-0 text-muted">2k Jobs</p>
                                        </div>
                                        <!-- arrow -->

                                        <a href="#" class="text-inherit">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                                 class="bi bi-chevron-right" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd"
                                                      d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
                                            </svg>
                                        </a>
                                    </div>
                                </div>

                            </div>

                        </div>
                        <div class="col-lg-3 col-md-4 col-12">
                            <!-- card -->

                            <div class="card  border-top border-muted border-4  card-hover-with-icon">
                                <!-- card body -->

                                <div class="card-body">
                                    <!-- icon -->

                                    <div class="icon-shape icon-lg rounded-circle bg-light text-muted mb-3  card-icon"><svg
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                                            class="bi bi-palette" viewBox="0 0 16 16">
                                            <path
                                                d="M8 5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3zm4 3a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3zM5.5 7a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm.5 6a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z" />
                                            <path
                                                d="M16 8c0 3.15-1.866 2.585-3.567 2.07C11.42 9.763 10.465 9.473 10 10c-.603.683-.475 1.819-.351 2.92C9.826 14.495 9.996 16 8 16a8 8 0 1 1 8-8zm-8 7c.611 0 .654-.171.655-.176.078-.146.124-.464.07-1.119-.014-.168-.037-.37-.061-.591-.052-.464-.112-1.005-.118-1.462-.01-.707.083-1.61.704-2.314.369-.417.845-.578 1.272-.618.404-.038.812.026 1.16.104.343.077.702.186 1.025.284l.028.008c.346.105.658.199.953.266.653.148.904.083.991.024C14.717 9.38 15 9.161 15 8a7 7 0 1 0-7 7z" />
                                        </svg></div>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div>
                                            <!-- heading -->

                                            <h4 class="mb-0">UI / UX Design</h4>
                                            <!-- text -->

                                            <p class="mb-0 text-muted">1k Jobs</p>
                                        </div>
                                        <!-- icon -->

                                        <a href="#" class="text-inherit">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                                 class="bi bi-chevron-right" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd"
                                                      d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
                                            </svg>
                                        </a>
                                    </div>
                                </div>

                            </div>

                        </div>
                        <div class="col-lg-3 col-md-4 col-12">
                            <!-- card -->

                            <div class="card  border-top border-muted border-4  card-hover-with-icon">
                                <!-- card body -->

                                <div class="card-body">
                                    <div class="icon-shape icon-lg rounded-circle bg-light text-muted mb-3  card-icon"><svg
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                                            class="bi bi-code-slash" viewBox="0 0 16 16">
                                            <path
                                                d="M10.478 1.647a.5.5 0 1 0-.956-.294l-4 13a.5.5 0 0 0 .956.294l4-13zM4.854 4.146a.5.5 0 0 1 0 .708L1.707 8l3.147 3.146a.5.5 0 0 1-.708.708l-3.5-3.5a.5.5 0 0 1 0-.708l3.5-3.5a.5.5 0 0 1 .708 0zm6.292 0a.5.5 0 0 0 0 .708L14.293 8l-3.147 3.146a.5.5 0 0 0 .708.708l3.5-3.5a.5.5 0 0 0 0-.708l-3.5-3.5a.5.5 0 0 0-.708 0z" />
                                        </svg></div>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div>
                                            <!-- heading -->

                                            <h4 class="mb-0">Developer</h4>
                                            <!-- text -->

                                            <p class="mb-0 text-muted">800 Jobs</p>
                                        </div>
                                        <a href="#" class="text-inherit">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                                 class="bi bi-chevron-right" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd"
                                                      d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
                                            </svg>
                                        </a>
                                    </div>
                                </div>

                            </div>

                        </div>
                        <div class="col-lg-3 col-md-4 col-12">
                            <!-- card -->

                            <div class="card  border-top border-muted border-4  card-hover-with-icon">
                                <!-- card body -->

                                <div class="card-body">
                                    <!-- icon -->

                                    <div class="icon-shape icon-lg rounded-circle bg-light text-muted mb-3  card-icon"><svg
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-people"
                                            viewBox="0 0 16 16">
                                            <path
                                                d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1h8zm-7.978-1A.261.261 0 0 1 7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002a.274.274 0 0 1-.014.002H7.022zM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0zM6.936 9.28a5.88 5.88 0 0 0-1.23-.247A7.35 7.35 0 0 0 5 9c-4 0-5 3-5 4 0 .667.333 1 1 1h4.216A2.238 2.238 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816zM4.92 10A5.493 5.493 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275zM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0zm3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4z" />
                                        </svg></div>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div>
                                            <!-- heading -->

                                            <h4 class="mb-0">Product Manager</h4>
                                            <!-- text -->

                                            <p class="mb-0 text-muted">1.2K Jobs</p>
                                        </div>
                                        <!-- icon -->

                                        <a href="#" class="text-inherit">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                                 class="bi bi-chevron-right" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd"
                                                      d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
                                            </svg>
                                        </a>
                                    </div>
                                </div>

                            </div>

                        </div>
                        <div class="col-lg-3 col-md-4 col-12">
                            <!-- card -->

                            <div class="card  border-top border-muted border-4  card-hover-with-icon">
                                <!-- card body -->

                                <div class="card-body">
                                    <div class="icon-shape icon-lg rounded-circle bg-light text-muted mb-3  card-icon"><svg
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-search"
                                            viewBox="0 0 16 16">
                                            <path
                                                d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                                        </svg></div>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div>
                                            <!-- heading -->

                                            <h4 class="mb-0">SEO</h4>
                                            <!-- text -->

                                            <p class="mb-0 text-muted">1200 Jobs</p>
                                        </div>
                                        <!-- icon -->

                                        <a href="#" class="text-inherit">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                                 class="bi bi-chevron-right" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd"
                                                      d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
                                            </svg>
                                        </a>
                                    </div>
                                </div>

                            </div>

                        </div>
                        <div class="col-lg-3 col-md-4 col-12">
                            <!-- card -->

                            <div class="card  border-top border-muted border-4  card-hover-with-icon">
                                <!-- card body -->

                                <div class="card-body">
                                    <!-- icon -->

                                    <div class="icon-shape icon-lg rounded-circle bg-light text-muted mb-3  card-icon"><svg
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                                            class="bi bi-bar-chart" viewBox="0 0 16 16">
                                            <path
                                                d="M4 11H2v3h2v-3zm5-4H7v7h2V7zm5-5v12h-2V2h2zm-2-1a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1h-2zM6 7a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v7a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V7zm-5 4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1v-3z" />
                                        </svg></div>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div>
                                            <!-- heading -->

                                            <h4 class="mb-0">Data Analytics</h4>
                                            <p class="mb-0 text-muted">200 Jobs</p>
                                        </div>
                                        <!-- icon -->

                                        <a href="#" class="text-inherit">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                                 class="bi bi-chevron-right" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd"
                                                      d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
                                            </svg>
                                        </a>
                                    </div>
                                </div>

                            </div>

                        </div>
                        <div class="col-lg-3 col-md-4 col-12">
                            <!-- card -->

                            <div class="card  border-top border-muted border-4  card-hover-with-icon ">
                                <!-- card body -->

                                <div class="card-body">
                                    <div class="icon-shape icon-lg rounded-circle bg-light text-muted mb-3  card-icon"><svg
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-phone"
                                            viewBox="0 0 16 16">
                                            <path
                                                d="M11 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h6zM5 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H5z" />
                                            <path d="M8 14a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
                                        </svg></div>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div>
                                            <!-- heading -->

                                            <h4 class="mb-0">Mobile Developer
                                            </h4>
                                            <!-- text -->

                                            <p class="mb-0 text-muted">120 Jobs</p>
                                        </div>
                                        <a href="#" class="text-inherit">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                                 class="bi bi-chevron-right" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd"
                                                      d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
                                            </svg>
                                        </a>
                                    </div>
                                </div>

                            </div>

                        </div>
                        <div class="col-lg-3 col-md-4 col-12">
                            <!-- card -->

                            <div class="card  border-top border-muted border-4  card-hover-with-icon">
                                <!-- card body -->

                                <div class="card-body">
                                    <!-- icon -->

                                    <div class="icon-shape icon-lg rounded-circle bg-light text-muted mb-3 card-icon"><svg
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-bank"
                                            viewBox="0 0 16 16">
                                            <path
                                                d="M8 .95 14.61 4h.89a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.5.5H15v7a.5.5 0 0 1 .485.379l.5 2A.5.5 0 0 1 15.5 17H.5a.5.5 0 0 1-.485-.621l.5-2A.5.5 0 0 1 1 14V7H.5a.5.5 0 0 1-.5-.5v-2A.5.5 0 0 1 .5 4h.89L8 .95zM3.776 4h8.447L8 2.05 3.776 4zM2 7v7h1V7H2zm2 0v7h2.5V7H4zm3.5 0v7h1V7h-1zm2 0v7H12V7H9.5zM13 7v7h1V7h-1zm2-1V5H1v1h14zm-.39 9H1.39l-.25 1h13.72l-.25-1z" />
                                        </svg></div>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div>
                                            <!-- heading -->

                                            <h4 class="mb-0">Finance
                                            </h4>
                                            <!-- text -->

                                            <p class="mb-0 text-muted">5k Jobs</p>
                                        </div>
                                        <div>
                                            <!-- icon -->

                                            <a href="#" class="text-inherit">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                                     class="bi bi-chevron-right" viewBox="0 0 16 16">
                                                    <path fill-rule="evenodd"
                                                          d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>
                        <!-- button -->

                        <div class="col-12 mt-8 text-center">
                            <a href="#" class="btn btn-outline-primary">View All Category</a>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="py-lg-16 bg-dark pt-8 pb-10">
        <!-- container -->

        <div class="container">
            <div class="row">
                <div class="offset-xl-1 col-xl-10 col-md-12 col-12">
                    <div class="row text-center">
                        <!-- col -->

                        <div class="col-md-12 px-md-16 mb-8 mt-6">
              <span class="text-uppercase text-primary fw-semi-bold ls-md">Customer stories
              </span>
                            <!-- heading -->

                            <h2 class="h1 fw-bold mt-3 text-white mb-2">What our customer stories
                            </h2>
                            <!-- text -->

                            <p class="mb-0 text-white-50 fs-4">A customer story is an engaging article integrating testimonial quotes
                                from a happy
                                client or customer praising the work completed together.</p>

                        </div>
                    </div>

                    <div class="row align-items-center">
                        <div class="col-lg-7 col-md-12 col-12">
                            <div class="mb-8 mb-lg-0 text-white me-lg-4">
                                <!-- text -->

                                <p class="display-6 mb-4 lh-2">"{{ config("app.name") }}jobs Welcome has helped us
                                    achieve continuity to ensure that all of our
                                    employees are on the same page."</p>
                                <!-- text -->

                                <p class="mb-0 text-white">David Stokes</p>
                                <span class="text-white-50">Program Manager at Company</span>
                            </div>


                        </div>
                        <!-- col -->

                        <div class="col-lg-5 col-md-12 col-12">
                            <div>
                                <!-- Img -->

                                <img src="{{ asset("frontend") }}/assets/images/background/case-study-img-1.jpg" alt="" class="img-fluid rounded-3 w-100">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <!-- button -->

                            <a href="#" class="btn btn-outline-primary mt-lg-2 mt-4">View All Stories </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="py-lg-14 bg-light pt-8 pb-10">
        <!-- container -->

        <div class="container">
            <div class="row">
                <div class="offset-xl-1 col-xl-10 col-md-12 col-12">
                    <!-- row -->

                    <div class="row text-center">
                        <div class="col-md-12 px-lg-10 mb-8 mt-6">
                            <!-- text -->

                            <span class="text-uppercase text-primary fw-semi-bold ls-md">Top Companies Hiring
              </span>
                            <!-- heading -->

                            <h2 class="h1 fw-bold mt-3 mb-2">Featured companies actively hiring

                            </h2>
                            <p class="fs-4 mb-0">Nam velit neque eleifend at gravida iaculis cursus at orci. </p>


                        </div>
                    </div>
                    <div class="row gy-4">
                        <div class="col-lg-3 col-md-6 col-12">
                            <!-- card -->

                            <div class="card card-bordered card-hover  ">
                                <!-- card body -->

                                <div class="card-body">
                                    <img src="{{ asset("frontend") }}/assets/images/job/job-company-logo-a.svg" alt="">
                                    <div class="my-4">
                                        <!-- heading -->

                                        <h3 class="lh-1">Amazon</h3>
                                        <!-- text -->

                                        <p class="mb-0">Worlds largest Internet

                                            Company
                                        </p>
                                    </div>
                                    <!-- text -->

                                    <p class="mb-0"><span class="fw-semi-bold text-dark">424+</span> Job Posting</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-12">
                            <!-- card -->

                            <div class="card card-bordered card-hover  ">
                                <!-- card body -->

                                <div class="card-body">
                                    <!-- Img -->

                                    <img src="{{ asset("frontend") }}/assets/images/job/job-company-logo-g.svg" alt="">
                                    <div class="my-4">
                                        <!-- heading -->

                                        <h3 class="lh-1">Google</h3>
                                        <!-- text -->

                                        <p>Search the world's
                                            information
                                        </p>
                                    </div>
                                    <!-- text -->

                                    <p class="mb-0"><span class="fw-semi-bold text-dark">216+ </span> Job Posting</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-12">
                            <!-- card -->

                            <div class="card card-bordered card-hover  ">
                                <!-- card body -->

                                <div class="card-body">
                                    <img src="{{ asset("frontend") }}/assets/images/job/job-company-logo-l.svg" alt="">
                                    <div class="my-4">
                                        <!-- heading -->

                                        <h3 class="lh-1">Lenovo</h3>
                                        <!-- text -->

                                        <p>Official site and buy online
                                            the best laptops
                                        </p>
                                    </div>
                                    <!-- text -->
                                    <p class="mb-0"><span class="fw-semi-bold text-dark">195+ </span> Job Posting</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-12">
                            <!-- card -->
                            <div class="card card-bordered card-hover">
                                <!-- card body -->
                                <div class="card-body">
                                    <!-- Img -->
                                    <img src="{{ asset("frontend") }}/assets/images/job/job-company-logo-p.svg" alt="">
                                    <div class="my-4">
                                        <!-- heading -->
                                        <h3 class="lh-1">PayPal</h3>
                                        <!-- text -->
                                        <p>Safer and Easier Way to
                                            Pay Online
                                        </p>
                                    </div>
                                    <!-- text -->
                                    <p class="mb-0"><span class="fw-semi-bold text-dark">180+ </span> Job Posting</p>
                                </div>
                            </div>
                        </div>
                        <!-- button -->
                        <div class="col-12 mt-8 text-center">
                            <a href="#" class="btn btn-outline-primary">View All Companies</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
