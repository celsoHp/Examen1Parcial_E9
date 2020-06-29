@extends('layouts.app')
@section('content')

<table class="table">
    <thead>
      <tr>
        <th><abbr title="Position">Id</abbr></th>
        <th><abbr title="Played">Nombre</abbr></th>
        <th><abbr title="Won">Descripción</abbr></th>
        <th><abbr title="Won">Proveedor</abbr></th>
        <th><abbr title="Drawn">color</abbr></th>
      </tr>
    </thead>

    <tbody>
         @foreach ($modelos as $model)
         
            <tr>
                <td>{{ $model->id }}</td>
                <td>{{ $model->Modelo }}</td>
                <td>{{ $model->description }}</td>
                <td>{{ $model->Proveedor }}</td>
                <td>{{ $model->color }}</td>

                <td> 
<button class="button is-link is-active">Eliminar</button>
<button class="button is-danger is-active">Actualizar</button>
                </td>
        
            </tr>    

        @endforeach
        
    </tbody>
  </table>
@stop