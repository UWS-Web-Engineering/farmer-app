@extends ('layout')

@section('topnav')
    @include('topnav')
@endsection

@section('content')
    @foreach($clients as $clients => $client)
        <li class="pdf">
        <a href="/client">   
             <div class="client-container"> 
             <div class="a">
             {{ $client['name'] }} </div>
             <div class="b">
             {{ $client['weight'] }} 
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