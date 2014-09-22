@extends("layout")

@section("page")
<div class="container">
    <h2>{{{ $job_post->title }}}</h2>
    <p>{{{ $job_post->description }}}</p>

    <a class="btn btn-default" href="{{ url("job_posts") }}">Back</a>
</div>
@stop