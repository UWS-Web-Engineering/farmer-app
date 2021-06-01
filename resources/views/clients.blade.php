@extends ('layout')

@section('topnav')
    @include('topnav')
@endsection

@section('content')
    @foreach($clients as $clients => $client)
        <li class="pdf">
        <a href="/officers">   
             <div class="client-container"> 
             <div class="a">
             {{ $client['companyname'] }} </div>
             <div class="b">
             {{ $client['weight'] }}kg 
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