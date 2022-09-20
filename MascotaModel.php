<?php
include_once "conexion.php";


class Mascota
{
    
    private $nombre;
    private $vacuna;
   

    /*public function __construct($ape,$nom,$dir,$tel)
    {
        $this->apellidos = $ape;
        $this->nombre = $nom;
        $this->direccion = $dir;
        $this->telefono = $tel;
    }*/

    public function GuardarMascota($nom,$vac)
    {
       /*CONEXION A LA BASE DE DATOS*/ 
       $nuevaConexion = new conexion();
       $ComandoConexion = $nuevaConexion->Conectar();
       $ComandoConexion->query("insert into mascota (nombreMascota,Vacuna) values ("."'".$_POST['nombreMascota']."','".$_POST['Vacuna']."','"."')" );

       if(!$ComandoConexion)
       {
        echo "Ocurriò un error al insertar el registro....".mysqli_error($ComandoConexion);
       }
       /*echo "Registro agregado exitosamente";*/
       header("Location: VistaMascota.php");
    }
    public function ListarMascotas()
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

    public function FiltrarMascotas($id)
    {
      $nuevaConexion = new conexion();
      $nuevoComando = $nuevaConexion->Conectar();
      $resultado = $nuevoComando->query("Select * from controlvacunas where idMascota=$id");
      return $resultado;
    }

    public function EditarMascotas($id,$nom,$vac)
    {
      $nuevaConexion = new conexion();
      $nuevoComando = $nuevaConexion->Conectar();
      $nuevoComando->query("Update controlvacunas set nombre="."'".$nom."',vacuna="."'".$vac."'"." where idMascota = $id");
    }

    public function EliminarMascota($id)
    {
      $nuevaConexion = new conexion();
      $nuevoComando = $nuevaConexion->Conectar();
      $nuevoComando->query("DELETE FROM controlvacunas WHERE idMascota = $id");
    }

}