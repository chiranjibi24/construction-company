@extends('layouts.app')

@section('content')

<section class="bg-dark text-white py-5">

    <div class="container text-center">

        <h1 class="display-4 fw-bold">
            Contact Us
        </h1>

        <p class="lead">
            Get In Touch With Our Team
        </p>

    </div>

</section>

<section class="py-5">

    <div class="container">

        <div class="row">

            <!-- Contact Details -->

            <div class="col-lg-5 mb-4">

                <h2 class="fw-bold mb-4">
                    Contact Information
                </h2>

                <div class="card shadow border-0 mb-3">

                    <div class="card-body">

                        <h5>📍 Office Address</h5>

                        <p>
                            123 Construction Road,
                            Bhubaneswar, Odisha, India
                        </p>

                    </div>

                </div>

                <div class="card shadow border-0 mb-3">

                    <div class="card-body">

                        <h5>📞 Phone</h5>

                        <p>
                            +91 9999999999
                        </p>

                    </div>

                </div>

                <div class="card shadow border-0 mb-3">

                    <div class="card-body">

                        <h5>✉ Email</h5>

                        <p>
                            info@company.com
                        </p>

                    </div>

                </div>

                <div class="card shadow border-0">

                    <div class="card-body">

                        <h5>🕒 Working Hours</h5>

                        <p>
                            Monday - Saturday<br>
                            9:00 AM - 6:00 PM
                        </p>

                    </div>

                </div>

            </div>

            <!-- Contact Form -->

            <div class="col-lg-7">

                <div class="card shadow border-0">

                    <div class="card-body p-4">

                        <h3 class="mb-4">
                            Send Us A Message
                        </h3>

                        <form action="{{ route('contact.store') }}"
                              method="POST">

                            @csrf

                            <div class="row">

                                <div class="col-md-6 mb-3">

                                    <label>Name</label>

                                    <input type="text"
                                           name="name"
                                           class="form-control"
                                           required>

                                </div>

                                <div class="col-md-6 mb-3">

                                    <label>Phone</label>

                                    <input type="text"
                                           name="phone"
                                           class="form-control"
                                           required>

                                </div>

                            </div>

                            <div class="mb-3">

                                <label>Email</label>

                                <input type="email"
                                       name="email"
                                       class="form-control"
                                       required>

                            </div>

                            <div class="mb-3">

                                <label>Subject</label>

                                <input type="text"
                                       name="subject"
                                       class="form-control">

                            </div>

                            <div class="mb-3">

                                <label>Message</label>

                                <textarea name="message"
                                          rows="5"
                                          class="form-control"
                                          required></textarea>

                            </div>

                            <button type="submit"
                                    class="btn btn-warning">

                                Send Message

                            </button>

                        </form>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>

<section class="pb-5">

    <div class="container">

        <h2 class="fw-bold text-center mb-4">
            Our Location
        </h2>

        <div class="shadow rounded overflow-hidden">

            <iframe
                src="https://maps.google.com/maps?q=Kytics%20Technologies%20Bhubaneswar&t=&z=17&ie=UTF8&iwloc=&output=embed"
                width="100%"
                height="450"
                style="border:0;"
                allowfullscreen=""
                loading="lazy"
                referrerpolicy="no-referrer-when-downgrade">
            </iframe>

        </div>

    </div>

</section>

@endsection