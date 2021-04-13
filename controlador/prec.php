<?php
require_once ("../modelo/prec.php");
	if (isset($_GET['accion'])) {
		$acc=$_GET['accion'];
	switch ($acc) {
				case 'Eliminar':
            $id = $_GET['id'];  
            $pre = new Precio();
            eliminarPrecio($pre,$id);          		
			break;
	}
	}
	if(isset($_POST['accion'])){
       $accion = $_POST['accion'];
       switch ($accion) {
       	case 'Agregar':
			$pre = new Precio();
				insertarPrecio($pre);       		
       	break;       	
       	case 'Actualizar':
       	  $pre = new Precio(); 
       	    $id = $_POST['id'];
       		modificarPrecio($pre,$id);
       	break;
       }
	}

	function insertarPrecio($pre){		
		$id=$_POST['id'];
		$TB=$_POST['TB'];
		$PB=$_POST['PB'];
		$res = $pre->setPrecio($id,$TB,$PB);
		
		if ($res) {
		header('Location: ../vista/manPre.php');
		$pre->TerminarConexion();			
		}
		
	}
	function mostrarPrecio($pre){

         $res = $pre->getPrecio();

	}
	function eliminarPrecio($pre,$id){         
       $res = $pre->delPrecio($id);

       if ($res) {
		header("Location: ../vista/manPre.php");
		$pre->TerminarConexion();			
		}
	}
	function modificarPrecio($pre,$id){
	    
		$id=$_POST['id'];
		$TB=$_POST['TB'];
		$PB=$_POST['PB'];
	    $res = $pre->modPrecio($id,$TB,$PB);

	    if ($res) {
		header("Location: ../vista/manPre.php");
		$pre->TerminarConexion();			
		} 	
	}	
?>