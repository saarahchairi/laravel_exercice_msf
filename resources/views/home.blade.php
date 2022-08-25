@extends('layout.index')

@section('content')
    <h1>Bienvenu sur la platforme de Molengeek</h1>
    <a href={{route('batiment')}}>
        <button>Bâtiment</button>
    </a>
    <a href={{route('formation')}}>
        <button>Formation</button>
    </a>
    <a href={{route('typeFormation')}}>
        <button>Type de formation</button>
    </a>
    <a href={{route('eleve')}}>
        <button>Elève</button>
    </a>
@endsection
