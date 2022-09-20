<?php
include_once "conexion.php";


class Estudiante
{
    private $NombreMascota;
    private $Vacuna;
   
    public function GuardarEstudiante($nom,$vac)
    {
       /*CONEXION A LA BASE DE DATOS*/ 
       $nuevaConexion = new conexion();
       $ComandoConexion = $nuevaConexion->Conectar();
       $ComandoConexion->query("insert into controlvacunas (NombreMascota,Vacuna) values ("."'".$_POST['NombreMascota']."','".$_POST['Vacuna']."','"."')" );

       if(!$ComandoConexion)
       {
        echo "Ocurriò un error al insertar el registro....".mysqli_error($ComandoConexion);
       }
       /*echo "Registro agregado exitosamente";*/
       header("Location: VistaEstudiante.php");
    }
    public function ListarEstudiantes()
    {
      $OtraConexion = new conexion();
      $nuevoComando = $OtraConexion->Conectar();
      $resultado = $nuevoComando->query("Select * from controlvacunas");
      if(!$resultado)
      {
        echo "Error Al intentar realizar Consulta de Estudiantes...".mysqli_error($nuevoComando);
      } 
      return $resultado;
      
    }

    public function FiltrarEstudiante($id)
    {
      $nuevaConexion = new conexion();
      $nuevoComando = $nuevaConexion->Conectar();
      $resultado = $nuevoComando->query("Select * from controlvacunas where idMascota=$id");
      return $resultado;
    }

    public function EditarEstudiante($id,$nom,$vac)
    {
      $nuevaConexion = new conexion();
      $nuevoComando = $nuevaConexion->Conectar();
      $nuevoComando->query("Update controlvacunas set NombreMascota="."'".$nom."',Vacuna="."'".$vac."'"." where idMascota = $id");
    }

    public function EliminarEstudiante($id)
    {
      $nuevaConexion = new conexion();
      $nuevoComando = $nuevaConexion->Conectar();
      $nuevoComando->query("DELETE FROM controlvacunas WHERE idMascota = $id");
    }

}