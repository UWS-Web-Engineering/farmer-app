@extends ('layout')

@section('topnav')
    @include('topnav')
@endsection

@section('content')
    @foreach($officers as $officers => $officer)
        <li class="pdf">
        <a href="/client/{{ $officer['id'] }}">   
             <div class="client-container"> 
             <div class="a">
             {{ $officer['companyname'] }} </div>
             <div class="b">
             {{ $officer['cropqty'] }}kg 
            </div>
            </div>
        </a>
        </li>
    @endforeach
</div>

@endsection

@section('bottomnav')
    @include('bottomnav');
@endsection