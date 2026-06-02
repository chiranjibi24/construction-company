<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm sticky-top">

    <div class="container">

        <a class="navbar-brand d-flex align-items-center" href="/">

            <img src="https://cdn-icons-png.flaticon.com/512/1995/1995470.png"
                alt="logo"
                width="50"
                class="me-2">

            <div>

                <h5 class="mb-0 fw-bold text-dark">
                    Build<span class="text-warning">Master</span>
                </h5>

                <small class="text-muted">
                    Construction & Logistics
                </small>

            </div>

        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">

            <span class="navbar-toggler-icon"></span>

        </button>

        <div class="collapse navbar-collapse" id="navbarNav">

            <ul class="navbar-nav mx-auto">

                <li class="nav-item">
                    <a class="nav-link fw-semibold" href="/">Home</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link fw-semibold" href="/about">About</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link fw-semibold" href="/services">Services</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link fw-semibold" href="/projects">Projects</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link fw-semibold" href="{{ route('gallery.index') }}">Gallery</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link fw-semibold" href="/contact">Contact</a>
                </li>

            </ul>

            <a href="/contact" class="btn btn-warning text-white">
                GET IN TOUCH
            </a>

        </div>

    </div>

</nav>