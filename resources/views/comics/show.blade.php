@extends('layout.base')

@section('PageContent')
<div class="text-center">
    <h1>{{$comic["title"]}}</h1>
    <h2>Dalla serie: {{$comic["series"]}}</h2>
    <div class="img m-auto">
        <img src="{{$comic["thumb"]}}" alt="{{$comic["title"]}}">
    </div>
    <h3>{{$comic["type"]}}</h3>
    <h4>Prezzo: {{$comic["price"]}} EUR</h4>
    <p>{{$comic["description"]}}</p>
    <h5>Rilasciato il: {{$comic["sale_date"]}}</h5>
</div>
    

@endsection
