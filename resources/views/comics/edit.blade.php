@extends('layout.base')

@section('PageContent')
    <h1>Modifica il prodotto: {{$comic["title"]}}</h1>

    <form action="{{route("comics.update", $comic["id"])}}" method="POST">
        @csrf
        @method("PUT")

        <div class="form-group">
            <label for="title">Titolo</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Inserisci il titolo" value="{{old("title") ? old("title") : $comic["title"]}}">

            @error('title')
                <div class="alert alert-danger mt-3">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="description">Descrizione</label>
            <textarea class="form-control"  name="description" id="description" cols="30" rows="10" placeholder="Inserisci la descrizione">{{old("description") ? old("description") : $comic["description"]}}</textarea>

            @error('description')
                <div class="alert alert-danger mt-3">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
          <label for="thumb">Url immagine</label>
          <input type="text" class="form-control" id="thumb" name="thumb" placeholder="Inserisci l'url" value="{{old("thumb") ? old("thumb") : $comic["thumb"]}}">

            @error('text')
                <div class="alert alert-danger mt-3">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="price">Prezzo</label>
            <input type="number" class="form-control" id="price" name="price" placeholder="Inserisci il prezzo" step=".01" value="{{old("price") ? old("price") : $comic["price"]}}">

            @error('price')
                <div class="alert alert-danger mt-3">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="series">Serie</label>
            <input type="text" class="form-control" id="series" name="series" placeholder="Inserisci la serie" value="{{old("series") ? old("series") : $comic["series"]}}">

            @error('series')
                <div class="alert alert-danger mt-3">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="sale_date">Data pubblicazione</label>
            <input type="date" class="form-control" id="sale_date" name="sale_date" placeholder="Inserisci la data di pubblicazione" value="{{old("sale_date") ? old("sale_date") : $comic["sale_date"]}}">

            @error('sale_date')
                <div class="alert alert-danger mt-3">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="type">Tipo di Fumetto</label>
            <input type="text" class="form-control" id="type" name="type" placeholder="Inserisci il tipo di Fumetto" value="{{old("type") ? old("type") : $comic["type"]}}">

            @error('type')
                <div class="alert alert-danger mt-3">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Modifica</button>
    </form>
@endsection