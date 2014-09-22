@extends("layout")

@section("page")
<div class="container">
    <h2>Create Post</h2>

    {{ Form::open(array("url" => "/job_posts", "class" => "form-horizontal", "role" => "form")) }}

        @if (Session::has("message"))
        {{ Session::get("message") }}
        @endif

        @foreach ($errors->all() as $error)
        {{ $error }}<br>
        @endforeach

        <div class="form-group">
            <div class="col-xs-4">
                <label for="title">Title*</label>
                <input type="text" class="form-control" name="title" required>
            </div>
        </div>

        <div class="form-group">
            <div class="col-xs-4">
                <label for="description">Description*</label>
                <textarea class="form-control" name="description" rows="10" required></textarea>
            </div>
        </div>
        
        <div class="form-group">
            <div class="col-xs-4">
                <label for="email">Email*</label>
                <input type="email" class="form-control" name="email" placeholder="Ex.: johndoe@example.com" required>
            </div>
        </div>

        <div class="form-group">
            <div class="col-xs-4">
                <input class="btn btn-primary" type="submit" value="Save">
                <a class="btn btn-default" href="{{ url("job_posts") }}">Back</a>
            </div>
        </div>
    {{ Form::close() }}
</div>
@stop