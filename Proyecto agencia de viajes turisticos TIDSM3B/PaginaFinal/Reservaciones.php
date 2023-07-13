<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Reservaciones - EXPLORE THE NEW WORLD</title>
  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/reservaciones.css">
  <style>
    
   
  </style>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <a class="navbar-brand" href="#">EXPLORE THE NEW WORLD</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">
      <li><a href="#"><img src="img/LOGO ETNW.png" alt="Logo" style="width: 50px; height: 50px;"></a></li>
        <li class="nav-item active">
        <li class="nav-item">
          <a class="nav-link" href="Inicio.php">Inicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Aerolineas.html">Aerolineas</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Galeria.html">Galería</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="#">Reservaciones<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="QS.html">Quiénes somos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Inicio.php#contactanos">Contacto</a>
        </li>
      </ul>
    </div>
  </nav>
  <div class="jumbotron">
    <div class="container text-center">
      <h1>RESERVACIONES</h1>
      <p>Reserva cita para tu gran viaje</p>
  </div>

  <div class="container reservation-section">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <form class="reservation-form" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                <div class="form-group">
                    <label for="nombre">Nombre</label>
                    <input type="text" id="nombre" name="nombre" class="form-control" placeholder="Ingresa tu nombre completo" required>
                </div>
                <div class="form-group">
                    <label for="email">Correo electrónico</label>
                    <input type="email" id="email" name="email" class="form-control" placeholder="Ingresa tu correo" required>
                </div>
                <div class="form-group">
                    <label for="telefono">Teléfono</label>
                    <input type="tel" id="telefono" name="telefono" class="form-control" placeholder="Ingresa tu telefono (Ej:xxx-xxx-xxxx)" required>
                </div>
                <div class="form-group">
        <label for="Nivel">Destino</label>
        <select class="form-control" id="ciudad" name="ciudad" placeholder="Seleciona una opción">
          <option value="Aguascalientes">Aguascalientes</option>
          <option value="Baja California">Baja California</option>
          <option value="Baja California Sur ">Baja California Sur </option>
          <option value="Campeche">Campeche</option>
          <option value="Chiapas">Chiapas</option>
          <option value="Chihuahua">Chihuahua</option>
          <option value="Ciudad de México">Ciudad de México</option>
          <option value="Coahuila">Coahuila</option>
          <option value="Colima">Colima</option>
          <option value="Durango">Durango</option>
          <option value="Estado de Mexico">Estado de Mexico</option>
          <option value="Guanajuato">Guanajuato</option>
          <option value="Guerrero">Guerrero</option>
          <option value="Hidalgo">Hidalgo</option>
          <option value="Jalisco">Jalico</option>
          <option value="Michoacan">Michoacan</option>
          <option value="Morelos">Morelos</option>
          <option value="Nayarit">Nayarit</option>
          <option value="Nuevo Leon">Nuevo Leon</option>
          <option value="Oaxaca">Oaxaca</option>
          <option value="Puebla">Puebla</option>
          <option value="Queretaro">Queretaro</option>
          <option value="Quintana Roo"></option>
          <option value="San Luis Potosi">San Luis Potosi</option>
          <option value="Sinaloa">Sinaloa</option>
          <option value="Sonora">Sonora</option>
          <option value="Tabasco">Tabasco</option>
          <option value="Tamaulipas">Tamaulipas</option>
          <option value="Tlaxcala">Tlaxcala</option>
          <option value="Veracruz">Veracruz</option>
          <option value="Yucatan">Yucatan</option>
          <option value="Zacatecas">Zacatecas</option>
        </select>
      </div>
                <div class="form-group">
                    <label for="fecha">Fecha</label>
                    <input type="date" id="fecha" name="fecha" class="form-control" required value="<?php echo date("Y-m-d"); ?>">
                </div>
                <button type="submit" name="Enviar" class="btn btn-primary btn-block">Reservar</button>
            </form>
        </div>
    </div>
</div>
  <footer class="bg-dark text-light text-center py-3">
    <p>Derechos de autor &copy; 2023 EXPLORE THE NEW WORLD. Todos los derechos reservados.</p>
  </footer>
  <?php
    include("Database.php");
    $nombre = $email = "";
    $db = new Database();
    $query = $db->connect()->prepare('SELECT MAX(id) AS id FROM reservaciones');
    $query->execute();
    $row = $query->fetch();
    $numero = $row["id"];
    $numero++;
?>
  <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $telefono = $_POST['telefono'];
    $ciudad = $_POST['ciudad'];
    $fecha = $_POST['fecha'];
    

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "proyecto";

   
    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Error en la conexión: " . $conn->connect_error);
    }
    $sql = "INSERT INTO reservaciones (nombre, email, telefono, ciudad, fecha)
            VALUES ('$nombre', '$email', '$telefono', '$ciudad', '$fecha')";

    if ($conn->query($sql) === TRUE) {
        echo "Reserva realizada satisfactoriamente.";
    } else {
        echo "Error al realizar la reserva: " . $conn->error;
    }
    $conn->close();
}
?>
<footer class="bg-dark text-light">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
        <h3>EXPLORE THE NEW WORLD</h3>
          <p>Salud #329, San Jose del Barranco, San Francisco de los Romo, Aguascalientes</p>
          <p>Teléfono: 123-456-7890</p>
          <p>Email: explorethenewworld_13@mail.com</p>
        </div>
        </div>
      </div>
    </div>
  </footer>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>
