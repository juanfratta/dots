<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/custom.css">
    <title>Dots</title>
</head>

<body>
<div calss="app">

<!--aca se dibujan los dots-->

    <div class="table">      
        <svg height="100%" width="100%">
            <ellipse cx="200" cy="80" rx="20" ry="20" class="circle"/>
            <ellipse cx="180" cy="80" rx="20" ry="20" class="circle"/>
        </svg>       
    </div>

<!--Aca empieza el dashboard-->     
   
    <div class="dashboard">    
        <h2 class="title"> Dots exercise</h2>
        <div class="">
            <form  class="buttons" method="POST" action="">
                @csrf 
                <div class="col">
                    <button class="btn-control">Agregar Dot</button>
                    <button class="btn-control">Eliminar Dot</button>
                </div>  

                <div class="col"> 
                    <span> Seleccionar Dot                 
                        <select name="" id="">
                            <option value="value1">Value 1</option>                        
                        </select>
                    </span> 
                    <div class="o-ubication"> 
                        <button class="btn-control">Obtener Ubicación</button>
                        <span class="ubication">knodowdbvowdbv</span>                        
                    </div>                   
                    <div class="a-ubication">
                        <div>
                            <p>Ingresar coordenadas para actualizar</p>
                            <label for="axis x">Eje X:</label>
                            <input type="text" style="width:50px";>
                            <label for="axis y">Eje Y:</label>
                            <input type="text" style="width:50px";> 
                        </div>        
                        <button class="btn-control">Actualizar Ubicación</button>
                    </div>
                </div>
                
                <div class="col">
                    <span> ¿Cuántos dots?              
                        <select name="" id="">
                            <option value="value1">Value 1</option>                        
                        </select>
                    </span>
                    <button class="btn-control">Dots Más Cercanos</button>
                    <span class="nearby">jninininpnpinp</span>
                </div>                   
            </form>
        </div>
    </div>
</div>

    
</body>
</html>