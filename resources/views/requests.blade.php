@extends ('layout')

@section('topnav')
	@include('topnav')
@endsection

@section('content')
<div class="p-row"> 
@foreach($requests as $requests => $request)
    <div class="p-column">
        <li class="pdf">
		<a href="/request/{{ $request['id'] }}"> 
		<bg> 
             <div class="request-client-name"> 
             {{ $request['clientname'] }} 
            </div>
            <div class="request-client-description"> 
             {{ $request['cropname'] }} 
			</div>
			<div class="request-client-weight"> 
             {{ $request['weight'] }} 
			</div>
		</<bg> 
        </a>
        </li>
    </div>
	@endforeach
@endsection

@section('bottomnav')
	@include('bottomnav')
@endsection