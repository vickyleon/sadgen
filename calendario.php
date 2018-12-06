<div class="main-body">
	<div class="main-container">
		<div class="col-md-12 mb-max">
			<h3 class="text-center">Calendario</h3>
		</div>
		<div class="card">
			<div class="card-body">
				<div class="col-md-12">
					<div class="row">
						<div class="col-md-3">
							<div class="row">
								<div class="col-md-1" style="background-color: #007bff; border: 1px solid black; border-radius: 5px;"></div>
								<div class="col-md-10">
									Día actual
								</div>
							</div>
						</div>
						<div class="col-md-3">
							<div class="row">
								<div class="col-md-1" style="background-color: red; border: 1px solid black; border-radius: 5px;"></div>
								<div class="col-md-10">
									Sin Citas
								</div>
							</div>
						</div>
						<div class="col-md-3">
							<div class="row">
								<div class="col-md-1" style="background-color: white; border: 1px solid black; border-radius: 5px;"></div>
								<div class="col-md-10">
									Disponible
								</div>
							</div>
						</div>
						<div class="col-md-3">
							<div class="row">
								<div class="col-md-1" style="background-color: #D3D3D3; border: 1px solid black; border-radius: 5px;"></div>
								<div class="col-md-10">
									No disponible
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="card mt">
			<div class="card-body">
				<ng-container *ngFor="let month of months;">
					<div class="col-md-12">
						<div class="row">
							<div class="col-md-6">
								<h5>{{ month.name }}</h5>
							</div>
							<div class="col-md-6 text-right">
							</div>
						</div>
					</div>
					<div class="col-md-12 py">
						<div class="row">
							<table class="table table-bordered">
								<thead>
									<tr class="text-center">
										<ng-container *ngFor="let day of days">
											<th scope="col">{{ day }}</th>
										</ng-container>
									</tr>
								</thead>
								<tbody>
									<ng-container *ngFor="let week of month.weeks;">
										<tr class="text-right">
											<ng-container *ngFor="let day of week;">
												<td [class]="day.style" (click)="openModal(day, month.number);">
													{{ day.number }}
												</td>
											</ng-container>
										</tr>
									</ng-container>
								</tbody>
							</table>
						</div>
					</div>
					<hr *ngIf="months.length > 1">
				</ng-container>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="scheduleModal" tabindex="-1" role="dialog" aria-labelledby="scheduleModal" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<div class="col-md-12 text-center">
					<h4 class="modal-title">Horario</h4>
				</div>
			</div>
			<div class="modal-body schedule">
				<table class="table table-striped text-center">
					<thead class="thead-dark">
						<tr>
							<th scope="col">#</th>
							<th scope="col">Hora</th>
							<th scope="col">Estado </th>
							<th scope="col" *ngIf="this._authService.getUser().rol.id == 2">Alumno</th>
							<th scope="col" *ngIf="this._authService.getUser().rol.id == 3">Acción</th>
						</tr>
					</thead>
					<tbody>
						<ng-container *ngFor="let hour of schedule; let counter = index;">
							<tr class="align-middle" [ngClass]="{'table-danger': !hour.available}" style="max-height: 60px; height: 60px;">
								<th scope="row">{{ counter + 1 }}</th>
								<td>{{ hour.value }}</td>
								<td>{{ hour.available ? 'Disponible' : 'Ocupado' }}</td>
								<td *ngIf="this._authService.getUser().rol.id == 2">{{ hour.student }}</td>
								<td *ngIf="this._authService.getUser().rol.id == 3">
									<div class="col-md-12 m-0 text-center" *ngIf="hour.available">
										<button class="btn btn-success btn_block" data-toggle="modal" data-target="#confirmModal" (click)="selectedHour = hour">Agendar</button>
									</div>
								</td>
							</tr>
						</ng-container>
					</tbody>
				</table>
			</div>
			<div class="modal-footer">
				<div class="col-md-12">
					<button type="button" class="btn btn-danger btn-block" data-dismiss="modal">Cerrar</button>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="confirmModal" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog"
 aria-labelledby="confirmModal" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<div class="col-md-12 text-center">
					<h4 class="modal-title">¡Atención!</h4>
				</div>
			</div>
			<div class="modal-body">
				<div class="col-md-12">
					Se Agendara una cita el dia: <span style="font-weight: bolder;">{{ selectedDay | dateFormat: 'extra-large'}}</span>, a las <span style="font-weight: bolder;">{{ selectedHour.value }}</span> hrs.
				</div>
				<div class="col-md-12 mt-max">
					¿Está seguro que desea agendar la cita?
				</div>
			</div>
			<div class="modal-footer">
				<div class="col-md-12">
					<div class="row">
						<div class="col-md-6">
							<button type="button" class="btn btn-danger btn-block" data-dismiss="modal">Cerrar</button>
						</div>
						<div class="col-md-6">
							<button type="button" class="btn btn-success btn-block" (click)="setConfirm();">Aceptar</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>