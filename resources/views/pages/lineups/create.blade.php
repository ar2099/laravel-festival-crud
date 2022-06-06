@extends('layouts.layout')

@section('content')

<div>

<h1>

Aggiungi gruppo musicale

</h1>

<form action="{{route ('lineups.store')}}" *merthod*="POST">

@csrf

<div>

<div>

<label for="nome-gruppo">Nome Gruppo</label>

<input type="text" *id*="nome-gruppo" *name*="nome-gruppo">

</div>

<div>

<label for="nome-gruppo"></label>

<input type="text" id="nome-gruppo" name="nome-gruppo">

</div>

<div>

<label *for*="traccia">Traccia Musicale</label>

<input *type*="text" *id*="traccia" *name*="traccia">

</div>

<div>

<label *for*="genere">Genere Musicale</label>

<input *type*="text" *id*="genere" *name*="genere">

</div>

<div>

<label *for*="data">Data Esibizione</label>

<input *type*="text" *id*="data" *name*="data">

</div>

<div>

<label *for*="orario">Orario Esibizione</label>

<input *type*="text" *id*="orario" *name*="orario">

</div>

<div>

<button *type*="submit">Invia dati</button>

</div>

</div>

</form>

</div>