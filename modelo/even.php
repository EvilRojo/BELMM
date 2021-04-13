<?php

include ('bd.php');
 
class Evento{

	    private $db;
		private $eventos;
		public function __construct(){
			$this->db=Conectar::conexion();
			$this->eventos=array();
		}

		public function getEvento(){
			$consulta=$this->db->query("select * from Eventos");
			while ($filas=$consulta->fetch_assoc()) {
				$this->eventos[]=$filas;
				
?>
                   <tr>
                   	<td><?php echo $filas['nombre_even'];?></td>
                   	<td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
                   	<td><?php echo $filas['descripcion_even'];?></td>
                   	<td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
                   	<td><?php echo $filas['hora_eve'];?></td>
                   	<td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
                   	<td><?php echo $filas['visita_guiada'];?></td>
                   	<td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
                   	<td><?php echo $filas['fecha_even'];?></td>
                   	<td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
                   	<td><?php echo $filas['n_mus'];?></td>
                   	<td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
                   	
                   	<td><input type="hidden" name="id" value="<?php echo $filas['id_evento'];?>"></td>                        
                   	
                   	<td>
                   		<a href="../vista/modEve.php?id=<?php echo $filas['id_evento'];?>"><img width="32px" height="32px" src="../images/editA.png">
                   		</a>
                   	</td>
                    
                    <td>
                   		<a href="../controlador/even.php?accion=Eliminar&id=<?php echo $filas['id_evento'];?>" name="accion" value="Eliminar"><img width="32px" height="32px" src="../images/deleteAz.png">
                   		</a>
                   	</td>
                    
                   </tr>
<?php				
			}
			return $this->eventos;
		}

		public function setEvento($id,$neve,$deve,$heve,$veve,$feve,$idm){
		    $insertar=$this->db->query("INSERT INTO Eventos (`id_evento`, `nombre_even`, `descripcion_even`, `hora_eve`, `visita_guiada`, `fecha_even`, `n_mus`) VALUES  ('$id','$neve','$deve','$heve','$veve','$feve','$idm')");
			if ($insertar) {
				return true;
			}else{
				return "error a guardar los datos".mysqli_error($this->db=Conectar::conexion());
			}
		}

		public function delEvento($id){

			$eliminar=$this->db->query("delete from Eventos where id_evento='$id'");
			if ($eliminar) {
				return true;
			}else{
				return "error al eliminar".mysqli_error($this->db=Conectar::conexion());
			}
		}

		public function modEvento($id,$neve,$deve,$heve,$veve,$feve){

			$modificar=$this->db->query("UPDATE Eventos SET nombre_even='$neve',descripcion_even='$deve',hora_eve='$heve',visita_guiada='$veve',fecha_even='$feve'where id_evento='$id'");
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
