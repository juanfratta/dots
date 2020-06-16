@extends('layout')

@section('content')
<div>
    <h4 class="text-center"> Ingrese las coordenadas para crear un nuevo Dot</h4>
    <div class="dashboard"> 
<!--errors-->
        <ul class="errors">
            @foreach($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>
<!--create form-->
        <form class="myForm" action="{{ route('dots.store') }}" method="POST" >
        @csrf
            <div class="form-group">
                <label for="">Ingrese un número entre 1 y 1300 (coordenada X):</label>
                <input  type="text" name="axis_x" value="">
            </div>
            <div class="form-group">
                <label for="">Ingrese un número entre 20 y 450 (coordenada Y):</label>
                <input  type="text" name="axis_y" value="">            
            </div>
            <button type="submit" class="btn btn-primary">Crear Dot</button>
        </form> 
    </div>      
</div>
@endsection