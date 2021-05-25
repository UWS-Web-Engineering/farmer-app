@extends ('layout')

@section('topnav')
    @include('topnav')
@endsection

@section('content')
<div class="b-nav-spacer"></div>
<div class="b-clients-container">
    <div class="b-back">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M231.536 475.535l7.071-7.07c4.686-4.686 4.686-12.284 0-16.971L60.113 273H436c6.627 0 12-5.373 12-12v-10c0-6.627-5.373-12-12-12H60.113L238.607 60.506c4.686-4.686 4.686-12.284 0-16.971l-7.071-7.07c-4.686-4.686-12.284-4.686-16.97 0L3.515 247.515c-4.686 4.686-4.686 12.284 0 16.971l211.051 211.05c4.686 4.686 12.284 4.686 16.97-.001z"/></svg>
        <span class="b-heading b-heading-text">
            BACK
        </span>
    </div>
    <div class="b-cropname">
        Cauliflower
    </div>
    <div class="b-client-details-container">
        <div class="b-left-col">
            <div class="b-client-details">
                <div class="b-label b-body">
                    Fulfill By
                </div>
                <div class="b-detail b-body">
                    27 May 2021
                </div>
            </div>
            
            <div class="b-client-details">
                <div class="b-label b-body">
                    Qty
                </div>
                <div class="b-detail b-body">
                    200 KG
                </div>
            </div>
        </div>
        <div class="b-right-col">
            <div class="b-client-details">
                <div class="b-label b-body">
                    Contract Price
                </div>
                <div class="b-detail b-body">
                    $ 12,000.00
                </div>
            </div>
            
            <div class="b-client-details">
                <div class="b-label b-body">
                    Down Payment
                </div>
                <div class="b-detail b-body">
                    $ 4,800.00
                </div>
            </div>
        </div>
    </div>
</div>

<div class="b-queries-container">
    <div class="b-section">
        <h2 class="b-body b-body-text">
            Have you done this particular task?
        </h2>
	</div>
    <div class="b-section">
        <h2 class="b-body b-body-text">
            Have you done this particular task?
        </h2>
	</div>
    <div class="b-section">
        <h2 class="b-body b-body-text">
            Have you done this particular task?
        </h2>
	</div>
    <div class="b-section">
        <h2 class="b-body b-body-text b-read">
            Have you done this particular task?
        </h2>
	</div>
    <div class="b-section">
        <h2 class="b-body b-body-text">
            Have you done this particular task?
        </h2>
	</div>
    <div class="b-section">
        <h2 class="b-body b-body-text">
            Have you done this particular task?
        </h2>
	</div>
    <div class="b-section">
        <h2 class="b-body b-body-text b-read">
            Have you done this particular task?
        </h2>
	</div>
    <div class="b-section">
        <h2 class="b-body b-body-text">
            Have you done this particular task?
        </h2>
	</div>
    <div class="b-section">
        <h2 class="b-body b-body-text">
            Have you done this particular task?
        </h2>
	</div>
    <div class="b-section">
        <h2 class="b-body b-body-text b-read">
            Have you done this particular task?
        </h2>
	</div>
    <div class="b-section">
        <h2 class="b-body b-body-text">
            Have you done this particular task?
        </h2>
	</div>
    <div class="b-section">
        <h2 class="b-body b-body-text">
            Have you done this particular task?
        </h2>
	</div>
    <div class="b-section">
        <h2 class="b-body b-body-text b-read">
            Have you done this particular task?
        </h2>
	</div>
    <div class="b-section">
        <h2 class="b-body b-body-text">
            Have you done this particular task?
        </h2>
	</div>
</div>
@endsection

@section('bottomnav')
    @include('bottomnav');
@endsection