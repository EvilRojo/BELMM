<?php

include ('bd.php');
 
class Precio{

	    private $db;
		private $precios;
		public function __construct(){
			$this->db=Conectar::conexion();
			$this->precios=array();
		}

		public function getPrecio(){
			$consulta=$this->db->query("select * from Precios");
			while ($filas=$consulta->fetch_assoc()) {
				$this->precio[]=$filas;
?>
                   <tr>
                   	<td><?php echo $filas['tipo_boleto'];?></td>
                   	<td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
                   	<td><?php echo $filas['precio_boleto'];?></td>
                   	<td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
                   	
                   	<td><input type="hidden" name="id" value="<?php echo $filas['id_precio'];?>"></td>                        
                   	
                   	<td>
                   		<a href="../vista/modPre.php?id=<?php echo $filas['id_precio'];?>"><img width="32px" height="32px" src="../images/editA.png">
                   		</a>
                   	</td>
                   	
                   	<td>
                   		<a href="../controlador/prec.php?accion=Eliminar&id=<?php echo $filas['id_precio'];?>" name="accion" value="Eliminar"><img width="32px" height="32px" src="../images/deleteAz.png">
                   		</a>
                   	</td>

                   </tr>
<?php				
			}
			return $this->precio;
		}

		public function setPrecio($id,$TB,$PB){
		    $insertar=$this->db->query("INSERT INTO `Precios` (`id_precio`,`tipo_boleto`,`precio_boleto`) VALUES ('$id','$TB','$PB')");
			if ($insertar) {
				return true;
			}else{
				return "error a guardar los datos".mysqli_error($this->db=Conectar::conexion());
			}
		}

		public function delPrecio($id){

			$eliminar=$this->db->query("delete from Precios where id_precio='$id'");
			if ($eliminar) {
				return true;
			}else{
				return "error al eliminar".mysqli_error($this->db=Conectar::conexion());
			}
		}

		public function modPrecio($id,$TB,$PB){

			$modificar=$this->db->query("UPDATE Precios SET tipo_boleto='$TB',precio_boleto='$PB' where id_precio='$id'");
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
