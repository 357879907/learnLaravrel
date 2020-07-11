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
{{--
    $errors 是系统默认的变量，存储表单验证错误信息
    $errors->any() 如果有错误信息，则为true
    $errors->all() 获取所有的错误信息
--}}
@if($errors->any())
    <div>
        <ul>
    @foreach($errors->all() as $error)
        <li>{{$error}}</li>
    @endforeach
        </ul>
    </div>
@endif
<form action="/form/recive" method="post">
    @csrf
{{--    old() 记入之前提交的数据--}}
    用户名：<input type="text" name="username" value="{{old('username')}}">
    密码：<input type="password" name="password">
    确认密码：<input type="password" name="password_confirmation">
    <button type="submit">提交</button>
</form>
</body>
</html>
