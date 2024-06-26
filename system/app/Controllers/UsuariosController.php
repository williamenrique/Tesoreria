<?php
header('Access-Control-Allow-Origin: *');
class Usuarios extends Controllers{

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
	public function usuarios(){
		$data['page_tag'] = "USUARIOS";
		$data['page_title'] = "USUARIOS";
		$data['page_name'] = "Usuarios";
		$data['page_link'] = "active-user";//activar el menu desplegable o link solo
		$data['page_menu_open'] = "menu-open-user";//abrir el desplegable
		$data['page_link_acitvo'] = "link-user";// seleccionar el link en el momento dentro del desplegable
		$data['page_functions'] = "function.user.js";
		$this->views->getViews($this, "usuarios", $data);
	}
}