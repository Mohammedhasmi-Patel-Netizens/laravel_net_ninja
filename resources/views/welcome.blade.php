<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
  @vite('resources/css/app.css')

</head>
<body>
    <div class="container">
        <h1>welcome to the ninja network</h1>
         <a href="{{route('ninjas.index')}}" class="btn">find all ninjas</a>
    </div>
</body>
</html>