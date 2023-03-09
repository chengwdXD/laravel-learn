<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h2>index~~~</h2>
    <br>
    <?php
// dd($data);
    ?>
 
    {{-- <h1>hello, {{$data['name']}}-{{$data['age']}}歲</h1>
    <a href="{{route('excel')}}">excel~~~</a> --}}
@foreach ($data as $item)
    <p>{{$item['name']}}-{{$item['moblie']}}</p>
@endforeach


</body>
</html>