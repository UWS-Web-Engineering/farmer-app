@extends ('layout')

@section('topnav')
    @include('topnav')
@endsection

@section('content')
<div class="b-nav-spacer"></div>
    @foreach($clients as $clients => $client)
        <li class="pdf">
        <a href="/client">   
             <div class="client-container"> 
             <a class>
             {{ $client['name'] }} </a>
             <b class>
             {{ $client['weight'] }} 
            </b class>
            </div>
        </a>
        </li>
    @endforeach
</div>
<div class="b-nav-spacer"></div>
@endsection

@section('bottomnav')
    @include('bottomnav');
@endsection