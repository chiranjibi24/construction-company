@extends('layouts.app')

@section('content')

<!-- Page Banner -->
<section class="bg-dark text-white py-5">

    <div class="container text-center">

        <h1 class="display-4 fw-bold">
            Our Projects
        </h1>

        <p class="lead">
            Successfully Delivering Construction, Logistics &
            Infrastructure Solutions Across Various Industries
        </p>

    </div>

</section>

<!-- Introduction -->

<section class="py-5">

    <div class="container text-center">

        <h2 class="fw-bold">
            Featured Projects
        </h2>

        <p class="text-muted">

            Explore our completed and ongoing projects in
            construction transportation, logistics,
            equipment supply, and manpower support services.

        </p>

    </div>

</section>

<!-- Projects Section -->

<section class="pb-5">

    <div class="container">

        <div class="row">

            <!-- Project 1 -->

            <div class="col-lg-4 col-md-6 mb-4">

                <div class="card project-card shadow border-0 h-100">

                    <div class="project-image">

                        <img src="{{ asset('images/image6.jpg') }}"
                             class="project-img">

                    </div>

                    <div class="card-body">

                        <span class="badge bg-warning text-dark">
                            Construction Work
                        </span>

                        <h5 class="fw-bold mt-3">
                            Commercial Building Construction
                        </h5>

                        <p class="text-muted">

                            Complete construction support,
                            transportation logistics and
                            manpower deployment for a
                            commercial building project.

                        </p>

                        <hr>

                        <p>
                            <strong>Location:</strong>
                            Bhubaneswar, odisha
                        </p>

                        <p>
                            <strong>Status:</strong>

                            <span class="badge bg-success">
                                Completed
                            </span>
                        </p>

                        <p>
                            <strong>Date:</strong>
                            Jan 2026
                        </p>

                    </div>

                </div>

            </div>

            <!-- Project 2 -->

            <div class="col-lg-4 col-md-6 mb-4">

                <div class="card project-card shadow border-0 h-100">

                    <div class="project-image">

                        <img src="{{ asset('images/eq.jpg') }}"
                             class="project-img">

                    </div>

                    <div class="card-body">

                        <span class="badge bg-warning text-dark">
                            Equipment Supply
                        </span>

                        <h5 class="fw-bold mt-3">
                            Industrial Equipment Installation
                        </h5>

                        <p class="text-muted">

                            Supply and transportation of heavy
                            construction equipment for industrial
                            infrastructure development.

                        </p>

                        <hr>

                        <p>
                            <strong>Location:</strong>
                            Cuttack, Odisha
                        </p>

                        <p>
                            <strong>Status:</strong>

                            <span class="badge bg-primary">
                                Ongoing
                            </span>
                        </p>

                        <p>
                            <strong>Date:</strong>
                            May 2026
                        </p>

                    </div>

                </div>

            </div>

            <!-- Project 3 -->

            <div class="col-lg-4 col-md-6 mb-4">

                <div class="card project-card shadow border-0 h-100">

                    <div class="project-image">

                        <img src="{{ asset('images/pt.jpg') }}"
                             class="project-img">

                    </div>

                    <div class="card-body">

                        <span class="badge bg-warning text-dark">
                            Plant Transport
                        </span>

                        <h5 class="fw-bold mt-3">
                            Heavy Plant Transportation
                        </h5>

                        <p class="text-muted">

                            Safe transportation and logistics
                            management of industrial machinery
                            and heavy plant equipment.

                        </p>

                        <hr>

                        <p>
                            <strong>Location:</strong>
                            Khorda, Odisha
                        </p>

                        <p>
                            <strong>Status:</strong>

                            <span class="badge bg-success">
                                Completed
                            </span>
                        </p>

                        <p>
                            <strong>Date:</strong>
                            Feb 2026
                        </p>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>

<!-- Statistics -->

<section class="py-5 bg-light">

    <div class="container">

        <div class="row text-center">

            <div class="col-md-3">

                <h2 class="fw-bold text-warning">
                    500+
                </h2>

                <p>Projects Completed</p>

            </div>

            <div class="col-md-3">

                <h2 class="fw-bold text-warning">
                    250+
                </h2>

                <p>Happy Clients</p>

            </div>

            <div class="col-md-3">

                <h2 class="fw-bold text-warning">
                    20+
                </h2>

                <p>Years Experience</p>

            </div>

            <div class="col-md-3">

                <h2 class="fw-bold text-warning">
                    150+
                </h2>

                <p>Skilled Employees</p>

            </div>

        </div>

    </div>

</section>

<!-- CTA -->

<section class="py-5 bg-dark text-white">

    <div class="container text-center">

        <h2 class="fw-bold">
            Need Construction & Logistics Support?
        </h2>

        <p class="lead">

            Contact our experienced team for project consultation,
            transportation, equipment supply and manpower solutions.

        </p>

        <a href="/contact"
           class="btn btn-warning btn-lg">

            Contact Us

        </a>

    </div>

</section>

@endsection