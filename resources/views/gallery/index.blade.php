@extends('layouts.app')

@section('content')

<!-- Page Banner -->
<section class="bg-dark text-white py-5">

    <div class="container text-center">

        <h1 class="display-4 fw-bold">
            Project Gallery
        </h1>

        <p class="lead">
            Showcasing Our Construction, Logistics & Infrastructure Operations
        </p>

    </div>

</section>

<!-- Construction Site Photos -->

<section class="py-5">

    <div class="container">

        <div class="text-center mb-5">

            <h2 class="fw-bold">
                Construction Site Photos
            </h2>

            <p class="text-muted">
                Images from our ongoing and completed construction projects.
            </p>

        </div>

        <div class="row">

            <div class="col-md-4 mb-4">
                <div class="gallery-box">
                    <img src="{{ asset('images/c1.jpg') }}"
                         class="gallery-img">
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="gallery-box">
                    <img src="{{ asset('images/c2.jpg') }}"
                         class="gallery-img">
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="gallery-box">
                    <img src="{{ asset('images/c3.jpg') }}"
                         class="gallery-img">
                </div>
            </div>

        </div>

    </div>

</section>

<!-- Machinery Photos -->

<section class="py-5 bg-light">

    <div class="container">

        <div class="text-center mb-5">

            <h2 class="fw-bold">
                Machinery & Equipment
            </h2>

            <p class="text-muted">
                Heavy machinery and equipment used in our operations.
            </p>

        </div>

        <div class="row">

            <div class="col-md-4 mb-4">
                <div class="gallery-box">
                    <img src="{{ asset('images/m1.jpg') }}"
                         class="gallery-img">
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="gallery-box">
                    <img src="{{ asset('images/m2.jpg') }}"
                         class="gallery-img">
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="gallery-box">
                    <img src="{{ asset('images/image3.jpg') }}"
                         class="gallery-img">
                </div>
            </div>

        </div>

    </div>

</section>

<!-- Logistics Operations -->

<section class="py-5">

    <div class="container">

        <div class="text-center mb-5">

            <h2 class="fw-bold">
                Logistics Operations
            </h2>

            <p class="text-muted">
                Transportation and logistics support activities.
            </p>

        </div>

        <div class="row">

            <div class="col-md-4 mb-4">
                <div class="gallery-box">
                    <img src="{{ asset('images/t1.jpg') }}"
                         class="gallery-img">
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="gallery-box">
                    <img src="{{ asset('images/t2.jpg') }}"
                         class="gallery-img">
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="gallery-box">
                    <img src="{{ asset('images/t3.jpg') }}"
                         class="gallery-img">
                </div>
            </div>

        </div>

    </div>

</section>

<!-- Completed Projects -->

<section class="py-5">

    <div class="container">

        <div class="text-center mb-5">

            <h2 class="fw-bold">
                Completed Projects
            </h2>

            <p class="text-muted">
                Successfully completed projects across various sectors.
            </p>

        </div>

        <div class="row">

            <div class="col-md-4 mb-4">
                <div class="gallery-box">
                    <img src="{{ asset('images/image6.jpg') }}"
                         class="gallery-img">
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="gallery-box">
                    <img src="{{ asset('images/image7.jpg') }}"
                         class="gallery-img">
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="gallery-box">
                    <img src="{{ asset('images/image8.jpg') }}"
                         class="gallery-img">
                </div>
            </div>

        </div>

    </div>

</section>

@endsection