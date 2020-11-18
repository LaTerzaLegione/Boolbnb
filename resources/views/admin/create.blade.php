@extends('layouts.app')
@section('content')
@if ($errors->any())
<div class="alert alert-danger">
  <ul>
    @foreach ($errors->all() as $error)
    <li>{{ $error }}</li>
    @endforeach
  </ul>
</div>
@endif
<form action="{{route('apartments.store')}}" method="post" enctype="multipart/form-data" class="card col-5 mx-auto">
  @csrf
  @method('POST')
  <label for="titolo">Titolo:</label>
  <input type="text" name="titolo" placeholder="Inserisci il titolo" value="{{old('titolo')}}">
  @for ($i=0; $i < 5; $i++)
    <label for="img{{$i+1}}">Immagine di copertina</label>
    <input type="file" name="img{{$i+1}}" accept="image/*">
    @endfor
    <label for="descrizione">Descrizione:</label>
    <textarea name="descrizione" rows="8" cols="80" placeholder="Inserisci il testo">{{old('descrizione')}}</textarea>
    <label for="numero_stanze">N Stanze:</label>
    <input type="number" name="numero_stanze" placeholder="Inserisci il numero_stanze" value="{{old('numero_stanze')}}">
    <label for="numero_letti">N Letti:</label>
    <input type="number" name="numero_letti" placeholder="Inserisci il numero_letti" value="{{old('numero_letti')}}">
    <label for="numero_bagni">N Bagni:</label>
    <input type="number" name="numero_bagni" placeholder="Inserisci il numero_bagni" value="{{old('numero_bagni')}}">
    <label for="mq">Metri Quadrati:</label>
    <input type="number" name="mq" placeholder="Inserisci i metri Quadrati" value="{{old('mq')}}">
    {{-- fare check con algolia --}}

     <label for="indirizzo">Indirizzo:</label>
    <div id="app">
        <input-create-indirizzo>
        </input-create-indirizzo>
    </div>
      @foreach ($optionals as $optional)
         <label for="optional">{{$optional->nome}}</label>
         <input type="checkbox" name="optionals[]" value="{{$optional->id}}">
     @endforeach
 

    <input type="submit" class="btn btn-primary" value="Invia">
    <div>
      {{-- @foreach ($tags as $tag)
        <label for="tag">{{$tag->name}}</label>
      <input type="checkbox" name="tags[]" value="{{$tag->id}}">
      @endforeach --}}
    </div>
</form>
@endsection
