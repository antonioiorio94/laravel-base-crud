@forelse($comics as $comic)
<div>
  <h3>{{$comic->title}}</h3>
  <h4>{{$comic->series}}</h4>
  <h4>{{$comic->price}}</h4>
  <a href="{{route('comics', $comic->id)}}">Visualizza dettagli</a>
</div>

@empty
  <h2>Nessun comic</h2>
@endforelse