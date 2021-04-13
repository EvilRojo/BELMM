<?php
include ('bd.php');
 
class Buscador{
	
	private $db;
    private $busqueda;
			public function __construct(){
			$this->db=Conectar::conexion();
			$this->busqueda=array();
		}
    public function buscar()
    {
        $busqueda =$_GET['s'];
        $red= explode(" ", $busqueda);
        foreach ($red as $rock){
           $consulta=$this->db->query("SELECT * FROM Museos WHERE nombre_museo like '%".$rock."%' or Ubica like '%".$rock."%' or TMus2 like '%".$rock."%' order by nombre_museo"); 
           //$consulta=$this->db->query("SELECT * FROM Museos WHERE nombre_museo like '%".$rock."%' or Ubica like '%".$rock."%' or TMus2 like '%".$rock."%' "); 
           while ($reg=$consulta->fetch_assoc())
			{
				$this->busqueda[] = $reg;
			}
        }
        return $this->busqueda;
    } 
    
	public function mostrar($id)
    {

			$consulta=$this->db->query("SELECT * FROM Museos WHERE id_museo='$id'");
			while ($reg=$consulta->fetch_assoc())
			{
				$this->busqueda[] = $reg;
			}
			return $this->busqueda;
		}
	
	public function mostrarE($id)
    {

			$consulta=$this->db->query("SELECT * FROM Eventos WHERE (select nombre_museo from Museos where id_museo='$id') = n_mus");
			while ($reg=$consulta->fetch_assoc())
			{
				$this->busqueda[] = $reg;
			}
			return $this->busqueda;
		}
	}
	
?>