@extends ('layout')

@section('topnav')
    @include('topnav')
@endsection

@section('content')
<div class="b-nav-spacer"></div>

<div class="b-queries-container">
    @foreach($queries as $queries => $query)
        <a href="/query/{{ $query['id'] }}">
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
        </a>
    @endforeach
</div>
@endsection

@section('bottomnav')
    @include('bottomnav')
@endsection