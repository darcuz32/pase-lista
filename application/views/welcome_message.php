<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Required meta tags-->
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="au theme template">
		<meta name="author" content="Hau Nguyen">
		<meta name="keywords" content="au theme template">

		<!-- Title Page-->
		<title>Invitados</title>

		<!-- Fontfaces CSS-->
		<link href="<?php echo base_url(); ?>assets/css/font-face.css" rel="stylesheet" media="all">
		<link href="<?php echo base_url(); ?>vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
		<link href="<?php echo base_url(); ?>vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
		<link href="<?php echo base_url(); ?>vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

		<!-- Bootstrap CSS-->
		<link href="<?php echo base_url(); ?>vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

		<!-- Vendor CSS-->
		<link href="<?php echo base_url(); ?>vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
		<link href="<?php echo base_url(); ?>vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
		<link href="<?php echo base_url(); ?>vendor/wow/animate.css" rel="stylesheet" media="all">
		<link href="<?php echo base_url(); ?>vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
		<link href="<?php echo base_url(); ?>vendor/slick/slick.css" rel="stylesheet" media="all">
		<link href="<?php echo base_url(); ?>vendor/select2/select2.min.css" rel="stylesheet" media="all">
		<link href="<?php echo base_url(); ?>vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

		<!-- Main CSS-->
		<link href="<?php echo base_url(); ?>assets/css/theme.css" rel="stylesheet" media="all">
		<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css">

	</head>

	<body class="animsition">
		<div class="page-wrapper">
			

			

			<!-- PAGE CONTAINER-->
			<div class="page-container" style="padding-left: 0px !important">
				

				<!-- MAIN CONTENT-->
				<div class="main-content" style="padding-top: 20px !important">
					<div class="section__content section__content--p30">
						<div class="container-fluid">
							
							
							<div class="row">
								<div class="col-md-12">
									<div class="user-data m-b-30" style="padding: 28px;">
										<!-- DATA TABLE -->
										<h3 class="title-5 m-b-35">Invitados</h3>
										<div class="table-data__tool">
											<div class="table-data__tool-left">
												
											</div>
											<div class="table-data__tool-right">
												<button class="au-btn au-btn-icon au-btn--green au-btn--small" id="addGuest">
													<i class="zmdi zmdi-plus"></i>agregar invitado
												</button>
												<button class="au-btn au-btn-icon au-btn--blue au-btn--small">
													<i class="zmdi zmdi-download"></i>EXPORTAR
												</button>
											</div>
										</div>
										<div class="table-responsive table-responsive-data2">
											<table class="table table-data2" id="datatable">
												<thead>
													<tr>
														<th>Asistencia</th>
														<th>Nombre</th>
														<th>Cargo</th>
														<th>Teléfono</th>
														<th>Status</th>
														<th></th>
													</tr>
												</thead>
												<tbody>
													<tr class="tr-shadow">
														<td>
															<label class="au-checkbox">
																<input type="checkbox">
																<span class="au-checkmark"></span>
															</label>
														</td>
														<td>Lori Lynch</td>
														<td>Samsung S8 Black</td>
														<td>2018-09-27 02:12</td>
														<td>Processed</td>
														<td>
															<div class="table-data-feature">
																<button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
																	<i class="zmdi zmdi-edit"></i>
																</button>
																<button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
																	<i class="zmdi zmdi-delete"></i>
																</button>
															</div>
														</td>
													</tr>
													
												</tbody>
											</table>
										</div>
										<!-- END DATA TABLE -->
									</div>
								</div>
							</div>
							
						</div>
					</div>
				</div>
			</div>

		</div>

		<!-- Modal -->
		<div class="modal fade" id="modalGuest" tabindex="-1" role="dialog" aria-hidden="true">
			<div class="modal-dialog modal-lg">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title">Invitado</h5>
					</div>
					<div class="modal-body">
						<form id="formGuest">
							<div class="form-group">
								<label>Nombre: </label>
								<input type="text" class="form-control" name="name">
							</div>
							<div class="form-group">
								<label>Cargo: </label>
								<input type="text" class="form-control" name="job">
							</div>
							<div class="form-group">
								<label>Teléfono: </label>
								<input type="text" class="form-control" name="phone">
							</div>
							<div class="form-group">
								<label>Status: </label>
								<input type="text" class="form-control" name="status">
							</div>
						</form>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-bold btn-pure btn-secondary" data-dismiss="modal">Cancelar</button>
						<button type="button" class="btn btn-bold btn-pure btn-success text-white float-right" id="btnSaveGuest">Guardar</button>
					</div>
				</div>
			</div>
		</div>
		<!--/.modal -->

		<!-- Jquery JS-->
		<script src="<?php echo base_url(); ?>vendor/jquery-3.2.1.min.js"></script>
		<!-- Bootstrap JS-->
		<script src="<?php echo base_url(); ?>vendor/bootstrap-4.1/popper.min.js"></script>
		<script src="<?php echo base_url(); ?>vendor/bootstrap-4.1/bootstrap.min.js"></script>
		<!-- Vendor JS       -->
		<script src="<?php echo base_url(); ?>vendor/slick/slick.min.js">
		</script>
		<script src="<?php echo base_url(); ?>vendor/wow/wow.min.js"></script>
		<script src="<?php echo base_url(); ?>vendor/animsition/animsition.min.js"></script>
		<script src="<?php echo base_url(); ?>vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
		</script>
		<script src="<?php echo base_url(); ?>vendor/counter-up/jquery.waypoints.min.js"></script>
		<script src="<?php echo base_url(); ?>vendor/counter-up/jquery.counterup.min.js">
		</script>
		<script src="<?php echo base_url(); ?>vendor/circle-progress/circle-progress.min.js"></script>
		<script src="<?php echo base_url(); ?>vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
		<script src="<?php echo base_url(); ?>vendor/chartjs/Chart.bundle.min.js"></script>
		<script src="<?php echo base_url(); ?>vendor/select2/select2.min.js">
		</script>

		<!-- Main JS-->
		<script src="<?php echo base_url(); ?>assets/js/main.js"></script>
		<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>
		
		<script type="text/javascript">
			$(document).ready( function () {
				let datatable = $('#datatable').DataTable({
					"processing": true,
					"serverSide": true,
					"ajax":"<?php echo base_url(); ?>listado/loaddata",
					dom: 'Bfrtip',
					lengthMenu: [
						[ 10, 25, 50, -1 ],
						[ '10 registros', '25 registros', '50 registros', 'Mostrar todos' ]
					],
					"language": {
						"url": "http://cdn.datatables.net/plug-ins/1.10.20/i18n/Spanish.json",
						buttons: {
							pageLength: {
								_: "Mostrando %d registros",
								'-1': "Mostrando todos"
							}
						}
					}
				});

				$("#addGuest").click(function(){
					$("#btnSaveGuest").data("action", "save");
					$("#modalGuest").modal("show");
				});

				$("#btnSaveGuest").click(function(){
					$.post('<?php echo base_url(); ?>listado/save', {id: $(this).data("id"), action: $(this).data("action"), data: $("#formGuest").serialize()}, function(data) {
						
						datatable.ajax.reload();
						
						$("#modalGuest").modal("hide");
						alert('Datos guardados correctamente');
						$("#formGuest")[0].reset();
					}).fail(function(xhr, status, error) {
						alert('Hubo un error');
					});
				});

				$(document).delegate('.btn-edit-guest', 'click', function(){
					$("#btnSaveGuest").data("id", $(this).data("id"));
					$.post('<?php echo base_url(); ?>listado/getGuest', {id: $(this).data("id")}, function(data) {
						let obj =  JSON.parse(data);

						$("#formGuest [name=name]").val(obj.name);
						$("#formGuest [name=job]").val(obj.job);
						$("#formGuest [name=phone]").val(obj.phone);
						$("#formGuest [name=status]").val(obj.status);
						
						$("#btnSaveGuest").data("action", "update");
						$("#modalGuest").modal("show");
					});
				});

				$(document).delegate('.btn-delete-guest', 'click', function(){
					if(confirm('¿Está seguro de eliminar?')){
						$.post('<?php echo base_url(); ?>listado/delete', {id: $(this).data("id")}, function(data) {
							datatable.ajax.reload();
							alert('Invitado eliminado correctamente');
						});
					}
					
				});

				$(document).delegate('.check-attendance', 'click', function(){
					if(confirm('¿Está seguro de '+(($(this).is(":checked")) ? "marcar" : "desmarcar")+' la asistencia?')){
						$.post('<?php echo base_url(); ?>listado/attendance', {id: $(this).data("id"), val: $(this).is(":checked")}, function(data) {
							datatable.ajax.reload();
							alert('Datos guardados correctamente');
						});
					}else{
						$(this).prop( "checked", !$(this).is(":checked") );
					}
					
				});
			});
		</script>

	</body>
</html>
