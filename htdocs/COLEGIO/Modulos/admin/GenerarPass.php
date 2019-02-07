<?php

    session_start();

    if (isset($_SESSION['usuario']) == 1) {
        $ses=$_SESSION['usuario'];
        if($ses['tipo_usuario'] == "Administrador") {
 
?>
<!DOCTYPE html>
<html>
<head>
    <?php include 'plantillas/head.php'; ?>
</head>

<body>
    <header id="header">
        <?php include 'plantillas/header.php'; ?>
    </header>

    <nav>
        <?php include 'plantillas/nav.php'; ?>
     </nav>

    <article id="article">
    <center>
    <?php
     include '../../server/conexion.php';

    $cedula = $_POST['cedula'];

    $sql = "SELECT cedula FROM usuario WHERE  cedula = '$cedula'";
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) == 0) {
                echo "<br><br>"."<b>*** NO HAY DATOS REGISTRADOS ***</b>"."<br><br><br><br><br>";
            }
            if (mysqli_num_rows($result) > 0) {
        
    $str = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890";
    $cad = "";
    for($i=0;$i<12;$i++) {
    $cad .= substr($str,rand(0,62),1);
    }
    
    echo "<b>Se ha generado una contraseña aleatoria : </b>";

?>
   <input type="text" name="datos"  value= "<?php print $cad; ?>" readonly><br><br>

    <form action="guardar-pass.php" method="post">
            <fieldset>
                <legend><b>Ingrese una Nueva Contraseña:</b></legend>
                    Nueva Contraseña:
                    <input type="password" name="nuevaclave" pattern="[a-zñáéíóú A-ZÑ,0-9._°+-()'$%]*" maxlength="30" 
                    size="30" placeholder="Ingrese una Nueva Contraseña" title="Ingrese una Nueva Contraseña" 
                    autofocus="" required><br>
                    Repita su Contraseña:
                    <input type="password" name="confirmacionclave" pattern="[a-zñáéíóú A-ZÑ,0-9._°+-()'$%]*" maxlength="30" 
                    size="30" placeholder="Ingrese una Nueva Contraseña" title="Ingrese una Nueva Contraseña" 
                    autofocus="" required>  
            </fieldset><br>
            <input type="submit" value="Aceptar">
            <input type="text" name="password" size="25" value='<?php echo $fila["password"]; ?>' hidden>
            <input type="text" name="username" size="25" value='<?php echo $fila["username"]; ?>' hidden>
             <input type="hidden" name="cedula" value="<?php echo $_POST['cedula'];?>">
    </form>  
<?php
    }
    include '../../server/desconexion.php';

?>
    </center>
    </article>

    <script src="../js/main.js" type="text/javascript"></script>
</body>
</html>
<?php 

 } }    else {
        
        header('Location:../../pagina_principal/Inicio.php');
        die();
     }
 ?>
