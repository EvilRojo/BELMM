<?php
require_once ("../modelo/categ.php");
	if (isset($_GET['accion'])) {
		$acc=$_GET['accion'];
	switch ($acc) {
				case 'Eliminar':
            $id = $_GET['id'];  
            $cat = new Categoria();
            eliminarCategoria($cat,$id);          		
			break;
	}
	}
	if(isset($_POST['accion'])){
       $accion = $_POST['accion'];
       switch ($accion) {
       	case 'Agregar':
			$cat = new Categoria();
				insertarCategoria($cat);       		
       	break;       	
       	case 'Actualizar':
       	  $cat = new Categoria(); 
       	    $id = $_POST['id'];
       		modificarCategoria($cat,$id);
       	break;
       }
	}

	function insertarCategoria($cat){		
		$id=$_POST['id'];
		$TM=$_POST['TM'];
		$res = $cat->setCategoria($id,$TM);
		
		if ($res) {
		header('Location: ../vista/manCat.php');
		$cat->TerminarConexion();			
		}
		
	}
	function mostrarCategoria($cat){

         $res = $cat->getCategoria();

	}
	function eliminarCategoria($cat,$id){         
       $res = $cat->delCategoria($id);

       if ($res) {
		header("Location: ../vista/manCat.php");
		$cat->TerminarConexion();			
		}
	}
	function modificarCategoria($cat,$id){
	    
		$id=$_POST['id'];
		$TM=$_POST['TM'];
	    $res = $cat->modCategoria($id,$TM);

	    if ($res) {
		header("Location: ../vista/manCat.php");
		$cat->TerminarConexion();			
		} 	
	}	
?>