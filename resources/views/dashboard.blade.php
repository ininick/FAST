@extends('template.master')

@section('styles')
<style>
body {
    background-color: #C9FFDA !important;
}

.big-container {
    overflow-y: auto;
    height: 70vh;
    scrollbar-width: none;
    /* For Firefox */
}

.big-container::-webkit-scrollbar {
    display: none;
    /* For Chrome, Safari, and Opera */
}
</style>
@endsection

@section('title')
FAST - Dashboard
@endsection

@section('content')
@include('template.header')
<div class="container mt-2">
    <div class="d-flex align-items-center">
        <img src="{{ asset('images/dashboard.svg') }}" alt="Dashboard Icon" style="max-height: 30px;">
        <h2 class="p-4 mb-0">Dashboard</h2>
    </div>
    <!-- Add more dashboard content here -->
    <div class="big-container rounded p-4 mx-auto" style="background-color: #79D7BE; max-width: 80vw;">
        <div class="row">
            @for ($i = 0; $i < 8; $i++) <!-- Example: 12 cards -->
                <div class="col-md-3 mb-4">
                    <div class="card h-100">
                        <div class="card-body">
                            <h5 class="card-title">[TICKET ID] {{ $i + 1 }}</h5>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">On [DD/MM/YYYY hh:mm]</li>
                                <li class="list-group-item">[Title]</li>
                                <li class="list-group-item">[Sub-Title]</li>
                                <li class="list-group-item">[Content]</li>
                                <li class="list-group-item">Escalation Level: [N]</li>
                            </ul>
                        </div>
                    </div>
                </div>
                @endfor
        </div>
    </div>
</div>
@endsection