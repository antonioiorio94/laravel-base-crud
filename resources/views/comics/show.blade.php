
<img src="{{$comic->thumb}}" alt="Comic Cover">
<h2>{{$comic->title}}</h2>
<p>{{$comic->description}}</p>
<p>{{$comic->price}}</p>
<p>{{$comic->series}}</p>
<p>{{$comic->sale_date}}</p>

<a href="{{route('comics.index')}}">Indietro</a>