<?php
include_once "conexion.php";


class Cliente
{
    private $nombre;

    public function GuardarCliente($nombre)
    {
       /*CONEXION A LA BASE DE DATOS*/ 
       $nuevaConexion = new conexion();
       $ComandoConexion = $nuevaConexion->Conectar();

          
       $ComandoConexion->query("insert into controlvacunas (nombre,Vacuna) values ("."'".$_POST['nombre']."','".$_POST['Vacuna']."')" );


       if(!$ComandoConexion)
       {
        echo "Ocurriò un error al insertar el registro....".mysqli_error($ComandoConexion);
       }
       /*echo "Registro agregado exitosamente";*/
       header("Location: ListaMascotas.php");
    }

    
    public function ListarClientes()
    {
      $OtraConexion = new conexion();
      $nuevoComando = $OtraConexion->Conectar();
      $resultado = $nuevoComando->query("Select * from controlvacunas");
      if(!$resultado)
      {
        echo "Error Al intentar realizar Consulta de Clientes...".mysqli_error($nuevoComando);
      } 
      return $resultado;
      
    }

    public function FiltrarCliente($id)
    {
      $nuevaConexion = new conexion();  
      $nuevoComando = $nuevaConexion->Conectar();
      $resultado = $nuevoComando->query("Select * from controlvacunas where idMascota=$id");
      return $resultado;
    }

    public function VacunarCliente($id,$vacuna)
    {
      $nuevaConexion = new conexion();
      $ComandoConexion = $nuevaConexion->Conectar();

      $idVacuna = $ComandoConexion -> real_escape_string($_POST["idCliente"]);
      $nomVacuna = $ComandoConexion -> real_escape_string($_POST["Vacuna"]);
      

      $ComandoConexion = $nuevaConexion->Conectar();          
      $ComandoConexion->query("insert into controlvacunas (nombre, idMascota ) 
      values ('$Vacuna', '$idVacuna')");
      



    }


    public function ActualizarCliente($id,$mascota)
    {
      $nuevaConexion = new conexion();
      $ComandoConexion = $nuevaConexion->Conectar();
      $idMascota = $ComandoConexion -> real_escape_string($_POST["idCliente"]);
      $nomMascota = $ComandoConexion -> real_escape_string($_POST["nombre"]);

      $ComandoConexion->query("update controlvacunas set nombre ='$nombre' where idMascota = $idMascota");      
    }

}