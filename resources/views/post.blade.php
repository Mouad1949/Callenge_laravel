<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <div>
    @foreach ($post as $item)
      <p>{{ $item->title }}</p>
      <p>{{ $item->content }}</p>
      <p>{{ $item->status }}</p>
    @endforeach
  </div>
</body>
</html>