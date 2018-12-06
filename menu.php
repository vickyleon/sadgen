<?php
include ("header.php");
include ("side-bar.php");
?>
<div class="main-body">
	<div class="main-container">
		<div class="col-md-12 mb-max">
			<h3 class="text-center">Plan Alimenticio</h3>
		</div>
		<div class="card">
			<div class="card-body">
				<div class="col-md-12 py">
					<div class="row">
						<div class="col-md-4">
							<label for="fs-b">Alumno</label>
							<select name="student" id="" class="form-control" [(ngModel)]="student">
								<option value="0" disabled selected>-- Seleccione --</option>
								<option *ngFor="let item of students" [ngValue]="item">{{ item.name }}</option>
							</select>
						</div>
						<div class="col-md-4">
							<label class="fs-b">Consumo Calórico Diario</label>
							<input type="text" class="form-control" disabled placeholder="C.C.D." [value]="ccd">
						</div>
						<div class="col-md-4">
							<label class="fs-b">Índice de Masa Corporal</label>
							<input type="text" class="form-control" disabled placeholder="I.M.C" [value]="imc">
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="card mt-max">
			<div class="card-body">
				<div class="col-md-12 py">
					<div class="table-responsive">
						<table class="table">
							<thead class="thead-dark text-center">
								<tr>
									<th scope="col">Grupo de alimentos</th>
									<th scope="col">Desayuno</th>
									<th scope="col">Colación</th>
									<th scope="col">Comida</th>
									<th scope="col">Colación</th>
									<th scope="col">Cena</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<th scope="row">Cereales</th>
									<td><input type="text" class="form-control" value="" /></td>
									<td><input type="text" class="form-control" value="" /></td>
									<td><input type="text" class="form-control" value="" /></td>
									<td><input type="text" class="form-control" value="" /></td>
									<td><input type="text" class="form-control" value="" /></td>
								</tr>
								<tr>
									<th scope="row">Verduras</th>
									<td><input type="text" class="form-control" value="" /></td>
									<td><input type="text" class="form-control" value="" /></td>
									<td><input type="text" class="form-control" value="" /></td>
									<td><input type="text" class="form-control" value="" /></td>
									<td><input type="text" class="form-control" value="" /></td>
								</tr>
								<tr>
									<th scope="row">Frutas</th>
									<td><input type="text" class="form-control" value="" /></td>
									<td><input type="text" class="form-control" value="" /></td>
									<td><input type="text" class="form-control" value="" /></td>
									<td><input type="text" class="form-control" value="" /></td>
									<td><input type="text" class="form-control" value="" /></td>
								</tr>
								<tr>
									<th scope="row">Proteínas</th>
									<td><input type="text" class="form-control" value="" /></td>
									<td><input type="text" class="form-control" value="" /></td>
									<td><input type="text" class="form-control" value="" /></td>
									<td><input type="text" class="form-control" value="" /></td>
									<td><input type="text" class="form-control" value="" /></td>
								</tr>
								<tr>
									<th scope="row">Leguminosas</th>
									<td><input type="text" class="form-control" value="" /></td>
									<td><input type="text" class="form-control" value="" /></td>
									<td><input type="text" class="form-control" value="" /></td>
									<td><input type="text" class="form-control" value="" /></td>
									<td><input type="text" class="form-control" value="" /></td>
								</tr>
								<tr>
									<th scope="row">Lácteos</th>
									<td><input type="text" class="form-control" value="" /></td>
									<td><input type="text" class="form-control" value="" /></td>
									<td><input type="text" class="form-control" value="" /></td>
									<td><input type="text" class="form-control" value="" /></td>
									<td><input type="text" class="form-control" value="" /></td>
								</tr>
								<tr>
									<th scope="row">Grasas</th>
									<td><input type="text" class="form-control" value="" /></td>
									<td><input type="text" class="form-control" value="" /></td>
									<td><input type="text" class="form-control" value="" /></td>
									<td><input type="text" class="form-control" value="" /></td>
									<td><input type="text" class="form-control" value="" /></td>
								</tr>
								<tr>
									<th scope="row">Azúcares</th>
									<td><input type="text" class="form-control" value="" /></td>
									<td><input type="text" class="form-control" value="" /></td>
									<td><input type="text" class="form-control" value="" /></td>
									<td><input type="text" class="form-control" value="" /></td>
									<td><input type="text" class="form-control" value="" /></td>
								</tr>
								<tr>
									<th scope="row">Calorías</th>
									<td><input type="text" class="form-control" value="" /></td>
									<td><input type="text" class="form-control" value="" /></td>
									<td><input type="text" class="form-control" value="" /></td>
									<td><input type="text" class="form-control" value="" /></td>
									<td><input type="text" class="form-control" value="" /></td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
		<div class="card mt-max">
			<div class="col-md-12 pt-max">
				<h5>Recomendaciones</h5>
			</div>
			<div class="card-body">
				<div class="col-md-12 py">
					<p>- Tomar 2 litros de agua al día (agua natural de jamaica, tamarindo, limón o pepino).</p>
					<p>- Disminuir el consumo de la sal.</p>
					<p>- Hacer mínimo tres comidas al día.</p>
					<p>- Consumir frutas y verduras frescas en cada tiempo de comida.</p>
					<p>- Masticar muy bien los alimentos.</p>
					<p>- Evitar alimentos fritos, capeados o empanizados.</p>
					<p>- Preferir alimentos cocidos al vapor, asados, al horno, a la parrilla, en salsa o sartén de teflón.</p>
					<p>- Intente eliminar las bebidas gasificadas, jugos comerciales, alcohol y los alimentos refinados de su dieta.</p>
					<p>- Si experimenta apetito entre sus comidas preferir verduras como: pepino, nopal, zanahoria, rábanos, o frutas
						como: melón, jicama, manzana, o naranja.</p>
					<p>- Realizar diariamente una rútina de ejercicio, como mínimo 10 minutos de calentamiento, 30 de ejercicio
						(caminar, trotar, correr, nadar, spining, escaladora, etc.) y 10 minutos de enfriamiento. Durante todo el
						ejercicio tomar constantemente agua.</p>
					<p>- No picar entre comidas.</p>
					<p>- Si su plan de alimentación lo incluye, use el pan solo en el desayuno.</p>
					<p>- Coma lo más variado posible.</p>
				</div>
			</div>
		</div>
	</div>
</div>

<?php
include("footer.php");
?>
