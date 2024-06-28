document.addEventListener('DOMContentLoaded', function () {
	/********** crear un recibo *********/
	if (document.querySelector("#formRecibo")) {
		var formRecibo = document.querySelector('#formRecibo')
			//agregar el evento al boton del formulario
		formRecibo.onsubmit = function (e) {
			e.preventDefault()
			let request = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP')
			let ajaxUrl = base_url + 'Recibo/setRecibo'
			//creamos un objeto del formulario con los datos haciendo referencia a formData
			let formData = new FormData(formRecibo )
			//prepara los datos por ajax preparando el dom
			request.open('POST', ajaxUrl, true)
			//envio de datos del formulario que se almacena enla variable
			request.send(formData)
			//obtenemos los resultados
			request.onreadystatechange = function () {
				if (request.readyState == 4 && request.status == 200) {
					//obtenemos los datos y convertimos en JSON
					let objData = JSON.parse(request.responseText)
					//leemos el ststus de la respuesta
					if (objData.status) {
						notifi(objData.msg, 'success')
						formRecibo.reset()
						// tableUser.ajax.reload()
					} else {
						notifi(objData.msg, 'error')
					}
				}
			}
		}
	}
	personal()
	unidad()
},false)

const personal = () => {
	let ajaxUrl = base_url + "Recibo/getListPersonal"
		//creamos el objeto para os navegadores
		var request = (window.XMLHttpRequest) ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP')
		//abrimos la conexion y enviamos los parametros para la peticion
		request.open("GET", ajaxUrl, true)
		request.send()
		request.onreadystatechange = function () {
			if (request.readyState == 4 && request.status == 200) {
				//option obtenidos del controlador
				document.querySelector('#listPersonal').innerHTML = request.responseText
				//seleccionando el primer option
				// $("#listPersonal").selectpicker()
			}
		}
}
const unidad = () => {
	let ajaxUrl = base_url + "Recibo/getSelectUnidad"
		//creamos el objeto para os navegadores
		var request = (window.XMLHttpRequest) ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP')
		//abrimos la conexion y enviamos los parametros para la peticion
		request.open("GET", ajaxUrl, true)
		request.send()
		request.onreadystatechange = function () {
			if (request.readyState == 4 && request.status == 200) {
				//option obtenidos del controlador
				document.querySelector('#listUnidad').innerHTML = request.responseText
				//seleccionando el primer option
				// $("#listUnidad").selectpicker()
			}
		}
}

