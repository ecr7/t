<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vista Cliente</title>


</head>
<body>
<form action="ClienteController.php" method="POST">
                        <?php
                            include_once "ClienteModel.php";
                            $nuevoCliente = new Cliente();                          
                            /*FILTRAR SEGUN ID ENVIADO*/
                            $resultado = $nuevoCliente->FiltrarCliente($_GET['idCli']);

                            while($resultadoFiltrado = mysqli_fetch_assoc($resultado))
                            {
                        ?>
                                <p>
                                <label> Mascota: <input type="text" name="nombreMascota"  value="<?php 
                                echo $resultadoFiltrado['nombreMascota']?>" required readonly = "readonly"></label>
                                </p>

                                <p>
                                <label>Nombre Vacuna: <input type="text"name="Vacuna" required></label>
                                </p>

                                 <p>
                                    <input type="hidden" name="idCliente" 
                                    value="<?php echo $resultadoFiltrado['idMascota']?>" required>
                                 </p>   
                            <?php
                            }
                            ?>
                        
                <input type="submit" value="Agregar Vacunas" name="btnVacunar">            
    </form>
</body>
</html>