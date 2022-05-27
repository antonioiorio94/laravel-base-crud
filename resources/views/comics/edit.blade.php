<form action="{{route('comics.update', $comic)}}" method="POST">
    @csrf
    @method('PUT')

    <div>
        <label for="title">Titolo:</label>
        <input type="text" name="title" value="{{$comic->title}}"/>
    </div>

    <div>
        <textarea name="description" >{{$comic->description}}</textarea>
    </div>

    <div>
        <label for="thumb">Copertina URL:</label>
        <input type="text" name="thumb" value="{{$comic->thumb}}"/>
    </div>


    <div>
        <label for="price">Prezzo:</label>
        <input type="text" name="price" value="{{$comic->price}}"/>
    </div>

    <div>
        <label for="type">Tipo:</label>
        <input type="text" name="type" value="{{$comic->type}}"/>
    </div>

    <div>
        <label for="series">Serie:</label>
        <input type="text" name="series" value="{{$comic->series}}"/>
    </div>

    <div>
        <label for="sale_date">Data:</label>
        <input type="date" name="sale_date" value="{{$comic->sale_date}}"/>
    </div>



    <button type="submit">Salva</button>

    </form>
