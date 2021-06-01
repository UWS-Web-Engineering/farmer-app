@extends ('layout')

@section('topnav')
    @include('topnav')
@endsection

@section('content')
<div class="b-queries-container">
    @foreach($queries as $queries => $query)
        @if($query['isread']=='false')
            <a href="/query/{{ $query['id'] }}">
                <div class="b-section">
                    <div class="b-heading b-heading-text">
                        {{ $query['clientname'] }}
                    </div>
                    <h2 class="b-body b-body-text">
                        {{ $query['officermessage'] }}
                    </h2>
                    <div class="b-heading b-heading-text">
                     @php 
                        $timestamp = preg_replace( '/[^0-9]/', '', $query['createdat']);
                        $date = date("d M, h:i A", $timestamp / 1000);
                        echo $date;
                     @endphp
                    </div>
                </div>
            </a>
        @endif
    @endforeach
</div>
@endsection

@section('bottomnav')
    @include('bottomnav')
@endsection