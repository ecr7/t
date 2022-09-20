<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" 
    crossorigin="anonymous">


</head>
<body>

<nav class="navbar navbar-expand-lg bg-primary">
  <div class="container-fluid">
  
    <div class="collapse navbar-collapse" id="navbarNav">

      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="AgregarMascota.php">Agregar Mascota</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="ListarMascota.php">Listar Mascota</a>
        </li>
        
      </ul>
    </div>
  </div>
</nav>

    <h3 class="text-center text-danger">LISTADO DE MASCOTA</h3>
    <hr>
    <div class="container">
    <table class="table table-striped">
        <th>Nombre</th>
        <th colspan="2">ACCION</th>
    <?php
        include_once "EstudianteModel.php";
        $Estudiante = new Estudiante();
        $ListaEstudiantes = $Estudiante->ListarEstudiantes();
        while($Estudiantes = mysqli_fetch_assoc($ListaEstudiantes))
        {?>
          <tr>
                <td><?php echo $Estudiantes['nombre'] ?> </td>
                <td><a href="VistaEditarEstudiante.php?idMascota  =<?php echo $Estudiantes['idMascota'];?>"><img src="editar.png" height="35" width="35" alt="Editar" title="Editar"></a></td>
                <td><a href="eliminar.php?idEst=<?php echo $Estudiantes['idMascota'];?>"><img src="eliminar.png" height="35" width="35" alt="Eliminar" title="Eliminar"></a></td>
                
          </tr>
          
       <?php } ?>
    
    </table>
    </div>
</body>
</html>