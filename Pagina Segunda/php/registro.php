<?php

  include 'conexion.php';

  $nombre = $_POST['nombre'];
  $correo = $_POST['correo'];
  $contrasena = $_POST ['contrasena'];

  $query = "INSERT INTO usuarios(Usuario, Correo, Contrasena) 
            VALUES('$nombre','$correo','$contrasena')"; 
           
//verificar que el codigo no se repita en la base de datos//
$verificar_correo= mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo='$correo' ");

if(mysqli_num_rows($verificar_correo) > 0){
echo'
      <script>
      alert("Este correo ya esta registrado, intenta con otro diferente");
      window.location = "../Formulario/register.php"
      </script>
';
exit();

}
//Ventana emergente para ver si se registro o no un usuario//
$ejecutar = mysqli_query($conexion, $query);
if($ejecutar){
  echo '
  <script>
  alert("Usuario registrado exitosamente");
  window.location = "../Formulario/login.php";
  </script>
  ';
}else{
  echo '
  <script>
  alert("Intentalo de nuevo, usuario no registrado");
  window.location = "../Formulario/register.php";
  </script>
  ';
}

mysqli_close($conexion);
?> 