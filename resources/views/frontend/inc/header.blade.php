<nav class="navbar navbar-expand-lg navbar-default p-0 px-8">
    <div class="container-fluid px-0">
        <a class="navbar-brand" href="/">
            <img src="{{ asset("./images/HireF-logo.svg") }}" alt="" style="max-width: 150px; min-width: 150px;"/>
        </a>
        <!-- Button -->
        <button
            class="navbar-toggler collapsed"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbar-default"
            aria-controls="navbar-default"
            aria-expanded="false"
            aria-label="Toggle navigation"
        >
            <span class="icon-bar top-bar mt-0"></span>
            <span class="icon-bar middle-bar"></span>
            <span class="icon-bar bottom-bar"></span>
        </button>
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="navbar-default">
            <ul class="navbar-nav ms-auto left-header">
                <li class="nav-item">
                    <a class="nav-link p-4" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link p-4" href="javascript:void(0)">Recruiters</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link p-4" href="javascript:void(0)">Job Seekers</a>
                </li>
                <!--
                <li class="nav-item dropdown">
                    <a
                        class="nav-link dropdown-toggle"
                        href="#"
                        id="navbarPages"
                        data-bs-toggle="dropdown"
                        aria-haspopup="true"
                        aria-expanded="false"
                    >
                        Pages
                    </a>
                    <ul
                        class="dropdown-menu dropdown-menu-arrow dropdown-menu-end"
                        aria-labelledby="navbarPages"
                    >

                        <li>
                            <a class="dropdown-item" href="../jobs/company-list.html">
                                Company List
                            </a>
                        </li>
                        <li class="dropdown-submenu dropend">
                            <a
                                class="dropdown-item dropdown-list-group-item dropdown-toggle"
                                href="#"
                            >
                                Company Single
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a
                                        class="dropdown-item"
                                        href="../jobs/company-about.html"
                                    >
                                        About
                                    </a>
                                </li>
                                <li>
                                    <a
                                        class="dropdown-item"
                                        href="../jobs/company-reviews.html"
                                    >
                                        Reviews
                                    </a>
                                </li>
                                <li>
                                    <a
                                        class="dropdown-item"
                                        href="../jobs/company-jobs.html"
                                    >
                                        Jobs
                                    </a>
                                </li>
                                <li>
                                    <a
                                        class="dropdown-item"
                                        href="../jobs/company-benefits.html"
                                    >
                                        Benifits
                                    </a>
                                </li>
                                <li>
                                    <a
                                        class="dropdown-item"
                                        href="../jobs/company-photos.html"
                                    >
                                        Photos
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a class="dropdown-item" href="../jobs/post-job.html">
                                Post A Job
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="../jobs/upload-resume.html">
                                Upload Resume
                            </a>
                        </li>

                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../../index.html">Back to Demo</a>
                </li>
                <li class="nav-item dropdown">
                    <a
                        class="nav-link"
                        href="#"
                        id="navbarDropdown"
                        role="button"
                        data-bs-toggle="dropdown"
                        aria-haspopup="true"
                        aria-expanded="false"
                    >
                        <i class="fe fe-more-horizontal fs-3"></i>
                    </a>
                    <div
                        class="dropdown-menu dropdown-menu-md dropdown-menu-end "
                        aria-labelledby="navbarDropdown"
                    >
                        <div class="list-group">
                            <a
                                class="list-group-item list-group-item-action border-0"
                                href="../../docs/index.html"
                            >
                                <div class="d-flex align-items-center">
                                    <i class="fe fe-file-text fs-3 text-primary"></i>
                                    <div class="ms-3">
                                        <h5 class="mb-0">Documentations</h5>
                                        <p class="mb-0 fs-6">
                                            Browse the all documentation
                                        </p>
                                    </div>
                                </div>
                            </a>
                            <a
                                class="list-group-item list-group-item-action border-0"
                                href="../../docs/changelog.html"
                            >
                                <div class="d-flex align-items-center">
                                    <i class="fe fe-layers fs-3 text-primary"></i>
                                    <div class="ms-3">
                                        <h5 class="mb-0">
                                            Changelog<span class="text-primary ms-1">v2.6.0</span>
                                        </h5>
                                        <p class="mb-0 fs-6">See what's new</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </li>
                -->
            </ul>

            <div class="ms-2 mt-3 mt-lg-0 d-flex align-items-end">
                <a href="{{ route('login') }}" class="bg-success rounded-pill px-5 py-2 text-black fw-bold me-3">Download app</a>
                <div class="nav-item dropdown">
                    <a
                        class="nav-link dropdown-toggle"
                        href="#"
                        id="navbarListing"
                        data-bs-toggle="dropdown"
                        aria-haspopup="false"
                        aria-expanded="false"
                    >
                        <i class="fe fe-menu"></i>
                    </a>
                    <ul
                        class="dropdown-menu dropdown-menu-arrow"
                        aria-labelledby="navbarListing"
                    >
                        <li>
                            <a class="dropdown-item" href="/about">
                                About
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="/blog">
                                Blog
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
</nav>
