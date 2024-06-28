<?php
class ReciboModel extends Mysql {

	public function __construct(){
		parent::__construct();
	}
	public function selectPersonal(){
		$sql = "SELECT p.*, c.* FROM table_cargo c 
						INNER JOIN table_personal p  ON p.personal_cargo = c.id_cargo WHERE c.id_cargo = 23 ORDER BY p.personal_cedula desc ";
		$request = $this->select_all($sql);
		return $request;
	}
	public function selectUnidad(){
		$sql = "SELECT * FROM table_flota WHERE status_unidad != 0 AND status_unidad != 2";
		$request = $this->select_all($sql);
		return $request;
	}
	public function setRecibo(int $intPersonal,int $intUnidad, string $srtfecha, string $srtRuta){
		$this->intPersonal = $intPersonal;
		$this->intUnidad  = $intUnidad;
		$this->srtfecha  = $srtfecha;
		$this->srtRuta  = $srtRuta;
		$sql = "INSERT INTO table_recibo (id_unidad,id_operador,ruta_recibo,fecha_recibo,status_recibo) VALUES (?, ?, ?, ?, ?, ?)";
		$arrData = array($this->intUnidad,$this->intPersonal,$this->srtRuta,$this->srtfecha,1);
		$request_insert = $this->insert($sql,$arrData);//enviamos el query y el array de datos 
		$return = $request_insert;//retorna el id insertado
		return $return;
	}
}