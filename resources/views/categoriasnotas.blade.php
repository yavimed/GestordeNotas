@extends ('plantillas.plantilla')

@section('titulo', 'categorias')

@section('contenido')
<br>
<a class="btn btn-warning" href="{{route('notas.index')}}">Volver</a>

<h1>Notas categorizadas</h1>
<br>

@foreach($categoriasConNotas as $categoria)
    
    <ul>
        @foreach($categoria->notas as $nota)
            <h3>Nota nombre: <em>{{ $nota->titulo }}</em></h3>
        <h5>Sus categorias son:</h5>
        @endforeach


    <li><p>{{ $categoria->nombre_categoria }}</p> </li>    </ul>
@endforeach



@endsection