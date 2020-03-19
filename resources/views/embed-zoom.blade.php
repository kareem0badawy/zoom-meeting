<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Fonts -->
        <link href="{{ asset('zoom/style.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        {{-- <style type="text/css">
           
        </style> --}}
    </head>

    <body>
        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
              <div class="navbar-header">
                <a class="navbar-brand" href="#">Zoom-Meeting</a>
              </div>
              <ul class="nav navbar-nav">

                <li class="{{ Request::segment(1) === 'embed-zoom' ? 'active' : null }}">
                    <a href="{{ url('embed-zoom' )}}" ></i> ZooM</a>
                </li>

                <li class="{{ Request::segment(1) === 'meetings-list' ? 'active' : null }}">
                    <a href="{{ url('meetings-list' )}}" ></i>Show All Meetings</a>
                </li>
                <li><a href="#">Page 2</a></li>
              </ul>
            </div>
        </nav>

        <div id="content">
            <iframe width="100%" height="100%" allow="microphone; camera"  src="https://us04web.zoom.us/meeting" frameborder="0"></iframe>
        </div>
    </body>
</html>
