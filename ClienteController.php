<?php

include "ClienteModel.php";
$nuevoCliente = new Cliente();

/*GUARDAR*/
if(isset($_POST['btnGuardar']))
{
    $nuevoCliente->GuardarCliente($_POST['nombreMascota']);
    header('Location: ListarMascota.php');
}


/*EDITAR*/
if(isset($_POST['btnVacunar']))
{
 $nuevoCliente->VacunarCliente($_POST['idCliente'],$_POST['Vacuna']); 
 header('Location: ListarMascota.php'); 
}



if(isset($_POST['btnEditar']))
{
$nuevoCliente->ActualizarCliente($_POST['idCliente'],$_POST['nombreMascota']); 
 header('Location: ListarMascota.php');       
}

if(isset($_POST['btnCancelar']))
{ 
 header('Location: ListarMascota.php');        
}

?>
