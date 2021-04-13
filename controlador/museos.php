<?php
require_once ("../modelo/museos.php");
	if (isset($_GET['accion'])) {
		$acc=$_GET['accion'];
	switch ($acc) {
				case 'Eliminar':
            $id = $_GET['id'];  
            $mus = new Museo();
            eliminarMuseo($mus,$id);          		
			break;
	}
	}
	if(isset($_POST['accion'])){
       $accion = $_POST['accion'];
       switch ($accion) {
       	case 'Agregar':
			$mus = new Museo();
				insertarMuseo($mus);       		
       	break;       	
       	case 'Actualizar':
       	  $mus = new Museo(); 
       	    $id = $_POST['id'];
       		modificarMuseo($mus,$id);
       	break;
       }
	}

	function insertarMuseo($mus){		
		$id=$_POST['id'];
		$nmu=$_POST['nmu'];
		$telmu=$_POST['telmu'];
		$hmu=$_POST['hmu'];
		$tmu=$_POST['tmu'];
		$tse=$_POST['tse'];
		$tbo=$_POST['tbo'];
		$ubi=$_POST['ubi'];
		$map=$_POST['mapa'];
		$img=$_POST['img'];

		$res = $mus->setMuseo($id,$nmu,$telmu,$hmu,$tmu,$tse,$tbo,$ubi,$map,$img);
		
		if ($res) {
		header('Location: ../vista/manMuseos.php');
		$mus->TerminarConexion();			
		}else{
		return "error al eliminar".mysqli_error($this->db=Conectar::conexion());
		}
	}
	function mostrarMuseos($mus){

         $res = $mus->getMuseo();

	}
	function eliminarMuseo($mus,$id){         
       $res = $mus->delMuseo($id);

       if ($res) {
		header("Location: ../vista/manMuseos.php");
		$mus->TerminarConexion();			
		}
	}
	function modificarMuseo($mus,$id){
	    $id=$_POST['id'];
	    $nmu=$_POST['nmu'];
	    $telmu=$_POST['telmu'];
	    $hmu=$_POST['hmu'];
	    $tmu=$_POST['tmu'];
	    $tse=$_POST['tse'];
	    $tbo=$_POST['tbo'];
		$ubi=$_POST['ubi'];
		$map=$_POST['mapa'];
        $img=$_POST['img'];
        
        
        
	    $res = $mus->modMuseo($id,$nmu,$telmu,$hmu,$tmu,$tse,$tbo,$ubi,$map,$img);

	    if ($res) {
		header("Location: ../vista/manMuseos.php");
		$mus->TerminarConexion();			
		} 	
	}	
?>