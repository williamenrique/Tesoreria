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
		$sql = "INSERT INTO table_recibo (id_unidad,id_operador,ruta_recibo,fecha_recibo,status_recibo) VALUES (?, ?, ?, ?, ?)";
		$arrData = array($this->intUnidad,$this->intPersonal,$this->srtRuta,$this->srtfecha,1);
		$request_insert = $this->insert($sql,$arrData);//enviamos el query y el array de datos 
		$return = $request_insert;//retorna el id insertado
		$sql_vuelta = "INSERT INTO table_vuelta (id_recibo,vuelta_n) VALUES (?,?)";
		$arrData_vuelta1 = array($request_insert,1);
		$arrData_vuelta2 = array($request_insert,2);
		$arrData_vuelta3 = array($request_insert,3);
		$arrData_vuelta4 = array($request_insert,4);
		$request_vuelta = $this->insert($sql_vuelta,$arrData_vuelta1);
		$request_vuelta1 = $this->insert($sql_vuelta,$arrData_vuelta2);
		$request_vuelta2 = $this->insert($sql_vuelta,$arrData_vuelta3);
		$request_vuelta3 = $this->insert($sql_vuelta,$arrData_vuelta4);
		return $return;
	}
}