<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Fonts -->
    {{--
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> --}}
    {{-- <link href="{{ asset('zoom/style.css') }}" rel="stylesheet"> --}}
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->

    <style>
        .blogShort {
            border-bottom: 1px solid #ddd;
        }
        
        .add {
            background: #fff;
            padding: 10%;
            height: 300px;
        }
        
        .nav-sidebar {
            width: 100%;
            padding: 8px 0;
            border-right: 1px solid #ddd;
        }
        
        .nav-sidebar a {
            color: #333;
            -webkit-transition: all 0.08s linear;
            -moz-transition: all 0.08s linear;
            -o-transition: all 0.08s linear;
            transition: all 0.08s linear;
        }
        
        .nav-sidebar .active a {
            cursor: default;
            background-color: #34ca78;
            color: #fff;
        }
        
        .nav-sidebar .active a:hover {
            background-color: #37D980;
        }
        
        .nav-sidebar .text-overflow a,
        .nav-sidebar .text-overflow .media-body {
            white-space: nowrap;
            overflow: hidden;
            -o-text-overflow: ellipsis;
            text-overflow: ellipsis;
        }
        
        .btn-blog {
            color: #ffffff;
            background-color: #37d980;
            border-color: #37d980;
            border-radius: 0;
            margin-bottom: 10px
        }
        
        .btn-blog:hover,
        .btn-blog:focus,
        .btn-blog:active,
        .btn-blog.active,
        .open .dropdown-toggle.btn-blog {
            color: white;
            background-color: #34ca78;
            border-color: #34ca78;
        }
        
        h2 {
            color: #34ca78;
        }
        
        .margin10 {
            margin-bottom: 10px;
            margin-right: 10px;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="#">Zoom-Meeting</a>
            </div>
            <ul class="nav navbar-nav">
                <li class="active"><a href="{{ url('embed-zoom') }}">ZooM</a></li>
                <li><a href="#">Show All Meetings</a></li>
                <li><a href="#">Page 2</a></li>
                <li><a href="#">Page 3</a></li>
            </ul>
        </div>
    </nav>
    <div class="container">
        <div id="blog" class="row">

            <div class="col-sm-2 paddingTop20">
                <nav class="nav-sidebar">
                    <ul class="nav">
                        <li class="active">
                            <a href="javascript:;">
                                <span class="glyphicon glyphicon-star"></span> All meetings
                            </a>
                        </li>
                        <li><a href="javascript:;">Latest news</a></li>
                        <li><a href="javascript:;">Updates</a></li>
                        <li><a href="javascript:;">Training</a></li>
                        <li><a href="javascript:;">Nutrition</a></li>
                        <li class="nav-divider"></li>
                        <li><a href="javascript:;"><i class="glyphicon glyphicon-off"></i> Sign in</a></li>
                    </ul>
                </nav>
                <div>
                    <h2 class="add">.</h2>
                </div>
            </div>
            @foreach ($meetings as $meeting)
                <div class="col-md-10 blogShort">
                    <h1>{{ $meeting->topic }}</h1>
                    <img src="https://recruitingtimes.org/wp-content/uploads/2017/10/conduct-the-perfect-meeting.png" width="200" height="200" alt="post img" class="pull-left img-responsive thumb margin10 img-thumbnail">
                    <article>
                        @if (isset($meeting->agenda))
                            <p>{{  $meeting->agenda  }}</p>
                        @else
                            <span class="text-center text-danger">No Details with this meeting For Now :)</span>
                        @endif
                    </article>
                    <a class="btn btn-blog pull-right marginBottom10" href="{{ $meeting->join_url }}">Join to meeting now...</a>
                </div>
            @endforeach
            
            <div class="col-md-12 gap10"></div>
        </div>
    </div>

</body>

</html>



{{-- Client error: resulted in a `429 Too Many Requests` response: {"code":429,"message":"You have reached the maximum per-second rate limit for this API. Try again later."} --}}