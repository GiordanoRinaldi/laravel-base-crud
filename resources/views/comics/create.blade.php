@extends('layout.base')

@section('PageContent')
    <h1>Inserisci un nuovo Fumetto</h1>

    <form action="{{route("comics.store")}}" method="POST">
        @csrf

        <div class="form-group">
            <label for="title">Titolo</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" placeholder="Inserisci il titolo"  value="{{old("title")}}">

            @error('title')
                <div class="alert alert-danger mt-3">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="description">Descrizione</label>
            <textarea class="form-control @error('description') is-invalid @enderror"  name="description" id="description" cols="30" rows="10" placeholder="Inserisci la descrizione">{{old("description")}}</textarea>

            @error('description')
                <div class="alert alert-danger mt-3">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
          <label for="thumb">Url immagine</label>
          <input type="text" class="form-control @error('thumb') is-invalid @enderror" id="thumb" name="thumb" placeholder="Inserisci l'url" value="{{old("thumb")}}">

          @error('thumb')
                <div class="alert alert-danger mt-3">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="price">Prezzo</label>
            <input type="number" class="form-control @error('price') is-invalid @enderror" id="price" name="price" placeholder="Inserisci il prezzo" step=".01" value="{{old("price")}}">

            @error('price')
                <div class="alert alert-danger mt-3">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="series">Serie</label>
            <input type="text" class="form-control @error('series') is-invalid @enderror" id="series" name="series" placeholder="Inserisci la serie" value="{{old("series")}}">

            @error('series')
                <div class="alert alert-danger mt-3">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="sale_date">Data pubblicazione</label>
            <input type="date" class="form-control @error('sale_date') is-invalid @enderror" id="sale_date" name="sale_date" placeholder="Inserisci la data di pubblicazione" value="{{old("sale_date")}}">

            @error('sale_date')
                <div class="alert alert-danger mt-3">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="type">Tipo di Fumetto</label>
            <input type="text" class="form-control @error('type') is-invalid @enderror" id="type" name="type" placeholder="Inserisci il tipo di Fumetto" value="{{old("type")}}">

            @error('type')
                <div class="alert alert-danger mt-3">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Crea</button>
    </form>

@endsection