<?php
require_once ("../modelo/servi.php");
	if (isset($_GET['accion'])) {
		$acc=$_GET['accion'];
	switch ($acc) {
				case 'Eliminar':
            $id = $_GET['id'];  
            $ser = new Servicio();
            eliminarServicio($ser,$id);          		
			break;
	}
	}
	if(isset($_POST['accion'])){
       $accion = $_POST['accion'];
       switch ($accion) {
       	case 'Agregar':
			$ser = new Servicio();
				insertarServicio($ser);       		
       	break;       	
       	case 'Actualizar':
       	  $ser = new Servicio(); 
       	    $id = $_POST['id'];
       		modificarServicio($ser,$id);
       	break;
       }
	}

	function insertarServicio($ser){		
		$idser=$_POST['idser'];
		$tser=$_POST['tser'];
		$cser=$_POST['cser'];
		$res = $ser->setServicio($idser,$tser,$cser);
		
		if ($res) {
		header('Location: ../vista/manSer.php');
		$ser->TerminarConexion();			
		}
		
	}
	function mostrarServicio($ser){

         $res = $ser->getServicio();

	}
	function eliminarServicio($ser,$id){         
       $res = $ser->delServicio($id);

       if ($res) {
		header("Location: ../vista/manSer.php");
		$ser->TerminarConexion();			
		}
	}
	
	function modificarServicio($ser,$id){
	    
		$idser=$_POST['idser'];
		$tser=$_POST['tser'];
		$cser=$_POST['cser'];
	    $res = $ser->modServicio($idser,$tser,$cser);

	    if ($res) {
		header("Location: ../vista/manSer.php");
		$ser->TerminarConexion();			
		} 	
	}	
?>