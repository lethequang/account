<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>account</title>
    <!-- Latest compiled and minified CSS & JS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <script src="//code.jquery.com/jquery.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</head>
<body>
<div class="container">
    <div class="row">
        <img src="http://mail.web.test/setcookie?id={{ Session::getId() }}" style="display:none;" />
        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#"> HI {{ Auth::user()->name .' '}}</a>
                </div>
                <ul class="nav navbar-nav">
                    <li class=""><a href="{{ route('get-session') }}">GetSS</a></li>
                    <li class="active"><a href="{{ route('logout') }}">Logout</a></li>
                </ul>
            </div>
        </nav>
    </div>
</div>
</body>
</html>