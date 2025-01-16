<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #79D7BE !important;">
    <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item d-flex align-items-center justify-content-center">
                    <img src="{{ asset('images/user.jpg') }}" alt="User Image" style="max-height: 40px;"
                        class="rounded-circle me-2">
                    <span class="navbar-text text-left">
                        Hello {{ Auth::user()->name }}, Welcome to FAST!<br>
                        <small><b>{{Auth::user()->team->group}} - {{ Auth::user()->team->name }}</b></small>
                    </span>
                </li>
            </ul>
            <div class="d-flex ms-auto">
                <form class="d-flex position-relative">
                    <input class="form-control pe-5" type="search" placeholder="Find something in FAST"
                        aria-label="Search">
                    <button class="btn position-absolute end-0 top-0 mt-0 ms-2" type="submit"
                        style="background: none; border: none;">
                        <img src="{{ asset('images/search.svg') }}" alt="Search Icon" style="max-height: 20px;">
                    </button>
                </form>
                <ul class="navbar-nav ms-2 mb-2 mb-lg-0">
                    <li class="nav-item d-flex align-items-center">
                        <a class="nav-link" href="#">
                            <img src="{{ asset('images/notification.svg') }}" alt="Notification Icon"
                                style="max-height: 30px;">
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>