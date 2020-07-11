<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$title}} -- @yield('title','base title')</title>
</head>
<body>
base
@section('sidebar')
    <div>
        <ul>
            <li>首页导航</li>
        </ul>
    </div>
@show
<div class="container">
    @yield('main')
</div>
</body>
</html>
