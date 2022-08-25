@extends('layout.index')

@section('content')
<h2>Nos élèves</h2>
<div class="new">
    <h3>Mettre à jour les données</h3>
    <form action="/editEleve/{{$id_show->id}}/update" method="POST">
        @csrf
        @method('PUT')
        <input type="text" name="nom" value={{$id_show->nom}}>
        <input type="text" name="prenom" value={{$id_show->prenom}}>
        <input type="number" name="age" value={{$id_show->age}}>
        <input type="text" name="etat" value={{$id_show->etat}}>
        <input type="submit" value="Editer">
    </form>
</div>
@endsection
