@extends ('plantillas.plantilla')

@section('titulo', 'Nota única')

@section('contenido')

<br>
<a class="btn btn-warning" href="{{route('notas.index')}}">Volver</a>
<a class="btn btn-success" href="{{route('nota.crear')}}">Nueva nota</a>


<br><h1>Vista previa de la nota</h1><br>

<div class="card" style="width: 100%; 
background-color:rgb(255, 251, 190);">
  <div class="card-body">
  <h6 class="card-subtitle mb-2 text-body-secondary" >Nota°: {{$nota->id}}</h6>
  <h4 class="card-title" style="text-align: center;" >Título:</h4>
  <h1 class="card-title" style="text-align: center;" >{{$nota -> titulo}}</h1>
    <h6 class="card-subtitle mb-2 text-body-secondary" >Categoría: Pendiente</h6>
    </div>
</div>

<div class="card" style="width: 100%; 
background-color:rgb(255, 251, 190);">
  <div class="card-body">
    <h5 class="card-text" > <em>{{$nota->descripcion}}</em></h5>
    <br><br><br><br><br>
    <a class="btn btn-outline-secondary" href="{{route('nota.edit', ['id'=>$nota->id])}}">Editar</a>
  </div>
</div>
<br>
<p></p>



    




@endsection