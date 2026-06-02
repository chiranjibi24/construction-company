@extends('layouts.app')

@section('content')

{{-- HERO VIDEO SECTION --}}

<section class="hero-section">

    <video autoplay muted loop playsinline class="bg-video">

        <source src="{{ asset('videos/banner.mp4') }}" type="video/mp4">

    </video>

    <div class="overlay"></div>

    <div class="hero-content">

        <h1>
            Trusted Construction & Logistics Partner
        </h1>

        <p>
            Plant Transport • Equipment Supply • Manpower Solutions
        </p>

        <a href="#" class="btn btn-warning btn-lg">
            Explore Services
        </a>

    </div>

</section>

<section class="py-5 bg-dark text-white">
    <div class="container">
        <div class="row text-center">

            <div class="col-md-3">
                <h2 class="fw-bold text-warning">20+</h2>
                <p>Years Experience</p>
            </div>

            <div class="col-md-3">
                <h2 class="fw-bold text-warning">500+</h2>
                <p>Projects Completed</p>
            </div>

            <div class="col-md-3">
                <h2 class="fw-bold text-warning">150+</h2>
                <p>Employees</p>
            </div>

            <div class="col-md-3">
                <h2 class="fw-bold text-warning">100%</h2>
                <p>Client Satisfaction</p>
            </div>

        </div>
    </div>
</section>

{{-- ABOUT SECTION --}}

<section class="py-5">

    <div class="container">

        <div class="row align-items-center">

            <!-- IMAGE -->

            <div class="col-md-6">

                <div class="about-image-wrapper">

                    <img src="{{ asset('images/ab.jpg') }}"
                         class="img-fluid rounded about-img">

                </div>

            </div>

            <!-- CONTENT -->

            <div class="col-md-6">

                <h2 class="fw-bold mb-4">
                    About Company
                </h2>

                <p class="text-muted mb-4">

                    We provide transport logistics,
                    construction support,
                    equipment supply,
                    and manpower services.

                </p>

                <a href="/about" class="btn btn-dark px-4 py-2">
                    Read More
                </a>

            </div>

        </div>

    </div>

</section>

{{-- SERVICES SECTION --}}

<section class="py-5 bg-light">

    <div class="container">

        <div class="text-center mb-5">

            <h2 class="fw-bold">
                Our Services
            </h2>

        </div>

        <div class="row g-4">

            <div class="col-md-3">

                <div class="card service-card border-0 shadow h-100">

                    <div class="about-image-wrapper">

                        <img src="{{ asset('images/pt.jpg') }}"
                            class="card-img-top service-img rounded ">

                    </div>

                    <div class="card-body">

                        <h5>Plant Transport</h5>

                        <p>
                            Heavy machinery logistics solutions.
                        </p>

                    </div>

                </div>

            </div>

            <div class="col-md-3">

                <div class="card service-card border-0 shadow h-100">

                    <div class="about-image-wrapper">

                        <img src="{{ asset('images/image2.jpg') }}"
                            class="card-img-top service-img rounded">

                    </div>

                    <div class="card-body">

                        <h5>Construction Work</h5>

                        <p>
                            Construction transportation services.
                        </p>

                    </div>

                </div>

            </div>


            <div class="col-md-3">

                <div class="card service-card border-0 shadow h-100">

                    <div class="about-image-wrapper">

                        <img src="{{ asset('images/eq.jpg') }}"
                            class="card-img-top service-img rounded">

                    </div>

                    <div class="card-body">

                        <h5>Equipment Supply</h5>

                        <p>
                            Construction equipment solutions.
                        </p>

                    </div>

                </div>

            </div>


            <div class="col-md-3">

                <div class="card service-card border-0 shadow h-100">

                    <div class="about-image-wrapper">

                        <img src="{{ asset('images/mn.jpeg') }}"
                            class="card-img-top service-img rounded">

                    </div>

                    <div class="card-body">

                        <h5>Manpower Supply</h5>

                        <p>
                            Skilled workers and operators.
                        </p>

                    </div>

                </div>

            </div>
        </div>

    </div>

</section>

<section class="py-5">
    <div class="container">

        <div class="text-center mb-5">
            <h2 class="fw-bold">Why Choose Us</h2>
        </div>

        <div class="row">

            <div class="col-md-4">
                <div class="card shadow border-0 p-4 h-100">
                    <h4>Safety First</h4>
                    <p>Strict safety standards across all projects.</p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card shadow border-0 p-4 h-100">
                    <h4>Modern Equipment</h4>
                    <p>Latest construction and transport equipment.</p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card shadow border-0 p-4 h-100">
                    <h4>Expert Team</h4>
                    <p>Experienced engineers and operators.</p>
                </div>
            </div>

        </div>

    </div>
