<?php

include ('bd.php');
 
class Ubicacion{

	    private $db;
		private $ubicacion;
		public function __construct(){
			$this->db=Conectar::conexion();
			$this->ubicacion=array();
		}

		public function getUbicacion(){
			$consulta=$this->db->query("select * from Ubicaciones");
			while ($filas=$consulta->fetch_assoc()) {
				$this->ubicacion[]=$filas;
?>
                   <tr>
                   	<td><?php echo $filas['alcaldia_muni'];?></td>
                   	<td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
                   	<td><?php echo $filas['ciudad_estado'];?></td>
                   	<td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
                   	<td><?php echo $filas['colonia'];?></td>
                   	<td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
                   	<td><?php echo $filas['codigo_postal'];?></td>
                   	<td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
                   	<td><?php echo $filas['entre_calleA'];?></td>
                   	<td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
                   	<td><?php echo $filas['entre_calleB'];?></td>
                   	<td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
                   	<td><?php echo $filas['numero_exterior'];?></td>
                   	<td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
                   	
                   	<td><input type="hidden" name="id_ubica" value="<?php echo $filas['id_ubica'];?>"></td>                       
                    <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>           
                   	
                   	<td>
                   		<a href="../vista/modUbi.php?id_ubica=<?php echo $filas['id_ubica'];?>"><img width="32px" height="32px" src="../images/editA.png">
                   		</a>
                   	</td>
                    
                    <td>
                   		<a href="../controlador/ubica.php?accion=Eliminar&id_ubica=<?php echo $filas['id_ubica'];?>" name="accion" value="Eliminar"><img width="32px" height="32px" src="../images/deleteAz.png">
                   		</a>
                   	</td>
                   </tr>
<?php				
			}
			return $this->ubicacion;
		}

		public function setUbicacion($id,$alca,$ciu,$col,$cp,$c1,$c2,$num){
		    $insertar=$this->db->query("INSERT INTO `Ubicaciones` (`id_ubica`, `alcaldia_muni`, `ciudad_estado`, `colonia`, `codigo_postal`, `entre_calleA`, `entre_calleB`, `numero_exterior`) VALUES ('$id', '$alca', '$ciu', '$col', '$cp', '$c1', '$c2', '$num')");
			if ($insertar) {
				return true;
			}else{
				return "error a guardar los datos".mysqli_error($this->db=Conectar::conexion());
			}
		}

		public function delUbicacion($id_ubica){

			$eliminar=$this->db->query("delete from Ubicaciones where id_ubica='$id_ubica'");
			if ($eliminar) {
				return true;
			}else{
				return "error al eliminar".mysqli_error($this->db=Conectar::conexion());
			}
		}

		public function modInstructor($id,$alca,$ciu,$col,$cp,$c1,$c2,$num){

			$modificar=$this->db->query("UPDATE Ubicaciones SET alcaldia_muni='$alca',ciudad_estado='$ciu',colonia='$col',codigo_postal='$cp',entre_calleA='$c1',entre_calleB='$c2',numero_exterior='$num' where id_ubica='$id'");
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
