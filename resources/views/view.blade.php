<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="/form" method="post">
    @csrf
    <input type="checkbox" name="select[]" value="11">
    <input type="checkbox" name="select[]" value="12">
    <input type="checkbox" name="select[]" value="13">
    <input type="submit" value="提交">
</form>
</body>
</html>
