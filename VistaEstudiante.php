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
    


<div class="container-fluid bg-primary text-white text-center">
        <p>
            <h2>INGRESO DE LA MASCOTA</h2>
        </p>
    </div>
    <div class="container">
       <div class="row">
        <div class="col-3"></div>
        <div class="col-6">
        <form action="EstudianteController.php" method="post" class="border shadow p-3 mb-5 bg-body rounded">
            
            <div class="d-flex mb-4">
                <label for="nombre" class="fw-bold">Nombre:</label>
            <input class="form-control" type="text" name="nombre">
            </div>
            
            <div class="text-center">
                <input class="btn bg-primary text-white" type="submit" value="Guardar Registro" name="btnGuardar">
            </div>
        </form>
        </div>
        <div class="col-3"></div>
       </div>
    </div>
    <hr>
</body>
</html>