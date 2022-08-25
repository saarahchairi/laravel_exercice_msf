@extends('layout.index')

@section('content')
    <h2>Nos bâtiments</h2>
    <div class="new">
        <h3>Rajouter un bâtiment</h3>
        <form action="/batiment/create" method="POST">
            @csrf
            <input type="text" name="nom" placeholder="Nom du bâtiment">
            <input type="text" name="description" placeholder="Description du lieu">
            <input type="submit" value="Rajouter">
        </form>
    </div>
    <div class="all">
        <h3>Bâtiments actuels</h3>
        <table>
            <tr>
                <th>Nom du bâtiment</th>
                <th>Description du lieu</th>
            </tr>
            @foreach ($allBatiment as $item)
            <tr>
                <td>{{$item->nom}}</td>
                <td>{{$item->descritpion}}</td>
                <td>
                    <a href="/editBatiment/{{$item->id}}">
                        <button type="submit">Edit</button>
                    </a>
                </td>
                <td>
                    <form action="/batiment/{{$item->id}}/delete" method="POST">
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
