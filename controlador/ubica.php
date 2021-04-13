<?php
require_once ("../modelo/ubica.php");
	if (isset($_GET['accion'])) {
		$acc=$_GET['accion'];
	switch ($acc) {
				case 'Eliminar':
            $id_ubica = $_GET['id_ubica'];  
            $ubi = new Ubicacion();
            eliminarUbicacion($ubi,$id_ubica);          		
			break;
	}
	}
	if(isset($_POST['accion'])){
       $accion = $_POST['accion'];
       switch ($accion) {
       	case 'Agregar':
			$ubi = new Ubicacion();
				insertarUbicacion($ubi);       		
       	break;       	
       	case 'Actualizar':
       	  $ubi = new Ubicacion(); 
       	    $id = $_POST['id_ubica'];
       		modificarUbicacion($ubi,$id);
       	break;
       }
	}

	function insertarUbicacion($ubi){		
		$id=$_POST['id_ubica'];
		$alca=$_POST['alca'];
		$ciu=$_POST['ciu'];
		$col=$_POST['col'];
		$cp=$_POST['cp'];
		$c1=$_POST['c1'];
		$c2=$_POST['c2'];
		$num=$_POST['num'];
		$res = $ubi->setUbicacion($id,$alca,$ciu,$col,$cp,$c1,$c2,$num);
		
		if ($res) {
		header('Location: ../vista/manUbi.php');
		$ubi->TerminarConexion();			
		}
		
	}
	function mostrarUbicacion($ubi){

         $res = $ubi->getUbicacion();

	}
	function eliminarUbicacion($ubi,$id_ubica){         
       $res = $ubi->delUbicacion($id_ubica);

       if ($res) {
		header("Location: ../vista/manUbi.php");
		$ubi->TerminarConexion();			
		}
	}
	function modificarUbicacion($ubi,$id){
	    
		$alca=$_POST['alca'];
		$ciu=$_POST['ciu'];
		$col=$_POST['col'];
		$cp=$_POST['cp'];
		$c1=$_POST['c1'];
		$c2=$_POST['c2'];
		$num=$_POST['num'];
	    $res = $ubi->modInstructor($id,$alca,$ciu,$col,$cp,$c1,$c2,$num);

	    if ($res) {
		header("Location: ../vista/manUbi.php");
		$ubi->TerminarConexion();			
		} 	
	}	
?>