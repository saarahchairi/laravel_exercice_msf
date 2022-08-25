@extends('layout.index')

@section('content')
<h2>Nos types de formation</h2>
<div class="new">
    <h3>Mettre à jour les données</h3>
    <form action="/editTypeFormation/{{$id_show->id}}/update" method="POST">
        @csrf
        @method('PUT')
        <input type="text" name="nom" value={{$id_show->nom}}>
        <input type="submit" value="Editer">
    </form>
</div>
@endsection
