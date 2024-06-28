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
								<div class=" form-row align-items-center">
									<div class=" col-sm-12 my-1">
										<label class="sr-only" for="inlineFormInputName">DESCRIPCION</label>
										<input type="text" class="form-control" placeholder="DESCRIPCION" id="txtDescripcion"
											name="txtDescripcion">
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
				<div class="col-3">
					<div class="card">
						<div class="cabecera d-flex justify-content-between">
							<h2>N° 01</h2>
							<h5>27-06-24</h5>
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