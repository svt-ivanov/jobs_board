@extends("layout")

@section("page")
<div class="container">
    @foreach ($errors->all() as $error)
    {{ $error }}<br>
    @endforeach

    @if ($approved)
        <p>
            Job post with ID: <em>{{ $id }}</em> has been published.<br/>
            <a href="{{ url("job_posts/$id") }}">Go to post</a>
        </p>
    @else
        <p>Job post with ID: <em>{{ $id }}</em> has been rejected.</p>
    @endif

    <a href="{{ url("job_posts") }}">Back</a>
</div>
@stop