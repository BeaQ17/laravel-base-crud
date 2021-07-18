@section('content')

<div class="card">
    <section class="container">

        @foreach ($issues as $issue)
            <div class="issue">
                <h1>{{$issue->title}}</h1>
                <h2>{{$issue->issue_number}}</h2>
                <p>{{$issue->publisher}} - {{$issue->year}}</p>
                <p>Writer: {{$issue->writer}} - Colorist: {{$issue->colorist}}</p>
                <hr>
            </div>
            
        @endforeach

    </section>
</div>
    
@endsection