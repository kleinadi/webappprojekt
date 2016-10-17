<!DOCTYPE html>
<html lang="en">
<head>
    <title>Laravel Quickstart - Basic</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/code.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>

<!-- NAVBAR -->
<nav class="navbar navbar-default darkbar" role="navigation">
    <div class="navbar-header">
        <a class="navbar-brand" href="http://lineup.dev">
            <img id="lineuplogo" alt="Brand" src="img/lineuplogo.png">
        </a>

        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#example-navbar-collapse" style="border-color: gray; margin-top: 18px;">
            <span class = "icon-bar"></span>
            <span class = "icon-bar"></span>
            <span class = "icon-bar"></span>
        </button> 
    </div>
   
    <div class = "collapse navbar-collapse" id = "example-navbar-collapse">
        <ul class = "nav navbar-nav navbar-right">
            <li><a href="/home">Home</a></li>
            <li><a href="/settings">Settings</a></li>
            <li>
                <a href="{{ url('/logout') }}"
                    onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                    Logout
                </a>

                <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
            </li>
        </ul>
   </div>
</nav>

<!-- INFOBAR -->
<div class="infobar">
        You are logged in as: {{ Auth::user()->name }}
</div>

<!-- OVER CONTAINER -->
<div class="container-fluid" id="overcontainer">
    <div class="row">
        <div class="col-sm-5 timer">
            21:22

        </div>
        <div class="col-sm-2 hidden-xs">
            <div id="timePentagon">
            2016<br />
            2017
            </div>
        </div>
        <div class="col-sm-5 datum">
        14.10.2016
        </div>
    </div>
</div>

<!-- UNDER CONTAINER -->
<div class="container-fluid" id="undercontainer">

    @yield('content')

</div>

</body>
</html>