@extends('layout')

@section('content')
<!--Dots zone-->
<div class="table">
    <svg class="table" >       
        @foreach($dots as $dot)

            <a href="{{ route('dots.show', $dot->id) }}">            
                <ellipse cx="{{$dot->axis_x}}" cy="{{$dot->axis_y}}" rx="20" ry="20" class="circle" />
                <text x="{{$dot->axis_x-5}}" y="{{$dot->axis_y+2.5}}" class="numbers-dots">{{$dot->id}}</text>               
            </a>
                  
        @endforeach            
    </svg>        
</div>
<h6 class="text-center">Haga click en un dot para editar la posicion, eliminarlo</h6>
<!--Dashboard-->

<div class="container text-center">
    <label for="new-dot">O click acá para crear un nuevo dot:</label>
    <a name="new-dot" href="{{ route('dots.create') }}" type="submit" class="btn btn-primary">Crear Dot</a>  
</div>
    

@endsection

