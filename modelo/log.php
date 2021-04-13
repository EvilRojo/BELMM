<?php
class admin{
    private $usu;
    private $cont;
    
    function Login($usu,$cont){
        $con=mysqli_connect("localhost","u706355852_pyzu","12523916","u706355852_pyzu") or die("error de conexion");
        $login=mysqli_query($con,"select * from Administrador where (correo='$usu') and (contrasena='$cont')")
        or die("error en actualizar ".mysqli_error($con));
            if($Roj=mysqli_fetch_array($login)){
                $res=header('Location: ../admin.html');
            }else{
                 $res=header('Location: ../index.php');
            }
    return $res;
    }
}
