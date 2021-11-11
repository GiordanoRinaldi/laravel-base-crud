@extends('layout.base')

@section('PageContent')
<h1 class="text-center">Lista fumetti Presenti</h1>
<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Titolo</th>
        <th scope="col">Serie</th>
        <th scope="col">Data Pubblicazione</th>
        <th scope="col">Prezzo</th>
        <th scope="col">Visualizza</th>
        <th scope="col">Modifica</th>
      </tr>
    </thead>
    <tbody>
    @foreach ($comics as $comic)
        <tr>
            <th scope="row">{{$comic["id"]}}</th>
            <td>{{$comic["title"]}}</td>
            <td>{{$comic["series"]}}</td>
            <td>{{$comic["sale_date"]}}</td>
            <td>{{$comic["price"]}}</td>
            <td><a href="{{route("comics.show", $comic->id)}}"><button type="button" class="btn btn-primary">Apri</button></a></td>
            <td><a href="{{route("comics.edit", $comic->id)}}"><button type="button" class="btn btn-warning">Modifica</button></a></td>
        </tr>
    @endforeach
    </tbody>
  </table>
@endsection