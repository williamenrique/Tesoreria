<?php
header('Access-Control-Allow-Origin: *');
class Recibo extends Controllers{

	public function __construct(){
		session_start();
		if (empty($_SESSION['login'])) {
			header("Location:".base_url().'login');
		}
		parent::__construct();
	}
	/* //invocar la vista con views y usamos getView y pasamos parametros esta clase y la vista
		//incluimos un arreglo que contendra toda la informacion que se enviara al home
	 */
	public function recibo(){
		$data['page_tag'] = "RECIBO";
		$data['page_title'] = "Recibo";
		$data['page_name'] = "Recibo";
		$data['page_link'] = "active-recibo";//activar el menu desplegable o link solo
		$data['page_menu_open'] = "menu-open-plantilla";//abrir el desplegable
		$data['page_link_acitvo'] = "link-plantilla";// seleccionar el link en el momento dentro del desplegable
		$data['page_functions'] = "function.recibo.js";
		$this->views->getViews($this, "recibo", $data);
	}
	/******** cagar unidades en el select *********/
	public function getSelectUnidad(){
		$htmlOptions = "";
		$arrData = $this->model->selectUnidad();
		if(count($arrData) > 0){
			
			$htmlOptions .= '<option selected>UNIDAD</option>';
			for ($i=0; $i < count($arrData); $i++) { 
				$htmlOptions .= '<option value="'.$arrData[$i]['id_flota'].'">'.$arrData[$i]['id_unidad'].'</option>';
			}
		}
		echo $htmlOptions;
		die();
	}
	/******** cargar personal en el select *********/
	public function getListPersonal(){
		$htmlOptions = "";
		$arrData = $this->model->selectPersonal();
		if(count($arrData) > 0){
			$htmlOptions .= '<option selected>SELECCIONE OPERADOR</option>';
			for ($i=0; $i < count($arrData); $i++) { 
				$htmlOptions .= '<option value="'.$arrData[$i]['id_personal'].'">'.$arrData[$i]['personal_nombre'].' - '.$arrData[$i]['personal_cedula'].'</option>';
			}
		}
		echo $htmlOptions;
		die();
	}
	/******** creamos el recibo *********/
	public function setRecibo(){

	}
}