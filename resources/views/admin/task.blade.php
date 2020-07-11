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
    @if($num >20)
        num 大于20
    @elseif($num > 10)
        num 大于 10
    @else
        num 小于10
    @endif
    @unless($num > 20)
        num 小于20
    @endunless
    @isset($num)
        变量存在
    @endisset
    @empty($num1)
        变量为空
    @endempty
    @switch($num)
        @case(1)
            num=1
            @break
        @case(19)
            num=19
            @break
        @default
            值不对
    @endswitch
<br>
@for($i=0;$i<=10;$i++)
    {{$i}}--
@endfor
<br>
@foreach($obj as $key=>$value)
    @if($loop->first)
        [第一次];
    @endif
    总次数：{{$loop->count}};
    @if($loop->last)
        [最后一次];
    @endif
    {{$value}}
@endforeach
@while($num>0)

    {{$num--}}--
@endwhile
</body>
</html>
