<?= head($data)?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1>PANEL DE RECIBOS</h1>
				</div>
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="<?=  base_url()?>">Home</a></li>
						<li class="breadcrumb-item active"><?= $data['page_name']?></li>
					</ol>
				</div>
			</div>
		</div><!-- /.container-fluid -->
	</section>
	<!-- Main content -->
	<section class="content">

		<div class="container-fluid">
			<div class="row">
				<div class="col-12">
					<!-- Default box -->
					<div class="card">
						<div class="card-header">
							<h3 class="card-title">CREAR NUEVO RECIBO</h3>
						</div>
						<div class="card-body">
							<form id="formRecibo">
								<div class="form-row align-items-center">
									<div class=" col-sm-4 my-1" id="">
										<select class="form-control select2" data-live-search="true" data-style="btn-outline-primary"
											data-size="5" name="listPersonal" id="listPersonal"></select>
									</div>
									<div class=" col-sm-2 my-1">
										<select class="form-control select2" data-live-search="true" data-style="btn-outline-primary"
											data-size="5" name="listUnidad" id="listUnidad"></select>
									</div>
									<div class="col-sm-1 my-1">
										<label class="sr-only" for="inlineFormInputName">FECHA</label>
										<input type="date" class="form-control" id="txtfecha" name="txtfecha">
									</div>
									<div class="col-sm-5 my-1">
										<label class="sr-only" for="inlineFormInputName">RUTA</label>
										<input type="text" class="form-control" placeholder="RUTA" id="txtRuta" name="txtRuta">
									</div>
								</div>

								<button type="submit" id="btnActionForm" class="btn btn-primary btn-sm my-2"> <i
										class="fas fa-plus"></i><span id="btnText" class="ml-1">CREAR</span>
								</button>
							</form>
						</div>
						<!-- /.card-body -->
					</div>
					<!-- /.card -->
				</div>
			</div>

			<div class="row">
				<div class="col-6">
					<div class="card">
						<div class="py-2 px-2 d-flex justify-content-between align-items-center">
							<h2>N° 01</h2>
						</div>
						<div class="dropdown-divider"></div>
						<div class="card-body">
							<form id="formReciboVueltas">
								<div class="row">
									<div class=" col-8 mb-3">
										<label for="txtOperador" class="form-label">NOMBRE DEL OPERADOR</label>
										<input type="text" class="form-control" id="txtOperador" aria-describedby="Nombre Operador">
									</div>
									<div class=" col-2 mb-3">
										<label for="txtUnidad" class="form-label">UNIDAD</label>
										<input type="text" class="form-control" id="txtUnidad" aria-describedby="Nº Unidad">
									</div>
									<div class=" col-2 mb-3">
										<label for="txtFecha" class="form-label">FECHA</label>
										<input type="text" class="form-control" id="txtFecha" aria-describedby="Fecha del recibo">
									</div>
									<div class=" col-12 mb-3">
										<label for="txtRuta" class="form-label">RUTA ASIGNADA</label>
										<input type="text" class="form-control" id="txtRuta" aria-describedby="Ruta de la unidad">
									</div>
								</div>

								<div class="dropdown-divider"></div>
								<div class="row">

									<div class="col-6">
										<div class="card">
											<div class="card-header text-center">
												<h6>VUELTA Nº 01</h6>
											</div>
											<div class="card-body">
												<div class="row">
													<div class="col-6  mb-3">
														<label for="txtRuta" class="form-label">KM</label>
														<input type="text" class="form-control form-control-sm" id="txtRuta"
															aria-describedby="Ruta de la unidad">
													</div>
													<div class="col-6  mb-3">
														<label for="txtRuta" class="form-label">HORA</label>
														<input type="text" class="form-control form-control-sm" id="txtRuta"
															aria-describedby="Ruta de la unidad">
													</div>
												</div>
												<div class="row">
													<div class="col-6  mb-3">
														<label for="txtRuta" class="form-label">MONTO BS</label>
														<input type="text" class="form-control form-control-sm" id="txtRuta"
															aria-describedby="Ruta de la unidad">
													</div>
													<div class="col-6 mb-3">
														<label for="txtRuta" class="form-label">MONTO $</label>
														<input type="text" class="form-control form-control-sm" id="txtRuta"
															aria-describedby="Ruta de la unidad">
													</div>
												</div>
												<button type="submit" class="btn btn-primary btn-sm">APLICAR</button>
											</div>
										</div>
									</div>
									<div class="col-6">
										<div class="card">
											<div class="card-header text-center">
												<h6>VUELTA Nº 02</h6>
											</div>
											<div class="card-body">
												<div class="row">
													<div class="col-6  mb-3">
														<label for="txtRuta" class="form-label">KM</label>
														<input type="text" class="form-control form-control-sm" id="txtRuta"
															aria-describedby="Ruta de la unidad">
													</div>
													<div class="col-6  mb-3">
														<label for="txtRuta" class="form-label">HORA</label>
														<input type="text" class="form-control form-control-sm" id="txtRuta"
															aria-describedby="Ruta de la unidad">
													</div>
												</div>
												<div class="row">
													<div class="col-6  mb-3">
														<label for="txtRuta" class="form-label">MONTO BS</label>
														<input type="text" class="form-control form-control-sm" id="txtRuta"
															aria-describedby="Ruta de la unidad">
													</div>
													<div class="col-6 mb-3">
														<label for="txtRuta" class="form-label">MONTO $</label>
														<input type="text" class="form-control form-control-sm" id="txtRuta"
															aria-describedby="Ruta de la unidad">
													</div>
												</div>
												<button type="submit" class="btn btn-primary btn-sm">APLICAR</button>
											</div>
										</div>
									</div>
									<div class="col-6">
										<div class="card">
											<div class="card-header text-center">
												<h6>VUELTA Nº 03</h6>
											</div>
											<div class="card-body">
												<div class="row">
													<div class="col-6  mb-3">
														<label for="txtRuta" class="form-label">KM</label>
														<input type="text" class="form-control form-control-sm" id="txtRuta"
															aria-describedby="Ruta de la unidad">
													</div>
													<div class="col-6  mb-3">
														<label for="txtRuta" class="form-label">HORA</label>
														<input type="text" class="form-control form-control-sm" id="txtRuta"
															aria-describedby="Ruta de la unidad">
													</div>
												</div>
												<div class="row">
													<div class="col-6  mb-3">
														<label for="txtRuta" class="form-label">MONTO BS</label>
														<input type="text" class="form-control form-control-sm" id="txtRuta"
															aria-describedby="Ruta de la unidad">
													</div>
													<div class="col-6 mb-3">
														<label for="txtRuta" class="form-label">MONTO $</label>
														<input type="text" class="form-control form-control-sm" id="txtRuta"
															aria-describedby="Ruta de la unidad">
													</div>
												</div>
												<button type="submit" class="btn btn-primary btn-sm">APLICAR</button>
											</div>
										</div>
									</div>
									<div class="col-6">
										<div class="card">
											<div class="card-header text-center">
												<h6>VUELTA Nº 04</h6>
											</div>
											<div class="card-body">
												<div class="row">
													<div class="col-6  mb-3">
														<label for="txtRuta" class="form-label">KM</label>
														<input type="text" class="form-control form-control-sm" id="txtRuta"
															aria-describedby="Ruta de la unidad">
													</div>
													<div class="col-6  mb-3">
														<label for="txtRuta" class="form-label">HORA</label>
														<input type="text" class="form-control form-control-sm" id="txtRuta"
															aria-describedby="Ruta de la unidad">
													</div>
												</div>
												<div class="row">
													<div class="col-6  mb-3">
														<label for="txtRuta" class="form-label">MONTO BS</label>
														<input type="text" class="form-control form-control-sm" id="txtRuta"
															aria-describedby="Ruta de la unidad">
													</div>
													<div class="col-6 mb-3">
														<label for="txtRuta" class="form-label">MONTO $</label>
														<input type="text" class="form-control form-control-sm" id="txtRuta"
															aria-describedby="Ruta de la unidad">
													</div>
												</div>
												<button type="submit" class="btn btn-primary btn-sm">APLICAR</button>
											</div>
										</div>
									</div>

								</div>
								<div class="dropdown-divider"></div>
								<div class="row">
									<div class="col-12 mb-3">
										<label for="txtRuta" class="form-label">OBSERVACIONES</label>
										<textarea name="" id="" class="form-control" cols="30"></textarea>
									</div>
									<div class="col-6  mb-3">
										<label for="txtRuta" class="form-label">MONTO RECAUDADO BS</label>
										<input type="text" class="form-control" id="txtRuta" aria-describedby="Ruta de la unidad">
									</div>
									<div class="col-6  mb-3">
										<label for="txtRuta" class="form-label">MONTO RECAUDADO $</label>
										<input type="text" class="form-control" id="txtRuta" aria-describedby="Ruta de la unidad">
									</div>
								</div>

							</form>
							<button type="submit" class="btn btn-primary">CERRAR RECIBO</button>

						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- /.content -->
</div>
<!-- /.content-wrapper -->
<?= footer($data)?>