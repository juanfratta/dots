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
    <div class="table">
        <?php
        $text="#";
        $x=200;
        $y=200;
        $circle = ps_show_xy( $psdoc , $text , $x , $y );

        ?>
        
        <div>{$circle}</div>
        <!--aca deberían dibujarse los dots aleatorios-->
        
     

        
       
    </div>
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
                    <button class="btn-control">Obtener Ubicación</button>
                    <label for=""> Ubicacion:
                    <span class="ubication">knodowdbvowdbv</span>
                    </label>                
                    <button class="btn-control">Actualizar Ubicación</button>
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