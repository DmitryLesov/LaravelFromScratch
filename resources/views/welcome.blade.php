<!doctype html>
<html>
<head>

    <title>xui</title>

</head>
<body>
<div>
    <ul>
        @foreach($tasks as $task)
            <li>{{$task}}</li>p
        @endforeach
    </ul>
</div>
</body>
</html>
