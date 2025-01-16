<nav class="navbar navbar-expand-lg navbar-light">
    <div class="container-fluid d-flex justify-content-center">
        <a class="navbar-brand" href="{{ route('dashboard') }}">
            <img src="{{ asset('images/logo.png') }}" alt="Logo" style="max-height: 60px;">
        </a>
    </div>
</nav>

<ul class="nav flex-column ms-3">
    @if (Auth::user()->team_id == 1)
    <li class="nav-item">
        <form method="POST" action="{{ route('dashboard') }}">
            @csrf
            <button type="submit" class="nav-link active"
                style="font-size: 1.2rem; text-decoration: none; color: black; background: none; border: none; padding: 10px;">
                <img src="{{ asset('images/dashboard.svg') }}" alt="Dashboard Icon" style="max-height: 30px;">
                Dashboard
            </button>
        </form>
    </li>
    <li class="nav-item">
        <form method="POST" action="{{ route('dashboard') }}">
            @csrf
            <button type="submit" class="nav-link active"
                style="font-size: 1.2rem; text-decoration: none; color: black; background: none; border: none; padding: 10px;">
                <img src="{{ asset('images/my_tickets.svg') }}" alt="My Tickets Icon" style="max-height: 30px;">
                My Tickets
            </button>
        </form>
    </li>
    <li class="nav-item">
        <form method="POST" action="{{ route('dashboard') }}">
            @csrf
            <button type="submit" class="nav-link active"
                style="font-size: 1.2rem; text-decoration: none; color: black; background: none; border: none; padding: 10px;">
                <img src="{{ asset('images/my_tasks.svg') }}" alt="My Tasks Icon" style="max-height: 30px;">
                My Tasks
            </button>
        </form>
    </li>
    <li class="nav-item">
        <form method="POST" action="{{ route('dashboard') }}">
            @csrf
            <button type="submit" class="nav-link active"
                style="font-size: 1.2rem; text-decoration: none; color: black; background: none; border: none; padding: 10px;">
                <img src="{{ asset('images/create_ticket.svg') }}" alt="Create Ticket Icon" style="max-height: 30px;">
                Create Ticket
            </button>
        </form>
    </li>
    <li class="nav-item">
        <form method="POST" action="{{ route('dashboard') }}">
            @csrf
            <button type="submit" class="nav-link active"
                style="font-size: 1.2rem; text-decoration: none; color: black; background: none; border: none; padding: 10px;">
                <img src="{{ asset('images/search.svg') }}" alt="Search Icon" style="max-height: 30px;">
                Search
            </button>
        </form>
    </li>
    <li class="nav-item">
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="nav-link active"
                style="font-size: 1.2rem; text-decoration: none; color: black; background: none; border: none; padding: 10px;">
                <img src="{{ asset('images/logout.svg') }}" alt="Logout Icon" style="max-height: 30px;">
                Logout
            </button>
        </form>
    </li>
    @elseif (Auth::user()->team_id == 2)
    <li class="nav-item">
        <form method="POST" action="{{ route('dashboard') }}">
            @csrf
            <button type="submit" class="nav-link active"
                style="font-size: 1.2rem; text-decoration: none; color: black; background: none; border: none; padding: 10px;">
                <img src="{{ asset('images/dashboard.svg') }}" alt="Dashboard Icon" style="max-height: 30px;">
                Dashboard
            </button>
        </form>
    </li>
    <li class="nav-item">
        <form method="POST" action="{{ route('dashboard') }}">
            @csrf
            <button type="submit" class="nav-link active"
                style="font-size: 1.2rem; text-decoration: none; color: black; background: none; border: none; padding: 10px;">
                <img src="{{ asset('images/all_ticket.svg') }}" alt="All Ticket Icon" style="max-height: 30px;">
                All Tickets
            </button>
        </form>
    </li>
    <li class="nav-item">
        <form method="POST" action="{{ route('dashboard') }}">
            @csrf
            <button type="submit" class="nav-link active"
                style="font-size: 1.2rem; text-decoration: none; color: black; background: none; border: none; padding: 10px;">
                <img src="{{ asset('images/search.svg') }}" alt="Search Icon" style="max-height: 30px;">
                Search
            </button>
        </form>
    </li>
    <li class="nav-item">
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="nav-link active"
                style="font-size: 1.2rem; text-decoration: none; color: black; background: none; border: none; padding: 10px;">
                <img src="{{ asset('images/logout.svg') }}" alt="Logout Icon" style="max-height: 30px;">
                Logout
            </button>
        </form>
    </li>
    @else
    <li class="nav-item">
        <form method="POST" action="{{ route('dashboard') }}">
            @csrf
            <button type="submit" class="nav-link active"
                style="font-size: 1.2rem; text-decoration: none; color: black; background: none; border: none; padding: 10px;">
                <img src="{{ asset('images/dashboard.svg') }}" alt="Dashboard Icon" style="max-height: 30px;">
                Dashboard
            </button>
        </form>
    </li>
    <li class="nav-item">
        <form method="POST" action="{{ route('dashboard') }}">
            @csrf
            <button type="submit" class="nav-link active"
                style="font-size: 1.2rem; text-decoration: none; color: black; background: none; border: none; padding: 10px;">
                <img src="{{ asset('images/my_tasks.svg') }}" alt="My Tasks Icon" style="max-height: 30px;">
                My Tasks
            </button>
        </form>
    </li>
    <li class="nav-item">
        <form method="POST" action="{{ route('dashboard') }}">
            @csrf
            <button type="submit" class="nav-link active"
                style="font-size: 1.2rem; text-decoration: none; color: black; background: none; border: none; padding: 10px;">
                <img src="{{ asset('images/all_ticket.svg') }}" alt="All Ticket Icon" style="max-height: 30px;">
                All Tickets
            </button>
        </form>
    </li>
    <li class="nav-item">
        <form method="POST" action="{{ route('dashboard') }}">
            @csrf
            <button type="submit" class="nav-link active"
                style="font-size: 1.2rem; text-decoration: none; color: black; background: none; border: none; padding: 10px;">
                <img src="{{ asset('images/search.svg') }}" alt="Search Icon" style="max-height: 30px;">
                Search
            </button>
        </form>
    </li>
    <li class="nav-item">
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="nav-link active"
                style="font-size: 1.2rem; text-decoration: none; color: black; background: none; border: none; padding: 10px;">
                <img src="{{ asset('images/logout.svg') }}" alt="Logout Icon" style="max-height: 30px;">
                Logout
            </button>
        </form>
    </li>
    @endif
</ul>