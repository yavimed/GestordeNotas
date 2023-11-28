@extends ('plantillas.plantilla')

@section('titulo', 'formulario')

@section('contenido')

@if($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach
    </ul>
</div>
@endif

<h1 style="text-align: center;">Nota</h1>

<form method="post" action="">
    @csrf
    <div class="mb-3">
        <h4 class="card-title" id="titulo">Título:</h4>
        <input id="tituloInput" style="background-color:rgb(255, 251, 190)" type="text" class="form-control" name="titulo" placeholder="Título de la nota" value="{{ old('titulo', $nota->titulo ?? '') }}">
    </div>

    <div class="mb-3">
        <h4 class="card-title" id="contenidoTitulo">Agregar el contenido:</h4>
        <input id="contenidoInput" style="height:150px; background-color:rgb(255, 251, 190);" type="text" class="form-control" name="descripcion" placeholder="Empieza a editar la nota" value="{{ old('descripcion', $nota->descripcion ?? '') }}">
    </div>

    <select class="form-select form-select-sm" aria-label="Small select example" onchange="cambiarColor()">
        <option selected>Elije un color de nota (predeterminado sin color)</option>
        <option value="1">Amarillo</option>
        <option value="2">Rojo suave</option>
        <option value="3">Verde claro</option>
        <option value="4">Azul pastel</option>
        <option value="5">Morado lila suave</option>
    </select><br>

    <button type="submit" class="btn btn-success">Crear</button>
    <input type="reset" class="btn btn-danger" value="Deshacer">
    <a class="btn btn-warning" href="{{route('notas.index')}}">Volver</a>

  </form>


<script>
    function cambiarColor() {
        var colorSeleccionado = document.querySelector('select').value;

        // Cambiar el color del título
        var titulo = document.getElementById('titulo');
        switch (colorSeleccionado) {
            case '1':
                titulo.style.backgroundColor = 'yellow';
                break;
            case '2':
                titulo.style.backgroundColor = 'lightcoral';
                break;
            case '3':
                titulo.style.backgroundColor = 'lightgreen';
                break;
            case '4':
                titulo.style.backgroundColor = 'lightskyblue';
                break;
            case '5':
                titulo.style.backgroundColor = 'lavender';
                break;
            default:
                titulo.style.backgroundColor = ''; // Restablecer a color por defecto si no se elige ningún color
                break;
        }

        // Cambiar el color del contenido
        var contenidoTitulo = document.getElementById('contenidoTitulo');
        var contenidoInput = document.getElementById('contenidoInput');
        switch (colorSeleccionado) {
            case '1':
                contenidoTitulo.style.backgroundColor = 'yellow';
                contenidoInput.style.backgroundColor = 'yellow';
                break;
            case '2':
                contenidoTitulo.style.backgroundColor = 'lightcoral';
                contenidoInput.style.backgroundColor = 'lightcoral';
                break;
            case '3':
                contenidoTitulo.style.backgroundColor = 'lightgreen';
                contenidoInput.style.backgroundColor = 'lightgreen';
                break;
            case '4':
                contenidoTitulo.style.backgroundColor = 'lightskyblue';
                contenidoInput.style.backgroundColor = 'lightskyblue';
                break;
            case '5':
                contenidoTitulo.style.backgroundColor = 'lavender';
                contenidoInput.style.backgroundColor = 'lavender';
                break;
            default:
                contenidoTitulo.style.backgroundColor = ''; // Restablecer a color por defecto si no se elige ningún color
                contenidoInput.style.backgroundColor = '';
                break;
        }
    }
</script>







@endsection