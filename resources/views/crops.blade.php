@extends ('layout')

@section('topnav')
	<div class="clearfix b-topnav">
		<div class="b-row">
			<div class="b-col-6">
				<a href="#">
					<div class="b-logo">
						<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path  d="M64 96H0c0 123.7 100.3 224 224 224v144c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V320C288 196.3 187.7 96 64 96zm384-64c-84.2 0-157.4 46.5-195.7 115.2 27.7 30.2 48.2 66.9 59 107.6C424 243.1 512 147.9 512 32h-64z"/></svg>
						<div class="b-logo-name b-heading  b-heading-text">
							FARMER APP
						</div>
					</div>
				</a>
			</div>
			<div class="b-col-6 b-right b-heading b-title b-heading-text">
				CROPS
			</div>
		</div>
	</div>
@endsection

@section('content')
<div class="b-clients-container">
<div class="p-row"> 
    @foreach($crops as $crops => $crop)
    <div class="p-column">
        <li class="pdf">
		<a href="/clients/{{ $crop['id'] }} ">
			<img src={{ $crop['cropimg'] }}>
             <div class="crop-details"> 
             {{ $crop['cropname'] }} 
            </div>
            <div class="crop-description"> 
             {{ $crop['cropqty'] }}kg
            </div>
        </a>
        </li>
    </div>
    @endforeach
</div>
@endsection

@section('bottomnav')
    @include('bottomnav');
@endsection