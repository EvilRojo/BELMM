<?php

include ('bd.php');
 
class Categoria{

	    private $db;
		private $categorias;
		public function __construct(){
			$this->db=Conectar::conexion();
			$this->categorias=array();
		}

		public function getCategoria(){
			$consulta=$this->db->query("select * from Categorias");
			while ($filas=$consulta->fetch_assoc()) {
				$this->categorias[]=$filas;
?>
                   <tr>
                   	<td><?php echo $filas['tipo_museo'];?></td>
                   	
                   	
                   	<input type="hidden" name="id" value="<?php echo $filas['id_catego'];?>">             
                   	
                   	<td align="center">
                   		<a href="../vista/modCat.php?id=<?php echo $filas['id_catego'];?>"><img width="32px" height="32px" src="../images/editA.png">
                   		</a>
                   	</td>
                   	
                   	<td align="center">
                   		<a href="../controlador/categ.php?accion=Eliminar&id=<?php echo $filas['id_catego'];?>" name="accion" value="Eliminar"><img width="32px" height="32px" src="../images/deleteAz.png">
                   		</a>
                   	</td>
                   	

                   </tr>
<?php				
			}
			return $this->categorias;
		}

		public function setCategoria($id,$TM){
		    $insertar=$this->db->query("INSERT INTO `Categorias` (`id_catego`,`tipo_museo`) 
        VALUES ('$id','$TM')");
			if ($insertar) {
				return true;
			}else{
				return "error a guardar los datos".mysqli_error($this->db=Conectar::conexion());
			}
		}

		public function delCategoria($id){

			$eliminar=$this->db->query("delete from Categorias where id_catego='$id'");
			if ($eliminar) {
				return true;
			}else{
				return "error al eliminar".mysqli_error($this->db=Conectar::conexion());
			}
		}

		public function modCategoria($id,$TM){

			$modificar=$this->db->query("UPDATE Categorias SET tipo_museo='$TM'where id_catego='$id'");
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
