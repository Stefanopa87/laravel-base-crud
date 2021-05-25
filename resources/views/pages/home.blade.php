@extends('layouts.main')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-lg-12 text-center">

            <h1 class="bg-primary"> TUTTI GLI OSPITI:</h1>

            <ul style="list-style: none">

                @foreach ($ospiti as $ospite)
                <li>
                    <a href="{{route('ospite', $ospite -> id )}}">
                        [{{ $ospite -> id }}]
                        {{ $ospite -> name }}                       
                        {{ $ospite -> lastname }}                       
                    </a>
                </li>                    
                @endforeach

            </ul>
        </div>
    </div>
</div>
 
@endsection