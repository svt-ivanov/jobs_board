<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="description" content="jobs,board">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Job Board</title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <div class="navbar navbar-default navbar-static-top" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Jobs Board</a>
                </div>

                 <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li class="{{ Request::url() === url("/job_posts") ? 'active' : '' }}"><a href="{{ url("/job_posts") }}">Posts</a></li>
                    </ul>
                 </div>
            </div> <!-- container --> 
        </div> <!-- navbar -->
             
        <div class="container">
            <div class="jumbotron">
                <h1>Simple jobs board system example</h1>
                <p>This example is to illustrate basic knowledge on Laravel framework and PHP good programming practice.</p>
            </div>
        </div> <!-- container -->
        
        @yield("page")

    </body>
</html>