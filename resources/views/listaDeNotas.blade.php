@extends ('plantillas.plantilla')

@section('titulo', 'Inicio')

@section ('contenido')

@if(session('mensaje'))
    <div class="alert alert-success">
        {{session('mensaje')}}
    </div>
    @endif
<br>
<table class="table">
  <thead>
    <tr >
      <th scope="col" style="background-color: rgb(11, 128, 83);">N°</th>
      <th scope="col" style="background-color: rgb(11, 128, 83);">Título</th>
      <th scope="col" style="background-color: rgb(11, 128, 83);">Descripción</th>
      <th scope="col" style="background-color: rgb(11, 128, 83);">Categorías</th>
      <th scope="col" style="background-color: rgb(11, 128, 83);">Etiqueta</th>
      <th scope="col" style="background-color: rgb(11, 128, 83);">F.creada</th>
      <th scope="col" style="background-color: rgb(11, 128, 83); a"colspan="4">
      <a type="button" class="btn btn-primary" href="{{route('nota.crear')}}">Nueva Nota</a>
      <a type="button" class="btn btn-light" href="{{route('nota.categorias')}}">Ver categorías</a>
    </th>
    </tr>
  </thead>
  <tbody>
    @forelse($notas as $nota) 
    <tr>
      <th scope="row">{{$nota -> id}}</th>
      <td>{{$nota->titulo}}</td>
      <td>{{$nota-> descripcion}}</td>
      <td>
      @foreach($nota->categorias as $categoria)
       {{ $categoria->nombre_categoria }}
       @if(!$loop->last)
       ,
       @endif
      @endforeach
      </td>
      <td>-</td>
      <td>{{$nota->feche_creacion}}</td>
      <td>
      <div class="btn-group dropend" role="group" >
    <button type="button" class="btn btn-outline-success dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
      Opciones
    </button>
    <ul class="dropdown-menu" >
      <li><a class="dropdown-item " href="{{route('nota.ver', ['id'=>$nota->id])}}">Ver</a></li>
      <li><a class="dropdown-item" href="{{route('nota.edit', ['id'=>$nota->id])}}">Editar</a></li>
      <li>
        <form  method="post" action="{{route('nota.borrar', ['id'=> $nota ->id])}}">
        @csrf
        @method('delete')
        <input type="submit" value="eliminar" class="dropdown-item" style="color: red">
      </li>
        </form>
        
      
    </ul>
  </div>

      </td>
    </tr>

    @empty
    <tr>
      <td colspan="4">No hay Notas que mostrar</td>
    </tr>
    @endforelse
    
  </tbody>
</table>
<div class="pagination" style=" 
    padding: 1px 1px; 
    margin: 0 1px; 
    border: 1px solid #ccc;
    font-size: 12px;
    display: inline-block;">
    {{ $notas->links() }}
</div>


@endsection