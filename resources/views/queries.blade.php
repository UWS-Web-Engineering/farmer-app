@extends ('layout')

@section('topnav')
    @include('topnav')
@endsection

@section('content')
<div class="b-nav-spacer"></div>

@php
$response = '
    {
        "queries":[
            {
                "id":150,
                "sender":"Kmart",
                "query":"Can you cultivate by end of the month?",
                "isRead":false,
                "queryDate":"04 Feb"
            },
            {
                "id":151,
                "sender":"Woolworths",
                "query":"Have you finished this task?",
                "isRead":true,
                "queryDate":"06 Feb"
            },
            {
                "id":151,
                "sender":"Coles",
                "query":"Have you received the payment?",
                "isRead":true,
                "queryDate":"07 feb"
            }
        ]
    }
        ';
$arr = json_decode($response, true);
@endphp

<div class="b-queries-container">
    @foreach($arr['queries'] as $queries => $query)
        <div class="b-section">
            <p class="b-heading b-heading-text">
                {{ $query['sender'] }}
            </p>
            <h2 class="b-body b-body-text">
                {{ $query['query'] }}
            </h2>
            <p class="b-heading b-heading-text">
                {{ $query['queryDate'] }}
            </p>
        </div>
    @endforeach
</div>
@endsection

@section('bottomnav')
    @include('bottomnav')
@endsection