<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>HOLA TROLA</h1>
<ul><li>martillo
thiago gay</li>
    <br>
    <li>bilome</li>
    <br>
<li> como juega el 10!</li>
<br>
<li> ¿ thiago le gustan travestis?</li>
<br>
<li>Como sabias?</li>
<ul>
    @foreach ($h as $x)
        <li>{{ $x ["nombre"] }} : {{$x["cantidad"]}}</li>

    @endforeach

</ul>
<ol>
   
</ol>
</ul>
</body>
</html>