</section>

{{-- core Services --}}
<section class="py-5 bg-light">

    <div class="container">

        <h2 class="text-center fw-bold mb-5">
            Our Services
        </h2>

        <div class="row text-center">

            <div class="col-md-3">
                <i class="bi bi-truck fs-1 text-warning"></i>
                <h5 class="mt-3">Plant Transport</h5>
            </div>

            <div class="col-md-3">
                <i class="bi bi-building fs-1 text-warning"></i>
                <h5 class="mt-3">Construction Support</h5>
            </div>

            <div class="col-md-3">
                <i class="bi bi-gear fs-1 text-warning"></i>
                <h5 class="mt-3">Equipment Supply</h5>
            </div>

            <div class="col-md-3">
                <i class="bi bi-people fs-1 text-warning"></i>
                <h5 class="mt-3">Manpower Supply</h5>
            </div>

        </div>

    </div>

</section>

<section class="py-5">

    <div class="container">

        <div class="row align-items-center">

            <!-- Owner Image -->
            <div class="col-lg-5 text-center mb-4 mb-lg-0">

                <img src="{{ asset('images/owner.jpg') }}"
                     alt="Managing Director"
                     class="img-fluid owner-img shadow">

            </div>

            <!-- Owner Content -->
            <div class="col-lg-7">

                <span class="text-warning fw-bold">
                    Managing Director's Message
                </span>

                <h2 class="fw-bold mt-2">
                    Leading With Vision & Commitment
                </h2>

                <p class="text-muted mt-3">
                    Welcome to our company. Since our establishment,
                    we have been committed to providing reliable
                    construction logistics, plant transportation,
                    equipment supply, and manpower solutions.
                </p>

                <p class="text-muted">
                    Our goal is to deliver quality services while
                    maintaining the highest standards of safety,
                    professionalism, and customer satisfaction.
                    We believe in building long-term relationships
                    through trust, integrity, and excellence.
                </p>

                <h5 class="fw-bold mt-4">
                    Mr. Your Owner Name
                </h5>

                <p class="text-warning mb-0">
                    Founder & Managing Director
                </p>

            </div>

        </div>

    </div>

</section>

{{-- Project Gallery --}}

<section class="py-5">

    <div class="container">

        <h2 class="text-center fw-bold mb-5">
            Project Gallery
        </h2>

        <div class="row">

            <div class="col-md-4 mb-4">
                <img src="{{ asset('images/image6.jpg') }}"
                     class="gallery-img">
            </div>

            <div class="col-md-4 mb-4">
                <img src="{{ asset('images/image7.jpg') }}"
                     class="gallery-img">
            </div>

            <div class="col-md-4 mb-4">
                <img src="{{ asset('images/image8.jpg') }}"
                     class="gallery-img">
            </div>

        </div>

    </div>

</section>

{{-- Testimonials SECTION  --}}
<section class="py-5 bg-light">

    <div class="container">

        <div class="text-center mb-5">

            <h2 class="fw-bold">
                What Our Clients Say
            </h2>

            <p class="text-muted">
                Trusted by leading construction and logistics companies.
            </p>

        </div>

        <div class="row">

            <div class="col-md-4 mb-4">

                <div class="card border-0 shadow h-100">

                    <div class="card-body">

                        ⭐⭐⭐⭐⭐

                        <p class="mt-3">
                            Their transport logistics support helped us complete our project on time.
                        </p>

                        <h6 class="fw-bold">
                            ABC Infrastructure
                        </h6>

                    </div>

                </div>

            </div>

            <div class="col-md-4 mb-4">

                <div class="card border-0 shadow h-100">

                    <div class="card-body">

                        ⭐⭐⭐⭐⭐

                        <p class="mt-3">
                            Professional manpower and excellent equipment support.
                        </p>

                        <h6 class="fw-bold">
                            XYZ Construction
                        </h6>

                    </div>

                </div>

            </div>

            <div class="col-md-4 mb-4">

                <div class="card border-0 shadow h-100">

                    <div class="card-body">

                        ⭐⭐⭐⭐⭐

                        <p class="mt-3">
                            Reliable partner for heavy transport and construction projects.
                        </p>

                        <h6 class="fw-bold">
                            Industrial Solutions
                        </h6>

                    </div>

                </div>

            </div>

        </div>

    </div>

</sectionn>

<section class="py-5 text-center bg-warning">

    <div class="container">

        <h2 class="fw-bold">
            Ready To Start Your Project?
        </h2>

        <p>
            Contact us today for construction and logistics solutions.
        </p>

        <a href="/contact" class="btn btn-dark btn-lg">
            Get A Free Quote
        </a>

    </div>

</section>

@endsection