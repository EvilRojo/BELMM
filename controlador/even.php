<?php
require_once ("../modelo/even.php");
	if (isset($_GET['accion'])) {
		$acc=$_GET['accion'];
	switch ($acc) {
				case 'Eliminar':
            $id = $_GET['id'];  
            $eve = new Evento();
            eliminarEvento($eve,$id);          		
			break;
	}
	}
	if(isset($_POST['accion'])){
       $accion = $_POST['accion'];
       switch ($accion) {
       	case 'Agregar':
			$eve = new Evento();
				insertarEvento($eve);       		
       	break;       	
       	case 'Actualizar':
       	  $eve = new Evento(); 
       	    $id = $_POST['id'];
       		modificarEvento($eve,$id);
       	break;
       }
	}

	function insertarEvento($eve){		
		$id=$_POST['id'];
		$neve=$_POST['neve'];
		$deve=$_POST['deve'];
		$heve=$_POST['heve'];
		$veve=$_POST['veve'];
		$feve=$_POST['feve'];
		$idm=$_POST['id_museo'];
		$res = $eve->setEvento($id,$neve,$deve,$heve,$veve,$feve,$idm);
		
		if ($res) {
		header('Location: ../vista/manEve.php');
		$eve->TerminarConexion();			
		}
		
	}
	function mostrarEvento($eve){

         $res = $eve->getEvento();

	}
	function eliminarEvento($eve,$id){         
       $res = $eve->delEvento($id);

       if ($res) {
		header("Location: ../vista/manEve.php");
		$pre->TerminarConexion();			
		}
	}
	function modificarEvento($eve,$id){
	    
		$id=$_POST['id'];
		$neve=$_POST['neve'];
		$deve=$_POST['deve'];
		$heve=$_POST['heve'];
		$veve=$_POST['veve'];
		$feve=$_POST['feve'];
	    $res = $eve->modEvento($id,$neve,$deve,$heve,$veve,$feve);

	    if ($res) {
		header("Location: ../vista/manEve.php");
		$eve->TerminarConexion();			
		} 	
	}	
?>