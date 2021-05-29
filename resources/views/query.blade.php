@extends ('layout')

@section('topnav')
    @include('topnav')
@endsection

@section('content')
<div class="b-clients-container">
    <div class="b-back">
        <a href="{{ url()->previous() }}">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M231.536 475.535l7.071-7.07c4.686-4.686 4.686-12.284 0-16.971L60.113 273H436c6.627 0 12-5.373 12-12v-10c0-6.627-5.373-12-12-12H60.113L238.607 60.506c4.686-4.686 4.686-12.284 0-16.971l-7.071-7.07c-4.686-4.686-12.284-4.686-16.97 0L3.515 247.515c-4.686 4.686-4.686 12.284 0 16.971l211.051 211.05c4.686 4.686 12.284 4.686 16.97-.001z"/></svg>
            <span class="b-heading b-heading-text">
                BACK
            </span>
        </a>
    </div>
    <div class="b-msg-left">
        <div class="b-bubble">
            <div class="b-message">
                {{ $query['officerMessage'] }}
            </div>

            {{-- @if($query['farmerMessage']==null) --}}
                <div class="b-query-response b-btn b-btn-y" data-response="Yes" data-queryid="{{$query['id']}}">
                    Yes
                </div>
                <div class="b-query-response b-btn b-btn-n" data-response="No" data-queryid="{{$query['id']}}">
                    No
                </div>
                <div class="b-query-response b-btn b-btn-a" data-response="Ask" data-queryid="{{$query['id']}}">
                    Ask Help
                </div>
            {{-- @endif --}}
        </div>
        <div class="b-date">
        @php 
            $timestamp = preg_replace( '/[^0-9]/', '', $query['createdAt']);
            $date = date("d M, h:i A", $timestamp / 1000);
            echo $date;
        @endphp
        </div>
    </div>
    <div class="b-msg-textbox">
        <textarea name="" id="askHelp" placeholder="Write a message"></textarea>
        <div class="b-btn b-btn-y b-ask-response" data-queryid="{{$query['id']}}">
            Send
        </div>
    </div>
    <div class="b-msg-right">
        @if($query['farmerMessage']==null)
            <div>
                <div class="b-bubble">
                    <div class="b-message">
                        {{ $query['farmerMessage'] }}
                    </div>
                </div>
            </div>
            <div class="b-date">
                @php
                    $timestamp = preg_replace( '/[^0-9]/', '', $query['updatedAt']);
                    $date = date("d M, h:i A", $timestamp / 1000);
                    echo $date;
                @endphp
            </div>
        @endif
    </div>
</div>
@endsection

@section('bottomnav')
	@include('bottomnav')
@endsection