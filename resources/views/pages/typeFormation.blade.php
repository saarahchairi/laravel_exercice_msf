@extends('layout.index')

@section('content')
<h2>Nos types de formation</h2>
<div class="new">
    <h3>Rajouter un type de formation</h3>
    <form action="/typeFormation/create" method="POST">
        @csrf
        <input type="text" name="nom" placeholder="Type de formation">
        <input type="submit" value="Rajouter">
    </form>
</div>
<div class="all">
    <h3>Types de formation actuels</h3>
    <table>
        <tr>
            <th>Type de formation</th>
        </tr>
        @foreach ($allTypeFormation as $item)
        <tr>
            <td>{{$item->nom}}</td>
            <td>
                <a href="/editTypeFormation/{{$item->id}}">
                    <button type="submit">Edit</button>
                </a>
            </td>
            <td>
                <form action="/typeFormation/{{$item->id}}/delete" method="POST">
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
