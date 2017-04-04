<?php 
session_start(); 
include_once "conexion.php"; 
  
function verificar_login($user,$password,&$result) { 
    $sql = "SELECT 	usuario,password, userperfil FROM usuarios WHERE usuario = '$user' and password = '$password'";
    $rec = mysql_query($sql); 
    $count = 0; 
    while($row = mysql_fetch_object($rec)) 
    { 
        $count++; 
        $result = $row; 
    } 
  
    if($count == 1) 
    { 
        return 1; 
    } 
  
    else 
    { 
        return 0; 
    } 
} 
  
if(!isset($_SESSION['userid'])) 
{ 
    if(isset($_POST['login'])) 
    { 
        if(verificar_login($_POST['user'],$_POST['password'],$result) == 1) 
        { 
			session_start(); 
			
			//Aqui manipulas el menu de inicio de cada perfil
            $_SESSION['userid'] = $result->idusuario; 
			$_SESSION['rol'] = $result->userperfil; 
			echo $result->userperfil;
			//menu de administradores			
			if($result->userperfil==01){
				header("location:http://localhost/2017/sisac/menu1.php"); 
			}
			//menu de supervisores
			elseif ($result->userperfil==02) 
			{
				header("location:http://localhost/2017/sisac/menu2.php"); 
			}
			//menu de usuarios
			elseif ($result->userperfil==03) 
			{
				header("location:http://localhost/2017/sisac/menu3.php"); 
			}
			//menu de seguridad
			elseif ($result->userperfil==04) 
			{
				header("location:http://localhost/2017/sisac/menu4.php"); 
			}
			//menu de visitantes
			elseif ($result->userperfil==05) 
			{
				header("location:http://localhost/2017/sisac/menu5.php"); 
			}
		} 
        else 
        { 
            echo '<div class="error"><p style="font-weight:bold;font-style:oblique;color:#FF450D;letter-spacing:0pt;word-spacing:0pt;font-size:24px;
			text-align:center;font-family:arial,helvetica, sans-serif;line-height:1;">Su usuario es incorrecto!!. Verifique los datos e intente nuevamente.</p></div>'; 
        } 
    } 

?> 
  
<!DOCTYPE html>
<html lang="es">
    <head>
	<title>sisadc</title>
	<link rel="stylesheet" href="css/estilo.css" />
      </head>
    <body>
    <div id="header">
	 <p style="text-shadow:5px 5px 10px rgba(5,5,5,0.9);font-weight:bold;font-style:oblique;color:#FFFFFF;
	           background-color:linear-gradient(180deg, #11C10B 30%, #15511A );
	          letter-spacing:0pt;word-spacing:8pt;font-size:54px;text-align:left;font-family:arial black, 
	           sans-serif;line-height:3;margin:0px;margin-left:15px; padding:0px;">Syscheck Corporativo</p>
	</div>
	  <div id="nav">
	</div>
	  <div id="body">
    <form action="" method="post" class="login"> 
    <div><label><strong>Usuario</strong></label><input name="user" type="text" ></div> 
    <div><label><strong>Password</strong></label><input name="password" type="password"></div> 
    <div><input name="login" type="submit" value="login"></div> 
     </form> 
   </div>
   <center><img class="error"src ="http://localhost/2017/sisac/Imagen/logo.png" width="270" height="87"></center>
  <div id="footer">
	
	</div>
	</body>
	
</html>
<?php 
}
 else { 
    echo 'Su usuario ingreso correctamente.'; 
    echo '<a href="logout.php">Logout</a>'; 
} 

?>