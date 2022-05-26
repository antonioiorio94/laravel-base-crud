<form action="{{route('comics.store')}}" method="POST">
@csrf

<div>
    <label for="title">Titolo:</label>
    <input type="text" name="title"/>
</div>

<div>
    <textarea name="description">Descrizione:</textarea>
</div>

<div>
    <label for="thumb">Copertina URL:</label>
    <input type="text" name="thumb"/>
</div>


<div>
    <label for="price">Prezzo:</label>
    <input type="text" name="price"/>
</div>



<button type="submit">Salva</button>

</form>
