@extends('Admin.Home22')
@section('content')

    <div class="content-wrapper"style="background: #000000" >
        <div class="container" style="color:#f6f6f6;" >

            <h1 class="text-center" >News</h1>

            <ul>

        @foreach($student as $students)
    <li>
                <div>
             <h2 class="text-left">{{$students->Name}}</h2>
             <p class="text-right"> {{$students->Date}}</p>
            <p class="text-justify">{{$students->Description}}</p>

         </div>
    </li>
            @endforeach
        </div>

        </div>


@endsection
