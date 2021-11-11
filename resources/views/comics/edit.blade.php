@extends('layout.base')

@section('PageContent')
    <h1>Modifica il prodotto: {{$comic["title"]}}</h1>

    <form action="{{route("comics.update", $comic["id"])}}" method="POST">
        @csrf
        @method("PUT")

        <div class="form-group">
          <label for="title">Titolo</label>
          <input type="text" class="form-control" id="title" name="title" placeholder="Inserisci il titolo" value="{{$comic["title"]}}">
        </div>

        <div class="form-group">
            <label for="description">Descrizione</label>
            <textarea class="form-control"  name="description" id="description" cols="30" rows="10" placeholder="Inserisci la descrizione">{{$comic["description"]}}</textarea>
        </div>

        <div class="form-group">
          <label for="thumb">Url immagine</label>
          <input type="text" class="form-control" id="thumb" name="thumb" placeholder="Inserisci l'url" value="{{$comic["thumb"]}}">
        </div>

        <div class="form-group">
            <label for="price">Prezzo</label>
            <input type="number" class="form-control" id="price" name="price" placeholder="Inserisci il prezzo" step=".01" value="{{$comic["price"]}}">
        </div>

        <div class="form-group">
            <label for="series">Serie</label>
            <input type="text" class="form-control" id="series" name="series" placeholder="Inserisci la serie" value="{{$comic["series"]}}">
        </div>

        <div class="form-group">
            <label for="sale_date">Data pubblicazione</label>
            <input type="date" class="form-control" id="sale_date" name="sale_date" placeholder="Inserisci la data di pubblicazione" value="{{$comic["sale_date"]}}">
        </div>

        <div class="form-group">
            <label for="type">Tipo di Fumetto</label>
            <input type="text" class="form-control" id="type" name="type" placeholder="Inserisci il tipo di Fumetto" value="{{$comic["type"]}}">
        </div>

        <button type="submit" class="btn btn-primary">Modifica</button>
    </form>
@endsection