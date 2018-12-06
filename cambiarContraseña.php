<div class="main-body">
	<div class="center-container text-center">
		<div class="pd">
			<h3 class="primary-text title-m">Cambiar Contraseña</h3>
			<div class="card" style="background-color: #EFEFEF">
				<div class="card-body">
					<div class="col-md-12">
						<p style="text-align: left;">
							Para poder cambiar la contraseña se require un formato, la cual consta de una mayúscula, una minúscula, un número y un caracter especial. Una longitud de al menos 8 y máximo 12.
						</p>
					</div>
					<form [formGroup]="form" (submit)="submit();">
						<div class="input-field">
							<div class="col-md-12">
								<div class="input-group mb-3">
									<input type="password" class="form-control" placeholder="Contraseña Antigua" formControlName="oldPassword" [(ngModel)]="oldPassword">
								</div>
								<p class="red-text mt-min" *ngIf="form['controls']?.oldPassword?.errors?.required && submitted">Este campo es requerido</p>
								<p class="red-text mt-min" *ngIf="form['controls']?.oldPassword?.errors?.nospace && submitted">No pueden ser espacios</p>
							</div>
							<div class="col-md-12">
								<div class="input-group mb-3">
									<input type="password" class="form-control" placeholder="Nueva Contraseña" formControlName="newPassword" [(ngModel)]="newPassword">
								</div>
								<p class="red-text mt-min" *ngIf="form['controls']?.newPassword?.errors?.required && submitted">Este campo es requerido</p>
								<!-- <p class="red-text mt-min" *ngIf="form['controls']?.newPassword?.errors?.pattern">Debe ser un formato de contraseña válido</p> -->
							</div>

							<div class="col-md-12">
								<div class="input-group mb-3">
									<input type="password" class="form-control" placeholder="Nueva Contraseña" formControlName="newPasswordTwo" [(ngModel)]="newPasswordTwo">
								</div>
								<p class="red-text mt-min" *ngIf="form['controls']?.newPasswordTwo?.errors?.required && submitted">Este campo es requerido</p>
								<!-- <p class="red-text mt-min" *ngIf="form['controls']?.newPasswordTwo?.errors?.pattern">Debe ser un formato de contraseña válido</p> -->
							</div>
							<div class="col-md-12" *ngIf="comparePassword();">
									<p class="red-text mt-min">Las contraseñas no coinciden</p>
							</div>

							<div class="p col-md-12">
								<button type="submit" class="btn btn-success btn-block" [disabled]="isLoading">Cambiar</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>