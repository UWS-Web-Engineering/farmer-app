@extends ('layout')

@section('topnav')
    @include('topnav')
@endsection

@section('content')
<div class="b-requests-container">
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
                <div>
                    Buyer: <span class="b-strong">{{ $request['clientname'] }}</span>
                </div>
                <div>
                    Crop: <span class="b-strong">{{ $request['cropname'] }}</span>
                </div>
                <div>
                    Qty: <span class="b-strong">{{ $request['weight'] }}</span>
                </div>
                <div>
                    Offer: <span class="b-strong">{{ $request['contractprice'] }}</span>
                </div>
                <div>
                    @php 
                        $timestamp = preg_replace( '/[^0-9]/', '', $request['dateagreed']);
                        $date = date("d M Y", $timestamp / 1000);
                        echo 'Fulfill By: <span class="b-strong">'.$date.'</span>';
                     @endphp
                </div>
            </div>
            <div class="b-req-response b-btn b-btn-y" data-response="Accept" data-requestid="{{$request['id']}}">
                ACCEPT OFFER
            </div>
            <div class="b-req-response b-btn b-btn-n" data-response="Reject" data-requestid="{{$request['id']}}">
                DECLINE OFFER
            </div>
            <div class="b-req-response b-btn b-btn-a" data-response="Counter" data-requestid="{{$request['id']}}">
                COUNTER OFFER
            </div>
        </div>
        <div class="b-date">
        @php 
            $timestamp = preg_replace( '/[^0-9]/', '', $request['createdat']);
            $date = date("d M, h:i A", $timestamp / 1000);
            echo $date;
        @endphp
        </div>
    </div>
    <div class="b-msg-textbox">
        <textarea name="" id="weight" placeholder="Weight" rows="1"></textarea>
        <textarea name="" id="price" placeholder="Offer Price" rows="1"></textarea>
        <textarea name="" id="date" placeholder="Fulfilment Date" rows="1"></textarea>        
        <div class="b-btn b-btn-y b-counter-response" data-requestid="{{$request['id']}}">
            Send
        </div>
    </div>
    <div class="b-msg-right">
        @if($request['farmerresponse']==null)
            <div>
                <div class="b-bubble">
                    <div class="b-message">
                        {{ $request['farmerresponse'] }}
                    </div>
                </div>
            </div>
            <div class="b-date">
                @php
                    $timestamp = preg_replace( '/[^0-9]/', '', $request['updatedat']);
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