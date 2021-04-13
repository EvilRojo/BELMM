<?php

include ('bd.php');
 
class Museo{

	    private $db;
		private $museo;
		public function __construct(){
			$this->db=Conectar::conexion();
			$this->museo=array();
		}

		public function getMuseo(){
			$consulta=$this->db->query("select * from Museos;");
			while ($filas=$consulta->fetch_assoc()) {
				$this->museo[]=$filas;
?>
                   <tr>
                   	<td><?php echo $filas['nombre_museo'];?></td>
                   	<td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
                   	<td><?php echo $filas['telefono'];?></td>
                   	<td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
                   	<td><?php echo $filas['Horarios'];?></td>
                   	<td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
                   	<td><?php echo $filas['TMus2'];?></td>
                   	<td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
                   	<td><?php echo $filas['TSer2'];?></td>
                   	<td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
                   	<td><?php echo $filas['TBol2'];?></td>
                   	<td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
					<td><?php echo $filas['Ubica'];?></td>
					<td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
					<td><?php if($filas['Mapa']){echo'si';}else{echo'no';}?></td>
					<td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
					<td><?php if($filas['Imagen']){echo'si';}else{echo'no';};?></td>
					
                   	
                   	<td><input type="hidden" name="id" value="<?php echo $filas['id_museo'];?>"></td>                       
                            
                   	<td>
                   		
                   		<a href="../vista/modMus.php?id=<?php echo $filas['id_museo'];?>"><img width="32px" height="32px" src="../images/editA.png">
                   		</a>
                   		
                   		<a href="../controlador/museos.php?accion=Eliminar&id=<?php echo $filas['id_museo'];?>" name="accion" value="Eliminar"><img width="32px" height="32px" src="../images/deleteAz.png">
                   		</a>
                   	
                   		
                   	</td>

                   </tr>
<?php				
			}
			return $this->museo;
		}

		public function setMuseo($id,$nmu,$telmu,$hmu,$tmu,$tse,$tbo,$ubi,$map,$img){
		    
		         $insertar=$this->db->query("INSERT INTO Museos(`id_museo`,`nombre_museo`,`telefono`,`Horarios`,`TMus2`,`TSer2`,`TBol2`,`Ubica`,`Mapa`,`Imagen`) VALUES ('$id','$nmu','$telmu','$hmu','$tmu','$tse','$tbo','$ubi','$map','$img')");
		    
           
			if ($insertar) {
				return true;
			}else{
			    
				return "error a guardar los datos".mysqli_error($this->db=Conectar::conexion());
			}
		}

		public function delMuseo($id){

			$eliminar=$this->db->query(" delete from Museos where id_museo='$id'");
			if ($eliminar) {
				return true;
			}else{
				return "error al eliminar".mysqli_error($this->db=Conectar::conexion());
			}
		}

		public function modMuseo($id,$nmu,$telmu,$hmu,$tmu,$tse,$tbo,$ubi,$map,$img){

			if(empty($map)){
		         $modificar=$this->db->query("UPDATE Museos SET nombre_museo='$nmu',telefono='$telmu',Horarios='$hmu',TMus2='$tmu', TSer2='$tse',TBol2='$tbo',Ubica='$ubi', Imagen='$img' where id_museo='$id'");
		    }else{
			$modificar=$this->db->query("UPDATE Museos SET nombre_museo='$nmu',telefono='$telmu',Horarios='$hmu',TMus2='$tmu', TSer2='$tse',TBol2='$tbo',Ubica='$ubi',Mapa='$map', Imagen='$img' where id_museo='$id'");
		    }
			if ($modificar) {
				return true;
			}else{
				return "error al modificar".mysqli_error($this->db=Conectar::conexion());
			}
		}

		public function TerminarConexion(){
			if($this->db=Conectar::cerrar($this->db=Conectar::conexion())){
				echo "Conexion Terminada";
			}else{
				echo "Algo fallo";
			}
		}		
}

?>