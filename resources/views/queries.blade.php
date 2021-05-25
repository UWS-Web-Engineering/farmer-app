@extends ('layout')

@section('topnav')
    @include('topnav')
@endsection

@section('content')
<div class="b-queries-container">
    @foreach($queries as $queries => $query)
        @if($query['isRead']!=1)
            <a href="/query/{{ $query['id'] }}">
                <div class="b-section">
                    <p class="b-heading b-heading-text">
                        {{ $query['sender'] }}
                    </p>
                    <h2 class="b-body b-body-text">
                        {{ $query['query'] }}
                    </h2>
                    <p class="b-heading b-heading-text">
                     @php 
                        $timestamp = preg_replace( '/[^0-9]/', '', $query['queryDate']);
                        $date = date("d M, h:i A", $timestamp / 1000);
                        echo $date;
                     @endphp
                    </p>
                </div>
            </a>
        @endif
    @endforeach
</div>
@endsection

@section('bottomnav')
    @include('bottomnav')
@endsection