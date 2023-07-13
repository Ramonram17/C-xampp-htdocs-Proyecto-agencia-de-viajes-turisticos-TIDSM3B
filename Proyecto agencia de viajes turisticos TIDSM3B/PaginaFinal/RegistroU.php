<!DOCTYPE html>
<html>
<head>
  <title>Formulario con Bootstrap</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/registro.css">
  <style>
  </style>
</head>
<body>
  
  <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
    <a class="navbar-brand" href="#">EXPLORE THE NEW WORLD</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav ml-auto">
         <li><a href="#"><img src="img/LOGO ETNW.png" alt="Logo" style="width: 50px; height: 50px;"></a></li>
        <li class="nav-item">
          <a class="nav-link" href="Inicio.php">Página Principal</a>
        </li>
      </ul>
    </div>
  </nav>

  <br> <br>
  <div class="form-group">
    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="nombre">Nombre:</label>
        <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingresa tu nombre completo">
      </div>
      <div class="form-group">
        <label for="correo">Correo electrónico:</label>
        <input type="email" class="form-control" id="correo" name="correo" placeholder="Ingresa tu correo electrónico">
      </div>
      <div class="form-group">
        <label for="Ciudad">Ciudad</label>
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
        <label for="password">Contraseña:</label>
        <input type="password" class="form-control" id="contraseña" name="contraseña" placeholder="Ingresa tu contraseña (Maximo 16 carácteres)">
      </div>
      <button type="submit" name="submit" class="btn btn-primary">Registrarse</button>
    </form>
  </div>
 
  <br> 
  <?php
    include("Database.php");
    $nombre = $email = "";
    $db = new Database();
    $query = $db->connect()->prepare('SELECT MAX(ID) AS ID FROM registro');    
    $query->execute();
    $row = $query->fetch();
    $numero = $row["ID"];
    $numero++;
?>
  <?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "proyecto";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

if (isset($_POST['submit'])) {
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $ciudad = $_POST['ciudad'];
    $contraseña = $_POST['contraseña'];

    $query = "SELECT * FROM registro WHERE correo = '$correo'";
    $result = $conn->query($query);
    if ($result->num_rows > 0) 
    {
        echo "Este correo ya está registrado. Por favor, utiliza otro correo.";
    } else 
    {
        $insertQuery = "INSERT INTO registro (Nombre, Correo, Ciudad, Contraseña) VALUES ('$nombre', '$correo', '$ciudad', '$contraseña')";
        if ($conn->query($insertQuery) === TRUE) 
        {
            echo "Registro satisfactorio!";
        } 
        else 
        {
            echo "Error al registrar: " . $conn->error;
        }
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
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

