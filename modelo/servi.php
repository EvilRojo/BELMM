<?php

include ('bd.php');
 
class Servicio{

	    private $db;
		private $servicio;
		public function __construct(){
			$this->db=Conectar::conexion();
			$this->servicio=array();
		}

		public function getServicio(){
			$consulta=$this->db->query("select * from Servicios");
			while ($filas=$consulta->fetch_assoc()) {
				$this->servicio[]=$filas;
?>
                   <tr>
                   	<td><?php echo $filas['tipo_servicio'];?></td>
                   	<td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
                   	<td><?php echo $filas['descripcion_Serv'];?></td>
                   	<td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
                   	
                   	
                   	<td><input type="hidden" name="id" value="<?php echo $filas['id_servi'];?>"></td>                       
                    <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>           
                   	
                   	<td>
                   		<a href="../vista/modSer.php?id=<?php echo $filas['id_servi'];?>"><img width="32px" height="32px" src="../images/editA.png">
                   		</a>
                   	</td>

                    <td>
                   		<a href="../controlador/servi.php?accion=Eliminar&id=<?php echo $filas['id_servi'];?>" name="accion" value="Eliminar"><img width="32px" height="32px" src="../images/deleteAz.png">
                   		</a>
                   	</td>
                   </tr>
<?php				
			}
			return $this->servicio;
		}

		public function setServicio($idser,$tser,$cser){
		    $insertar=$this->db->query("INSERT INTO `Servicios` (`id_servi`, `tipo_servicio`, `descripcion_Serv`) 
        VALUES ('$idser','$tser','$cser')");
			if ($insertar) {
				return true;
			}else{
				return "error a guardar los datos".mysqli_error($this->db=Conectar::conexion());
			}
		}

		public function delServicio($id){

			$eliminar=$this->db->query("delete from Servicios where id_servi='$id'");
			if ($eliminar) {
				return true;
			}else{
				return "error al eliminar".mysqli_error($this->db=Conectar::conexion());
			}
		}

		public function modServicio($idser,$tser,$cser){

			$modificar=$this->db->query("UPDATE Servicios SET tipo_servicio='$tser',descripcion_Serv='$cser' where id_servi='$idser'");
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
