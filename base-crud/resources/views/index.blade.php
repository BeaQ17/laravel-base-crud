<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Issues</title>
    </head>
    <body>
       

        @section('content')

            <div class="card">
                <section class="container">

                    @foreach ($issues as $issue)
                        <div class="issue">
                            <h1>{{$issue->title}}</h1>
                            <h2>{{$issue->issue_number}}</h2>
                            <img src="{{$issue->cover}}" alt="issue cover">
                            <p>{{$issue->publisher}} - {{$issue->year}}</p>
                            <p>Writer: {{$issue->writer}} - Colorist: {{$issue->colorist}}</p>
                            <hr>
                        </div>
                        
                    @endforeach

                </section>
            </div>
            
        @endsection

    </body>
</html>
