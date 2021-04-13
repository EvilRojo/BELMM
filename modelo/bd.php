<?php
class Conectar{
    public static function conexion(){
        $conexion=new mysqli("localhost","u706355852_pyzu","12523916","u706355852_pyzu");
        $conexion->query(0);
        return $conexion;
    }
    
    public static function cerrar($cerrar){
			if(mysqli_close($cerrar)){
				return true;
			}else{
				return false;
			}
		}
}
?>
