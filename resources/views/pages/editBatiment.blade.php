@extends('layout.index')

@section('content')
<h2>Nos Bâtiments</h2>
<div class="new">
    <h3>Mettre à jour les données</h3>
    <form action="/editBatiment/{{$id_show->id}}/update" method="POST">
        @csrf
        @method('PUT')
        <input type="text" name="nom" value={{$id_show->nom}}>
        <input type="text" name="description" value={{$id_show->description}}>
        <input type="submit" value="Editer">
    </form>
</div>
@endsection
