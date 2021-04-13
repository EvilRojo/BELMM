<?php
require_once ("../modelo/busq.php");
	if (isset($_GET['accion'])) {
		$acc=$_GET['accion'];
	switch ($acc) {
				case 'Buscar':
           
            $bus = new Buscador();
            buscar($mus,$id);          		
			break;
	}
	}
	
function buscar($bus){         
       $buscame = $bus->buscar();
    
    if ($buscame) {
		header("Location: ../vista/resultados.php");
		$bus->TerminarConexion();			
		}
	}
?>
