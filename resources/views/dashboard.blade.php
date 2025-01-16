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

.card-body {
    border-radius: 15px !important;
}

.card-content {
    background-color: rgb(228, 246, 236);
    border-radius: 13px;
    box-shadow: -4px 0px 8px rgba(0, 0, 0, 0.15), 4px 0px 8px rgba(0, 0, 0, 0.15) !important;
}


.card-submitted {
    border: none;
    background-color: rgb(223, 197, 148) !important;
    /* light orange */
}

.card-approved {
    border: none;
    background-color: rgb(253, 183, 52) !important;
    /* orange */
}

.card-waiting {
    border: none;
    background-color: rgb(150, 211, 231) !important;
    /* light blue */
}

.card-active {
    border: none;
    background-color: #4DA1A9 !important;
    /* blue */
}

.card-fulfilled {
    border: none;
    background-color: rgb(121, 215, 148) !important;
    /* light green */
}

.card-closed {
    border: none;
    background-color: rgb(53, 161, 81) !important;
    /* green */
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
        <img src="{{ asset('images/dashboard.svg') }}" alt="Dashboard Icon" style="height: 30px;">
        <h2 class="ps-2 my-3">Dashboard</h2>
    </div>
    <!-- Add more dashboard content here -->
    <div class="big-container rounded-3 p-4 mx-auto" style="background-color: #79D7BE; max-width: 80vw;">
        <div class="row">
            @foreach ($tickets as $ticket)
            <div class="col-md-3 mb-4">
                <div class="card h-100 
                    @if($ticket->status == 'Submitted') card-submitted 
                    @elseif($ticket->status == 'Approved') card-approved 
                    @elseif($ticket->status == 'Waiting for Customer') card-waiting 
                    @elseif($ticket->status == 'Active') card-active 
                    @elseif($ticket->status == 'Fulfilled') card-fulfilled 
                    @elseif($ticket->status == 'Closed') card-closed 
                    @endif">
                    <div class="card-body">
                        <div class="card-content pt-3 pb-1 ps-2 pe-1">
                            <h5 class="card-title ms-1"><b>{{ $ticket->ticket_id }}</b></h5>
                            <ul class="list-group list-group-flush ">
                                <li
                                    class="list-group-item border border-0 bg-transparent card-item-shadow rounded-top-3">
                                    On
                                    {{ $ticket->created_time->format('d/m/Y H:i') }}
                                </li>
                                <li class="list-group-item border border-0 bg-transparent card-item-shadow">
                                    {{ $ticket->name }}</li>
                                <li class="list-group-item border border-0 bg-transparent card-item-shadow">
                                    {{ $ticket->description }}
                                </li>
                                <li class="list-group-item border border-0 bg-transparent card-item-shadow">
                                    {{ $ticket->fulfillment }}
                                </li>
                                <li
                                    class="list-group-item border border-0 bg-transparent card-item-shadow rounded-bottom-3">
                                    Escalation Levels:
                                    {{ $ticket->escalation_levels }}
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection