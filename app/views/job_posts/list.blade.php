@extends("layout")

@section("page")
<div class="container">
    <h2>Job Posts</h2>
    <ul>
    @foreach ($job_posts as $job_post)    
    <li>
        <a href="{{ url("job_posts/$job_post->id") }}">{{{ $job_post->title }}}</a>
    </li>
    @endforeach
    </ul>

    <div><a class="btn btn-primary" href="{{ url("job_posts/create") }}">Post Job</a></div>
</div>
@stop