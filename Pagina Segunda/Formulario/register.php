<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Glassmorphism Register Form | CodingStella</title>
  <link rel="stylesheet" href="style.css">
  <style>
    
  </style>
</head>
<body>
  <div class="wrapper">
<section>
  <div class="form-box">
    <div class="form-value">
      <form action="../php/registro.php" method="POST">
        <h2>Registrarse</h2>
        <div class="inputbox">
          <ion-icon name="person-outline"></ion-icon>
          <input name="nombre" type="text" required>
          <label for="">Nombre</label>
        </div>
        <div class="inputbox">
          <ion-icon name="mail-outline"></ion-icon>
          <input name="correo" type="email" required>
          <label for="">Correo</label>
        </div>
        <div class="inputbox">
          <ion-icon name="lock-closed-outline"></ion-icon>
          <input name="contrasena" type="password" required>
          <label for="">Contraseña</label>
        </div>
        <button>Registrarse</button>
        <div class="register">
          <p>Ya tienes una cuenta? <a href="login.php">Ingresar</a></p>
        </div>
        <div class="register">
          <p>Volver al <a href="../index.html">Menu</a></p>
        </div>
      </form>
    </div>
  </div>
</section>
<script src='https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js'></script>
<script src='https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js'></script>
</body>
</html>
