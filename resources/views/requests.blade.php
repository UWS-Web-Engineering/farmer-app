@extends ('layout')

@section('topnav')
	@include('topnav')
@endsection

@section('content')
<div class="b-nav-spacer"></div>
<div class="p-row"> 
@foreach($requests as $requests => $request)
    <div class="p-column">
        <li class="pdf">
		<a href="/clients"> 
		<bg> 
             <div class="request-client-name"> 
             {{ $request['clientName'] }} 
            </div>
            <div class="request-client-description"> 
             {{ $request['cropName'] }} 
			</div>
			<div class="request-client-weight"> 
             {{ $request['weight'] }} 
			</div>
		</<bg> 
        </a>
        </li>
    </div>
	@endforeach
<div class="b-nav-spacer"></div>
@endsection

@section('bottomnav')
	@include('bottomnav')
@endsection