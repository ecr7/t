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
   

    
<!-- <nav class="navbar navbar-dark bg-primary">  -->
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


    </nav>
 
    <center><p><h2>AGREGAR MASCOTA</h2></p></center>
    
    <form action="ClienteController.php" method="post">
      <label> Nombre de la Mascota: <input type="text" name="nombreMascota" required></label>
      <input type="submit" value="Guardar " name="btnGuardar">
    </form>
    

</body>
</html>