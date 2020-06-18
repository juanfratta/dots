@extends('layout')
@section('content')

<div class="container d-flex-column">
    <h5 class="text-center p-5">Acá encuentra listado en primer lugar el dot elegido, y luego sus dots más cercanos.</h5>
    <div class="listado">
        @foreach($dotsCercanos as $dots)
    <ul>   
        <li>Dot  {{$dots->id}}  en la posición x: {{$dots->axis_x}} y la posicion y: {{$dots->axis_y}}.</li>
    </ul>
        @endforeach
   </div>
</div>
@endsection