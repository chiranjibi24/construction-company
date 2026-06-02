@extends('layouts.app')

@section('content')

<section class="bg-dark text-white py-5">

    <div class="container text-center">

        <h1 class="display-4 fw-bold">
            About Us
        </h1>

        <p class="lead">
            Building Trust Through Construction, Logistics & Manpower Solutions
        </p>

    </div>

</section>

<section class="py-5">

    <div class="container">

        <div class="row align-items-center">

            <div class="col-lg-6">

                <img src="{{ asset('images/ab.jpg') }}"
                     class="img-fluid rounded-4 shadow">

            </div>

            <div class="col-lg-6">

                <h2 class="fw-bold mb-4">
                    Who We Are
                </h2>

                <p>
                    We are a leading provider of construction logistics,
                    plant transportation, equipment supply, and manpower
                    solutions. Our commitment to quality, safety, and
                    customer satisfaction has helped us build long-term
                    relationships with clients across various industries.
                </p>

                <p>
                    With experienced professionals and modern equipment,
                    we ensure every project is completed efficiently,
                    safely, and on schedule.
                </p>

            </div>

        </div>

    </div>

</section>

<section class="py-5 bg-light">

    <div class="container">

        <div class="row">

            <div class="col-md-6 mb-4">

                <div class="card border-0 shadow h-100">

                    <div class="card-body p-4">

                        <h3 class="text-warning">
                            Our Mission
                        </h3>

                        <p>
                            To deliver reliable construction, logistics,
                            equipment, and manpower services while
                            maintaining the highest standards of safety
                            and professionalism.
                        </p>

                    </div>

                </div>

            </div>

            <div class="col-md-6 mb-4">

                <div class="card border-0 shadow h-100">

                    <div class="card-body p-4">

                        <h3 class="text-warning">
                            Our Vision
                        </h3>

                        <p>
                            To become the most trusted construction
                            and logistics partner by providing innovative,
                            safe, and cost-effective solutions.
                        </p>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>

<section class="py-5">

    <div class="container">

        <div class="row align-items-center">

            <div class="col-lg-4 text-center">

                <img src="{{ asset('images/owner.jpg') }}"
                     class="img-fluid rounded-4 shadow"
                     alt="Managing Director">

            </div>

            <div class="col-lg-8">

                <h2 class="fw-bold">
                    Managing Director's Message
                </h2>

                <p class="mt-3">
                    Our success is built on dedication, integrity,
                    and teamwork. We strive to provide outstanding
                    service while maintaining the highest standards
                    of quality and safety.
                </p>

                <p>
                    We thank our clients and partners for their
                    continued trust and support.
                </p>

                <h5 class="fw-bold mt-4">
                    Mr. Your Name
                </h5>

                <span class="text-warning">
                    Founder & Managing Director
                </span>

            </div>

        </div>

    </div>

</section>

<section class="py-5 bg-light">

    <div class="container">

        <div class="text-center mb-5">

            <h2 class="fw-bold">
                Why Choose Us
            </h2>

        </div>

        <div class="row">

            <div class="col-md-3 mb-4">

                <div class="card border-0 shadow text-center p-4 h-100">

                    <h4>Safety First</h4>

                    <p>
                        Strict adherence to safety standards.
                    </p>

                </div>

            </div>

            <div class="col-md-3 mb-4">

                <div class="card border-0 shadow text-center p-4 h-100">

                    <h4>Experienced Team</h4>

                    <p>
                        Skilled professionals with industry expertise.
                    </p>

                </div>

            </div>

            <div class="col-md-3 mb-4">

                <div class="card border-0 shadow text-center p-4 h-100">

                    <h4>Modern Equipment</h4>

                    <p>
                        Advanced machinery and logistics solutions.
                    </p>

                </div>

            </div>

            <div class="col-md-3 mb-4">

                <div class="card border-0 shadow text-center p-4 h-100">

                    <h4>Client Focused</h4>

                    <p>
                        Commitment to quality and satisfaction.
                    </p>

                </div>

            </div>

        </div>

    </div>

</section>

<section class="py-5">

    <div class="container">

        <div class="row text-center">

            <div class="col-md-3">

                <h2 class="text-warning fw-bold">
                    20+
                </h2>

                <p>Years Experience</p>

            </div>

            <div class="col-md-3">

                <h2 class="text-warning fw-bold">
                    500+
                </h2>

                <p>Projects Completed</p>

            </div>

            <div class="col-md-3">

                <h2 class="text-warning fw-bold">
                    100+
                </h2>

                <p>Employees</p>

            </div>

            <div class="col-md-3">

                <h2 class="text-warning fw-bold">
                    200+
                </h2>

                <p>Satisfied Clients</p>

            </div>

        </div>

    </div>

</section>

<section class="py-5 bg-dark text-white">

    <div class="container text-center">

        <h2 class="fw-bold mb-4">
            Safety & Quality Commitment
        </h2>

        <p class="lead">
            We maintain strict safety protocols and quality
            standards to ensure successful project execution
            and employee well-being.
        </p>

    </div>

</section>

@endsection