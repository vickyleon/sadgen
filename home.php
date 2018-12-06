<?
include ("header.php");
include ("side-bar.php");
?>
<div class="main-body">
	<div class="main-container">
		<h2 class="text-center">Inicio</h2>
		<div class="card">
			<div class="card-body">
				<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
					<ol class="carousel-indicators">
						<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
						<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
						<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
						<li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
						<li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
					</ol>
					<div class="carousel-inner text-center">
						<div class="carousel-item active">
							<h4>Antropométrico</h4>
							<img class="d-block w-100 corusel-image" src="img/antropometrico.jpeg" alt="Antropometrico">
						</div>
						<div class="carousel-item">
							<h4>Calendario</h4>
							<img class="d-block w-100 corusel-image" src="img/calendario.jpeg" alt="Calendario">
						</div>
						<div class="carousel-item">
							<h4>Foro</h4>
							<img class="d-block w-100 corusel-image" src="img/foro.jpeg" alt="Foro">
						</div>
						<div class="carousel-item">
							<h4>Plan Alimenticio</h4>
							<img class="d-block w-100 corusel-image" src="img/plan_alimenticio.jpeg" alt=" Plam Alimenticio">
						</div>
						<div class="carousel-item">
							<h4>Reportes</h4>
							<img class="d-block w-100 corusel-image" src="img/reportes.jpeg" alt="Reportes">
						</div>
					</div>
					<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
					</a>
					<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
						<span class="carousel-control-next-icon" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
					</a>
				</div>
			</div>
		</div>
	</div>
</div>

<?
include("footer.php");
?>
