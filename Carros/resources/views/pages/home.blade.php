@extends('layouts.app')
@section('content')
 
<table class="table">
    <thead>
      <tr>
        <th><abbr title="Position">Id</abbr></th>
        <th><abbr title="Played">Nombre</abbr></th>
        <th><abbr title="Won">Descripción</abbr></th>
        <th><abbr title="Drawn">Costo</abbr></th>
      </tr>
    </thead>
    <tbody>
         @foreach ($cliente as $client)
         
            <tr>
                <td>{{ $client->id }}</td>
                <td>{{ $client->nombre }}</td>
                <td>{{ $client->Apaterno }}</td>
                <td>{{ $client->Amaterno }}</td>
                <td>{{ $client->matricula }}</td>
            </tr>    

        @endforeach
    </tbody>
  </table>
@stop