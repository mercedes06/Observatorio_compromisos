<div class="page-header page-header-modern ">


	<div class="col-md-12 ">
		<ul class="breadcrumb d-block text-center " style="color: white !important;" data-appear-animation="fadeIn"
			data-appear-animation-delay="300">
			<li><a style="color:white !important;" href="#">Inicio</a></li>
			<li><a style="color:white !important;" href="#">Compromisos</a></li>

		</ul>
	</div>
	<div class="row align-items-center" style="text-align: center">
		<div class="col-md-12 align-self-center p-static order-2 text-center">
			<h1><strong> Listado de compromisos </strong></h1>
		</div>
	</div>
</div>
<style>
	#listado_cumplidos{ height: auto! important;}
</style>

<div role="main" class="main" style="margin-bottom: 100px">


	<div class="container py-2">
		<div class="col-12">
			<div class="form-row">
				<div class="form-group col-lg-4">
					<label class="font-weight-bold text-dark">Búsqueda por palabra clave</label>
					<input type="text" value="" class="form-control">
				</div>
				<div class="form-group col-lg-4">
					<label class="font-weight-bold text-dark">Por número de compromiso</label>
					<input type="text" value="" class="form-control">
				</div>
				<div class="form-group col-lg-4">
					<label class="font-weight-bold text-dark">Por dependencia</label>
					<select class="form-control">
						<option value="">Seleccione</option>
					</select>
				</div>
			</div>
		</div>
		<ul class="nav nav-pills sort-source sort-source-style-3 justify-content-center" data-sort-id="portfolio"
			data-option-key="filter" data-plugin-options="{'layoutMode': 'fitRows', 'filter': '*'}">
			<li class="nav-item active" data-option-value="*"><a class="nav-link text-1 text-uppercase active"
																 style="color:black!important;    border-bottom-color: #073a54 !important;"
																 href="#"><strong>Cumplidos</strong></a></li>
			<li class="nav-item" data-option-value=".websites"><a class="nav-link text-1 text-uppercase" href="#"
																  style="color:black!important;"><strong>En
						proceso</strong></a>
			</li>
			<li class="nav-item" data-option-value=".logos"><a class="nav-link text-1 text-uppercase"
															   style="color:black!important;"
															   href="#"><strong>Por iniciar</strong></a></li>

		</ul>

		<div class="sort-destination-loader sort-destination-loader-showing mt-4 pt-2">
			<div class="row portfolio-list sort-destination" data-sort-id="portfolio" id="listado_cumplidos">

			</div>
			<nav aria-label="...">
				<ul class="pagination float-right">
					<li class="page-item disabled">
						<a class="page-link" href="#" tabindex="-1">Previous</a>
					</li>
					<li class="page-item"><a class="page-link" href="#">1</a></li>
					<li class="page-item active">
						<a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
					</li>
					<li class="page-item"><a class="page-link" href="#">3</a></li>
					<li class="page-item">
						<a class="page-link" href="#">Next</a>
					</li>
				</ul>
			</nav>
		</div>

	</div>

</div>
<script
	src="https://code.jquery.com/jquery-3.4.1.js"
	integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
	crossorigin="anonymous"></script>
<script src="<?=base_url();?>js/compromisos/listado_compromisos.js"></script>

