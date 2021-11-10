@extends('layout.base')

@section('PageContent')
    <h1>Inserisci un nuovo Fumetto</h1>

    <form action="{{route("comics.store")}}" method="POST">
        @csrf

        <div class="form-group">
          <label for="title">Titolo</label>
          <input type="text" class="form-control" id="title" name="title" placeholder="Inserisci il titolo">
        </div>

        <div class="form-group">
            <label for="description">Descrizione</label>
            <textarea class="form-control"  name="description" id="description" cols="30" rows="10" placeholder="Inserisci la descrizione"></textarea>
        </div>

        <div class="form-group">
          <label for="thumb">Url immagine</label>
          <input type="text" class="form-control" id="thumb" name="thumb" placeholder="Inserisci l'url">
        </div>

        <div class="form-group">
            <label for="price">Prezzo</label>
            <input type="number" class="form-control" id="price" name="price" placeholder="Inserisci il prezzo" step=".01">
        </div>

        <div class="form-group">
            <label for="series">Serie</label>
            <input type="text" class="form-control" id="series" name="series" placeholder="Inserisci la serie">
        </div>

        <div class="form-group">
            <label for="sale_date">Data pubblicazione</label>
            <input type="date" class="form-control" id="sale_date" name="sale_date" placeholder="Inserisci la data di pubblicazione">
        </div>

        <div class="form-group">
            <label for="type">Tipo di Fumetto</label>
            <input type="text" class="form-control" id="type" name="type" placeholder="Inserisci il tipo di Fumetto">
        </div>

        <button type="submit" class="btn btn-primary">Crea</button>
    </form>
@endsection