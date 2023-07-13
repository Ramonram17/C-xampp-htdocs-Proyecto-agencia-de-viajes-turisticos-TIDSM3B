<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>EXPLORE THE NEW WORLD</title>
 
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/Inicio1.css">
  <style>
.jumbotron {
        background-image: url(img/mejores-gifts-animados-de-viaje-8.gif ) ;
        background-size: cover;
        height: 800px;
        display: flex;
        justify-content: center;
        align-items: center;
        color: #fff;
      }

body {
  padding-top: 50px;
}
.jumbotron h1 {
  font-size: 48px;
  text-shadow: 2px 2px #1E416C;
}
.jumbotron p {
  font-size: 18px;
  text-shadow: 2px 2px #1E416C;
}
.contact-form {
  max-width: 500px;
  margin: 0 auto;
}
.form-group label {
  font-weight: bold;
}
.form-group input,
.form-group textarea {
  width: 100%;
}
.form-group button {
  margin-top: 30px;
  border-radius: 50px;
}
form {
background-color: #ffffff;
padding: 15px;
border-radius: 10px;
box-shadow: 7px 7px 10px rgb(0, 217, 255);
max-width: 400px;
margin: 30px;
}
.navbar {
background: linear-gradient(to right, #00d9ff, #1E416C); 
padding: 10px;
}
nav {
  background-color: #000000;
  padding: 10px;
  
}
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  display: flex;
  align-items: center; 
}
li {
  display: inline;
  margin-right: 10px;
}
a {
  text-decoration: none;
  color: #000000;
}
label {
display: block;
margin-bottom: 10px;
color: #1E416C;
}
.jumbotron2 {
background: linear-gradient(to right, #00d9ff, #1E416C);
padding: 20px;
height: 500px;
display: flex;
justify-content: center;
align-items: center;
color: #ffffff;
}

.jumbotron2 h2 {
  text-align: center;
  font-family: "Arial", sans-serif;
  font-size: 48px;
  text-shadow: 2px 2px #1E416C;
}
.jumbotron2 p {
  text-align: center;
  font-family: "Arial", sans-serif;
  font-size: 24px;
  text-shadow: 2px 2px #1E416C;
}


input[type="text"],
input[type="email"] {
width: 100%;
padding: 10px;
margin-bottom: 20px;
border: 1px solid #00d9ff;
border-radius: 4px;
}
.textarea-border {
border: 2px solid #00d9ff; 
border-radius: 4px;
}
button[type="submit"] {
background-color: #1E416C;
color: #ffffff;
padding: 10px 20px;
border: none;
border-radius: 4px;
font-size: 16px;
cursor: pointer;
border-radius: 20px;
border:2px solid #00d9ff ;
}

button[type="submit"]:hover {
background-color: #00d9ff;
}
 
  footer {
    background: linear-gradient(to right, #00d9ff, #1E416C);
    color: #fff; /* color de letra */
  }
hr {
  border: none;
  border-top: 30px solid #ffffff; /* Estilo y color del separador */
  margin: px 0; /* Margen superior e inferior del separador */
}
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
          <a class="nav-link" href="#">Inicio<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Aerolineas.html">Aerolineas</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Galeria.html">Galería</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Reservaciones.php">Reservaciones</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="QS.html">Quiénes somos</a>
          </li>
        <li class="nav-item">
            <a class="nav-link" href="#contactanos">Contactanos</a>
        </li>
      </ul>
    </div>
  </nav> 
  <div class="jumbotron">
    <div class="container text-center";>
      <h1>Bienvenido a PEXPLORE THE NEW WORLD agencia de viajes</h1> 
      <BR></BR>
      <a href="InicioSesion.html" class="btn btn-primary btn-lg">¡Inicia Sesión!</a>
    </div>
  </div>
<hr>
<br><br><br>
  <div class="jumbotron2">
    <div class="container text-center">
      <h2>!Habla con nosotros!</h2>
      <p>Contactanos</p>
      <a id="contactanos"><img src="img/LOGO ETNW.png" alt="Logo" style="width: 2   00px; height: 200px;"></a>
    </div>
    <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="contact-form">
          <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <div class="form-group">
              <label for="nombre">Nombre:</label>
              <input type="text" id="nombre" name="nombre" class="form-control" placeholder="Nombre completo*" required>
            </div>
            <div class="form-group">
              <label for="correo">Correo Electrónico:</label>
              <input type="email" id="email" name="email" class="form-control" placeholder="Correo*" required>
            </div>
            <div class="form-group">
              <label for="mensaje">Mensaje:</label>
              <textarea id="mensaje" name="mensaje" class="form-control textarea-border" rows="5" placeholder="¡Escribenos un mensaje!" required></textarea>
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Enviar</button>
          </form>

        </div>
      </div>
    </div>
  </div>
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


if ($conn->connect_error) 
{
    die("Error de conexión a la base de datos: " . $conn->connect_error);
}


if ($_SERVER["REQUEST_METHOD"] == "POST") 
{

    $nombre = $_POST["nombre"];
    $email = $_POST["email"];
    $mensaje = $_POST["mensaje"];

    $sql = "INSERT INTO inicio (nombre, email, Mensaje) VALUES ('$nombre', '$email', '$mensaje')";

    
    if ($conn->query($sql) === true) 
    {
        echo "La información se ha guardado correctamente en la base de datos.";
    } else {
        echo "Error al guardar la información en la base de datos: " . $conn->error;
    }
}

$conn->close();
?>  

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  
</body>
</html>
