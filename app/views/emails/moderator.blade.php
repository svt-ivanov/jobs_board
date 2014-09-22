<!DOCTYPE html>
<html lang="en-US">
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <h2>Job posting</h2>

        <p>
            It has been submitted job post on title: <br/>
            <strong>"{{ $title }}"</strong> <br/><br/>
          
            and description: <br/>
            {{ $description }} <br/><br/>

            from user: {{ $email }}
        </p>

        <p>
            <strong>Mark post as approved:</strong> <a href="{{ url("job_posts/$id/approve") }}">publish</a>
    
            <br/>
    
            <strong>Mark post as spam:</strong> <a href="{{ url("job_posts/$id/reject") }}">reject</a>
        </p>

        <hr/>
        <p>Kind regards <br/>
           Jobs Board Team</p>
    </body>
</html>