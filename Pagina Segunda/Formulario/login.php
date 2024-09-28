<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Glassmorphism Login form | CodingStella</title>
  <link rel="stylesheet" href="style.css">

</head>
<body>
  <div class="wrapper">

<section>
  <div class="form-box">
    <div class="form-value">
      <form method="post" action="">
        <h2>Ingresar</h2>
        
        <div class="inputbox">
          <ion-icon name="mail-outline"></ion-icon>
          <input type="email" required>
          <label for="">Correo</label>
        </div>
        <div class="inputbox">
          <ion-icon name="lock-closed-outline"></ion-icon>
          <input type="password" required>
          <label for="">Contraseña</label>
        </div>
        <div class="forget">
          <label>
            <input type="checkbox"> Recuerdame
          </label>
          <label>
            <a href="#">Olvidaste Tu Contraseña?</a>
          </label>
        </div>
        <button>Ingresar</button>
  
        <div class="register">
          <p>No Tienes Una Cuenta? <a href="register.php">Registrate</a></p>
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