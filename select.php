<?php

    $codigo = "codigo";
    $nombre = "nombre";
    $poblacion = "poblacion";
    $capital = "capital";
    $cod_municipio = "cod_municipio";
    $nombre_muni = "nombre_muni";
    $poblacion_muni = "poblacion_muni";
    
class VerDatos{
    private $codigo;
    private $nombre;
    private $poblacion;
    private $capital;
    private $cod_municipio;
    private $nombre_muni;
    private $poblacion_muni;


    public function getCodigo(){
		return $this->codigo;
	}
	public function setCodigo($codigo){
		$this->codigo= $codigo;
	}
	public function getNombre(){
		return $this->nombre;
	}
	public function setNombre($nombre){
		$this->nombre=$nombre;
	}
	public function getPoblacion(){
		return $this->poblacion;
	}
	public function setPoblacion($poblacion){
		$this->poblacion=$poblacion;	
	}
    public function getCapital(){
		return $this->capital;
	}
	public function setCapital($capital){
		$this->capital=$capital;	
	}
	public function getCodMunicipio(){
		return $this->cod_municipio;
	}
	public function setCodMunicipio($cod_municipio){
		$this->cod_municipio = $cod_municipio;
	}
    public function getNombreMuni(){
		return $this->nombre_muni;
	}
    public function setNombreMuni($nombre_muni){
		$this->nombre_muni= $nombre_muni;
	}
    public function getPoblacionMuni(){
		return $this->poblacion_muni;
	}
    public function setPoblacionMuni($poblacion_muni){
		$this->poblacion_muni = $poblacion_muni;
	}
	public function __construct(
		$codigo,
		$nombre,
		$poblacion,
        $capital,
		$cod_municipio,
        $nombre_muni,
        $poblacion_muni)
		{
		$this->codigo = $codigo;
		$this->nombre= $nombre;
        $this->poblacion=$poblacion;
		$this->capital= $capital;
		$this->cod_municipio= $cod_municipio;
        $this->nombre_muni= $nombre_muni;
        $this->poblacion_muni= $poblacion_muni;
	}
    public function consultar(){
        include 'conexion.php';
        if ($_SERVER["REQUEST_METHOD"]=="GET"){
            
            $busqueda=$_GET["dato"];
            $sql="SELECT * FROM departamento WHERE nombre='$busqueda'";
            $consulta=mysqli_query($conexion, $sql);
            if(!$consulta){
                echo "Error al ejecutar la consulta";
            }
            if(mysqli_num_rows($consulta)>0){
                while($fila=mysqli_fetch_assoc($consulta)){
                    echo "Código: ".$fila["cod_dpto"] ."<br>" ."Nombre departamento: " .$fila["nombre"] ."<br>"."Población: ".$fila['poblacion']."<br>"."capital: ".$fila["capital"]."<br>";
                }
            }
            else{
                echo "No se encontraron resultados.";
            }
            }
    }

}
$ver=new VerDatos($codigo, $nombre, $poblacion, $capital, $cod_municipio, $nombre_muni, $poblacion_muni);
$ver->consultar();
?>
