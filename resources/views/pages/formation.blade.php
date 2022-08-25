@extends('layout.index')

@section('content')
<h2>Nos formations</h2>
<div class="new">
    <h3>Rajouter une fromation</h3>
    <form action="/formation/create" method="POST">
        @csrf
        <input type="text" name="nom" placeholder="Nom de la formation">
        <input type="text" name="description" placeholder="Description de la formation">
        <input type="submit" value="Rajouter">
    </form>
</div>
<div class="all">
    <h3>Formations actuels</h3>
    <table>
        <tr>
            <th>Nom de la formation</th>
            <th>Description de la formation</th>
        </tr>
        @foreach ($allFormation as $item)
        <tr>
            <td>{{$item->nom}}</td>
            <td>{{$item->descritpion}}</td>
            <td>
                <a href="/editFormation/{{$item->id}}">
                    <button type="submit">Edit</button>
                </a>
            </td>
            <td>
                <form action="/formation/{{$item->id}}/delete" method="POST">
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
