@extends('layout.index')

@section('content')
<h2>Nos élèves</h2>
<div class="new">
    <h3>Rajouter un élève</h3>
    <form action="/eleve/create" method="POST">
        @csrf
        <input type="text" name="nom" placeholder="Nom de l'élève">
        <input type="text" name="prenom" placeholder="Prénom de l'élève">
        <input type="number" name="age" placeholder="Âge de l'élève">
        <input type="text" name="etat" placeholder="Etat de l'élève">
        <input type="submit" value="Rajouter">
    </form>
</div>
<div class="all">
    <h3>Eleves actuels</h3>
    <table>
        <tr>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Age</th>
            <th>Etat</th>
        </tr>
        @foreach ($allEleve as $item)
        <tr>
            <td>{{$item->nom}}</td>
            <td>{{$item->prenom}}</td>
            <td>{{$item->age}}</td>
            <td>{{$item->etat}}</td>
            <td>
                <a href="/editEleve/{{$item->id}}">
                    <button type="submit">Edit</button>
                </a>
            </td>
            <td>
                <form action="/eleve/{{$item->id}}/delete" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</div>
@endsection
