
<img src="{{$comic->thumb}}" alt="Comic Cover">
<h2>{{$comic->title}}</h2>
<p>{{$comic->description}}</p>
<p>{{$comic->price}}</p>
<p>{{$comic->series}}</p>
<p>{{$comic->sale_date}}</p>

<form method="POST" action="{{route('comics.destroy', $comic)}}">
    @csrf
    @method('DELETE')

    <button type="submit" value="Elimina">Elimina</button>


</form>

<a href="{{route('comics.index')}}">Indietro</a>
<a href="{{route('comics.edit', $comic)}}">Modifica</a>
