@extends ('layout')

@section('topnav')
    @include('topnav')
@endsection

@section('content')
<div class="b-clients-container">
    <div class="b-back">
        <a href="/clients">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M231.536 475.535l7.071-7.07c4.686-4.686 4.686-12.284 0-16.971L60.113 273H436c6.627 0 12-5.373 12-12v-10c0-6.627-5.373-12-12-12H60.113L238.607 60.506c4.686-4.686 4.686-12.284 0-16.971l-7.071-7.07c-4.686-4.686-12.284-4.686-16.97 0L3.515 247.515c-4.686 4.686-4.686 12.284 0 16.971l211.051 211.05c4.686 4.686 12.284 4.686 16.97-.001z"/></svg>
            <span class="b-heading b-heading-text">
                BACK
            </span>
        </a>
    </div>
    <a href="/query/{{ $client['id'] }}">
    </a>
        
        <!-- Hello -->
        <div class="b-cropname">
            {{ $client['name'] }}
        </div>
        <div class="b-client-details-container">
            <div class="b-left-col">
                <div class="b-client-details">
                    <div class="b-label b-body">
                        Fulfill By
                    </div>
                    <div class="b-detail b-body">
                        @php 
                            $timestamp = preg_replace( '/[^0-9]/', '', $client['dateAgreed']);
                            $date = date("d M Y", $timestamp / 1000);
                            echo $date;
                        @endphp
                    </div>
                </div>
                
                <div class="b-client-details">
                    <div class="b-label b-body">
                        Qty
                    </div>
                    <div class="b-detail b-body">
                        {{ $client['weight'] }}
                    </div>
                </div>
            </div>
            <div class="b-right-col">
                <div class="b-client-details">
                    <div class="b-label b-body">
                        Contract Price
                    </div>
                    <div class="b-detail b-body">
                        {{ $client['contractPrice'] }}
                    </div>
                </div>
                
                <div class="b-client-details">
                    <div class="b-label b-body">
                        Down Payment
                    </div>
                    <div class="b-detail b-body">
                        {{ $client['downPayment'] }}
                    </div>
                </div>
            </div>
        </div>
</div>

<div class="b-queries-container">
    @foreach($queries as $queries => $query)
        @if($query['isRead']!=0)
        <a href="/query/{{ $query['id'] }}">
            <div class="b-section">
                <h2 class="b-body b-body-text b-read">
                    {{ $query['officerMessage'] }}
                </h2>
            </div>
        </a>
        @else
        <a href="/query/{{ $query['id'] }}">
            <div class="b-section">
                <h2 class="b-body b-body-text">
                    {{ $query['officerMessage'] }}
                </h2>
            </div>
        </a>
        @endif
    @endforeach
</div>
@endsection

@section('bottomnav')
    @include('bottomnav');
@endsection