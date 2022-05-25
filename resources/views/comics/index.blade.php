<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/app.css">
  <title>Document</title>
</head>
<body>

<div class="container">
@forelse($comics as $comic)
<div class="card">
<img src="{{$comic->thumb}}" alt="Comic Cover">
  <h3>{{$comic->title}}</h3>
  <h4>{{$comic->series}}</h4>
  <h4>{{$comic->price}}$</h4>
  <button>
  <a href="{{route('comics.show', $comic->id)}}">Visualizza dettagli</a>
  </button>
  
</div>

@empty
  <h2>Nessun comic</h2>
@endforelse
</div>

</body>
</html>


