@extends('layout.app')

@section('content')

    <div class="card">
        <section class="container">

            <div class="issue">
                <h1>{{$issue->title}}</h1>
                <h2>{{$issue->issue_number}}</h2>
                <img src="{{$issue->cover}}" alt="issue cover">
                <p>{{$issue->publisher}} - {{$issue->year}}</p>
                <p>Writer: {{$issue->writer}} - Colorist: {{$issue->colorist}}</p>
                <hr>
            </div>

        </section>
    </div>
            
 @endsection