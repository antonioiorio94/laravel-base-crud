<form action="{{route('comics.store')}}" method="POST">
@csrf

<label for="title">Titolo:</label>
<input type="text" name="title"/>

<button type="submit">Salva</button>

</form>
