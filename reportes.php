<?php
include ("header.php");
include ("side-bar.php");
?>
<div class="main-body">
	<div class="main-container">
		<div class="col-md-12 mb-max">
			<h3 class="text-center">Reportes</h3>
		</div>
		<div class="card" *ngIf="_auth.getUser().rol.id == 2">
			<div class="card-body">
				<div class="col-md-12 py">
					<div class="row">
						<div class="col-md-4">
							<label for="fs-b">Alumno</label>
							<select name="" id="" class="form-control">
								<option value="" selected disabled>-- Seleccione --</option>
							</select>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="card mt">
			<div class="card-body">
				<div class="col-md-12 py">
						<div class="col-6 ">
								<table class="table table-hover table-responsive">
									<thead>
										<tr>
											<th scope="col">Fecha</th>
											<th scope="col">Cuello</th>
											<th scope="col">Espalda</th>
											<th scope="col">Brazo</th>
											<th scope="col">Antebrazo</th>
											<th scope="col">Abdomen</th>
											<th scope="col">Cadera</th>
											<th scope="col">Muslo</th>
											<th scope="col">Pierna</th>
											
										</tr>
									</thead>
									<tbody>
										<tr>
											<th scope="row">1/02/2019</th>
											<td>#</td>
											<td>#</td>
											<td>3</td>
											<td>5</td>
											<td>2</td>
											<td>1</td>
											<td>1</td>
											<td>5</td>


										</tr>

									</tbody>
								</table>
							</div>
					<h5>Medidas Antropométricas</h5>
				</div>
				<div class="col-md-12 py">
					<div style="display: block">
						<canvas baseChart [datasets]="radarChartData" [labels]="radarChartLabels" [chartType]="radarChartType" [colors]="colors"
						 (chartHover)="chartHovered($event)" (chartClick)="chartClicked($event)"></canvas>
					</div>
				</div>
			</div>
		</div>
		<div class="card mt">
			<div class="col-md-12 py">
				<h5>Progreso de I.M.C. y Peso</h5>
			</div>
			<div class="card-body">
				<div class="col-md-12 py">
						<table class="table table-hover">
								<thead>
									<tr>
										<th scope="col">Fecha</th>
										<th scope="col">IMC</th>
										<th scope="col">Peso</th>
										<th scope="col">Observaciones</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<th scope="row">1</th>
										<td>Mark</td>
										<td>Otto</td>
										<td>@mdo</td>
									</tr>

								</tbody>
							</table>
					<div style="display: block">
						<canvas baseChart [datasets]="lineChartData" [labels]="lineChartLabels" [chartType]="lineChartType"></canvas>
					</div>
				</div>
			</div>
		</div>
		<!-- <div class="card mt">
			<div class="col-md-12 py">
				<h5>Medidas de I.M.C</h5>
			</div>
			<div class="card-body">
				<div class="col-md-12 py">
					<div style="display: block">
						<canvas baseChart [datasets]="radarChartData" [labels]="radarChartLabels" [chartType]="lineChartType"></canvas>
					</div>
				</div>
			</div>
		</div> -->
	</div>
</div>
<?php
include("footer.php");
?>