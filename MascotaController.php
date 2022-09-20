<?php
include "MascotaModel.php";
$nuevoMascota = new Mascota();

/*GUARDAR*/
if(isset($_POST['btnGuardar']))
{
    $nuevoMascota->GuardarMascota($_POST['nombre'],$_POST['vacuna']);
    header('Location: VistaMascota.php');
}
/*EDITAR*/
else
if(isset($_POST['btnEditar']))
{
 $nuevoMascota->EditarMascota($_POST['idMascota'],$_POST['txtnombre'],$_POST['vacuna']); 
 header('Location: VistaMascota.php');
        
}

/*ELIMINAR*/


if(isset($_POST['btnEliminar']))
{
 $nuevoMascota->EliminarMascota($_POST['idMascota']); 
 header('Location: VistaMascota.php');
        
}




/*
else
if(isset($_POST['btnEliminar'])){
$nuevoEstudiante->EliminarEstudiante($_POST['idStudiante']);
header('Location: VistaEstudiante.php');
}
*/

