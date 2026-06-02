@extends('layouts.app')

@section('content')

<section class="bg-dark text-white py-5">

    <div class="container text-center">

        <h1 class="display-4 fw-bold">
            Our Services
        </h1>

        <p class="lead">
            Reliable Construction, Logistics, Equipment & Manpower Solutions
        </p>

    </div>

</section>

<section class="py-5">

    <div class="container">

        <div class="text-center">

            <h2 class="fw-bold mb-4">
                What We Offer
            </h2>

            <p class="text-muted mx-auto" style="max-width: 800px;">

                We provide comprehensive construction support services,
                transportation logistics, equipment supply, and skilled
                manpower solutions to meet the needs of industrial,
                infrastructure, and commercial projects.

            </p>

        </div>

    </div>

</section>

<section class="py-5 bg-light">

    <div class="container">

        <div class="row align-items-center">

            <div class="col-lg-6">

                <img src="{{ asset('images/pt.jpg') }}"
                     class="img-fluid rounded-4 shadow">

            </div>

            <div class="col-lg-6">

                <h2 class="fw-bold">
                    Plant Transport & Logistics
                </h2>

                <p class="mt-3">

                    We provide safe and efficient transportation of
                    industrial machinery, heavy equipment, and plant
                    components to project locations.

                </p>

                <ul>

                    <li>Heavy Equipment Transportation</li>
                    <li>Industrial Logistics Solutions</li>
                    <li>Site-to-Site Transportation</li>
                    <li>Route Planning & Safety Management</li>

                </ul>

            </div>

        </div>

    </div>

</section>

<section class="py-5">

    <div class="container">

        <div class="row align-items-center">

            <div class="col-lg-6 order-lg-2">

                <img src="{{ asset('images/ab.jpg') }}"
                     class="img-fluid rounded-4 shadow">

            </div>

            <div class="col-lg-6 order-lg-1">

                <h2 class="fw-bold">
                    Construction Transport Services
                </h2>

                <p class="mt-3">

                    We support construction projects with reliable
                    transportation services for materials, machinery,
                    and equipment.

                </p>

                <ul>

                    <li>Material Transportation</li>
                    <li>Construction Site Logistics</li>
                    <li>Heavy Vehicle Operations</li>
                    <li>Timely Delivery Management</li>

                </ul>

            </div>

        </div>

    </div>

</section>

<section class="py-5 bg-light">

    <div class="container">

        <div class="row align-items-center">

            <div class="col-lg-6">

                <img src="{{ asset('images/m2.jpg') }}"
                     class="img-fluid rounded-4 shadow">

            </div>

            <div class="col-lg-6">

                <h2 class="fw-bold">
                    Construction Equipment Supply
                </h2>

                <p class="mt-3">

                    We supply quality construction equipment and machinery
                    to support infrastructure and industrial projects.

                </p>

                <ul>

                    <li>Excavators</li>
                    <li>Cranes</li>
                    <li>Loaders</li>
                    <li>Earth Moving Equipment</li>

                </ul>

            </div>

        </div>

    </div>

</section>

<section class="py-5">

    <div class="container">

        <div class="row align-items-center">

            <div class="col-lg-6 order-lg-2">

                <img src="{{ asset('images/mn.jpeg') }}"
                     class="img-fluid rounded-4 shadow">

            </div>

            <div class="col-lg-6 order-lg-1">

                <h2 class="fw-bold">
                    Skilled Manpower Supply
                </h2>

                <p class="mt-3">

                    We provide trained and experienced manpower for
                    construction, industrial, and infrastructure projects.

                </p>

                <ul>

                    <li>Engineers</li>
                    <li>Machine Operators</li>
                    <li>Technicians</li>
                    <li>Skilled & Unskilled Workers</li>

                </ul>

            </div>

        </div>

    </div>

</section>

<section class="py-5 bg-dark text-white">

    <div class="container">

        <div class="text-center mb-5">

            <h2 class="fw-bold">
                Why Choose Our Services
            </h2>

        </div>

        <div class="row">

            <div class="col-md-3">

                <div class="text-center">

                    <h3 class="text-warning">✓</h3>

                    <h5>Reliable Delivery</h5>

                </div>

            </div>

            <div class="col-md-3">

                <div class="text-center">

                    <h3 class="text-warning">✓</h3>

                    <h5>Safety Standards</h5>

                </div>

            </div>

            <div class="col-md-3">

                <div class="text-center">

                    <h3 class="text-warning">✓</h3>

                    <h5>Experienced Team</h5>

                </div>

            </div>

            <div class="col-md-3">

                <div class="text-center">

                    <h3 class="text-warning">✓</h3>

                    <h5>Modern Equipment</h5>

                </div>

            </div>

        </div>

    </div>

</section>

<section class="py-5">

    <div class="container text-center">

        <h2 class="fw-bold">
            Need Our Services?
        </h2>

        <p class="lead">

            Contact our team today for professional construction,
            logistics, and manpower solutions.

        </p>

        <a href="/contact" class="btn btn-warning btn-lg">
            Request a Quote
        </a>

    </div>

</section>

@endsection