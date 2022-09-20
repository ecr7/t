<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>VistaEditarMascota</title>
</head>
<body>

<div class="text-bg-secondary p-3"><center><h2>ELIMINAR DATOS DE MASCOTAS</center></h2> </div>
<p>
<p>
</p>

    <form action="MascotaController.php" method="POST">
                        <?php
                            include_once "MascotaModel.php";
                            $nuevoMascota = new Mascota();
                            /*FILTRAR LA MASCOTA SEGUN ID ENVIADO*/
                            $resultado = $nuevoMascota->FiltrarMascota($_GET['idMascota']);

                            while($resultadoFiltrado = mysqli_fetch_assoc($resultado))
                            {
                        ?>
                                
                                <p>
                                <label for="txtnombre">Nombre:</label>
                                <input type="text" name="txtnombre" 
                                value="<?php echo $resultadoFiltrado['nombre']?>" disabled>
                                </p>

                                <p>
                                <label for="txtvacuna">Vacuna:</label>
                                <input type="text" name="txtvacuna" 
                                value="<?php echo $resultadoFiltrado['vacuna']?>" disabled>
                                </p>

                               
                                 <p>
                                    <input type="hidden" name="idMascota" 
                                    value="<?php echo $resultadoFiltrado['idMascota']?>">
                                 </p>   
                            <?php
                            }
                            ?>
                        
                <input class="btn btn-danger" type="submit" value="Eliminar La Mascota" name="btnEliminar">            
    </form>
</body>
</html>