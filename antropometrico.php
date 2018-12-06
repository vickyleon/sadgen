<?
include ("header.php");
include ("side-bar.php");
?>
<div class="main-body">
	<div class="main-container">
		<div class="col-md-12 mb-max">
			<h3 class="text-center">Historial Clínico Nutricional</h3>
		</div>
		<div class="card">
			<div class="col-md-12 pt-max">
				<h5>Datos Personales</h5>
			</div>
			<div class="card-body">
				<div class="col-md-12 py">
					<div class="row">
						<div class="col-md-4">
							<label for="fs-b">Alumno</label>
							<ng-container *ngIf="userAuth.rol.id == 2">
								<select name="" id="" class="form-control" (change)="setStudent($event.target.value);">
									<option value="0" disabled selected>-- Seleccione --</option>
									<option *ngFor="let item of students" value="{{ item.id }}">{{ item.name }}</option>
								</select>
							</ng-container>
							<ng-container *ngIf="userAuth.rol.id == 3">
									<input type="text" class="form-control" disabled value="{{ userAuth.name }} {{ userAuth.lastName }}">
							</ng-container>
						</div>
						<div class="col-md-4">
							<label class="fs-b">Fecha</label>
							<input type="text" class="form-control" disabled [value]="date | dateFormat: 'extra-large'">
						</div>
						<div class="col-md-4">
							<label class="fs-b">Edad</label>
							<input type="text" class="form-control" disabled value="" [value]="student.age">
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="card mt-max" *ngIf="firstAppointment && student.id != 0">
			<div class="col-md-12 pt-max">
				<h5>Antecedentes Heredo-Familiares</h5>
			</div>
			<div class="card-body">
				<div class="col-md-12 py">
					<table class="table table-bordered">
						<thead>
							<tr>
								<th scope="col">Enfermedad</th>
								<ng-container *ngFor="let relative of relativeValues;">
									<th scope="col" class="text-center">{{ relative.name }}</th>
								</ng-container>
							</tr>
						</thead>
						<tbody>
							<ng-container *ngFor="let disease of diseaseValues;">
								<tr>
									<th scope="row">* {{ disease.name }}</th>
									<ng-container *ngFor="let relative of relativeValues;">
										<td class="text-center"><input type="checkbox" (change)="setRelativeDisease(relative, disease, $event.target.checked);"></td>
									</ng-container>
								</tr>
							</ng-container>
						</tbody>
					</table>
				</div>
			</div>
		</div>
		<div class="card mt-max" *ngIf="firstAppointment && student.id != 0">
			<div class="col-md-12 pt-max">
				<h5>Antecedentes Personales-Patológicos</h5>
			</div>
			<div class="card-body">
				<div class="col-md-12 py">
					<div class="row">
						<ng-container *ngFor="let pathology of pathologiesValues;">
							<div class="col-md-3">
								<span class="mr"><input type="checkbox" (change)="setPathologies(pathology, $event.target.checked);"></span>
								<label>{{ pathology.name }}</label>
							</div>
						</ng-container>
					</div>
				</div>
			</div>
		</div>
		<div class="card mt-max" *ngIf="firstAppointment && student.id != 0">
			<div class="col-md-12 pt-max">
				<h5>Signos Clínicos-Nutricionales</h5>
			</div>
			<hr>
			<div class="card-body">
				<div class="col-md-12 py">
					<div class="row">
						<ng-container *ngFor="let sign of signValues;">
							<div class="col-md-4">
								<span class="mr"><input type="checkbox" (change)="setSigns(sign, $event.target.checked);"></span>
								<label>{{ sign.name }}</label>
							</div>
						</ng-container>
					</div>
				</div>
			</div>
		</div>
		<form [formGroup]="form" (submit)="submit();" *ngIf="student.id != 0">
			<div class="form-group">
				<div class="card mt-max" *ngIf="biochemical.length == 0 && student.id != 0">
					<div class="col-md-12 pt-max">
						<h5>Perfil Bioquímico</h5>
					</div>
					<div class="card-body">
						<div class="col-md-12">
							<div class="row">
								<div class="col-md-4 py">
									<label>Glucosa</label>
									<input type="text" class="form-control" placeholder="Glucosa" formControlName="glucose" [(ngModel)]="antropometric.glucose" required="required">
									
								</div>
								<div class="col-md-4 py">
									<label>Colesterol</label>
									<input type="text" class="form-control" placeholder="Colesterol" formControlName="cholesterol" [(ngModel)]="antropometric.cholesterol" required="required">
									 
								</div>
								<div class="col-md-4 py">
									<label>Triglicéridos</label>
									<input type="text" class="form-control" placeholder="Triglicéridos" formControlName="triglycerides" [(ngModel)]="antropometric.triglycerides" required="required">
									
								</div>
								<div class="col-md-4 py">
									<label>Ácido úrico</label>
									<input type="text" class="form-control" placeholder="Ácido úrico" formControlName="uricacid" [(ngModel)]="antropometric.uricacid" required="required">
									
								</div>
								<div class="col-md-4 py">
									<label>Hemoglobina</label>
									<input type="text" class="form-control" placeholder="Hemoglobina" formControlName="hemoglobin" [(ngModel)]="antropometric.hemoglobin" required="required">
									
								</div>
								<div class="col-md-4 py">
									<label>Urea</label>
									<input type="text" class="form-control" placeholder="Urea" formControlName="urea" [(ngModel)]="antropometric.urea" required="required">
									
								</div>
								<div class="col-md-4 py">
									<label>Albúmina</label>
									<input type="text" class="form-control" placeholder="Albúmina" formControlName="albumin" [(ngModel)]="antropometric.albumin" required="required">
									
								</div>
								<div class="col-md-4 py">
									<label>Creatinina</label>
									<input type="text" class="form-control" placeholder="Creatinina" formControlName="creatinine" [(ngModel)]="antropometric.creatinine" required="required">
									
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="card mt-max">
					<div class="col-md-12 pt-max">
						<h5>Perfil Antropométrico</h5>
					</div>
					<div class="card-body">
						<div class="col-md-12 py">
							<div class="row">
								<div class="col-md-4">
									<label for="">Talla</label>
									<input type="text" class="form-control" placeholder="Talla" formControlName="hight" [(ngModel)]="antropometric.hight"
									 (change)="getIMC();" required="required">
									
								</div>
								<div class="col-md-4">
									<label for="">Peso</label>
									<input type="text" class="form-control" placeholder="Peso" formControlName="weight" [(ngModel)]="antropometric.weight"
									 (change)="getIMC();" required="required">
									
								</div>
								<div class="col-md-4">
									<label for="">% Grasa</label>
									<input type="text" class="form-control" placeholder="% Grasa" formControlName="fat" [(ngModel)]="antropometric.fatLoss" required="required">
									
								</div>
							</div>
						</div>
						<div class="col-md-12 py">
							<div class="row">
								<div class="col-md-4">
									<label for="">% Agua</label>
									<input type="text" class="form-control" placeholder="% Agua" formControlName="water" [(ngModel)]="antropometric.water" required="required">
									
								</div>
								<div class="col-md-4">
									<label for="">Genero</label>
									<select name="" id="" class="form-control" formControlName="sex" [(ngModel)]="female" (change)="setFemale($event.target.value);">
										<option value="-- Seleccione --" disabled selected>-- Seleccione --</option>
										<option value="false">Masculino</option>
										<option value="true">Femenino</option>
									</select>
									
								</div>
								<div class="col-md-4">
									<label for="">C. Pantorilla</label>
									<input type="text" class="form-control" placeholder="C. Pantorilla" formControlName="calf" [(ngModel)]="antropometric.calf">
									
								</div>
							</div>
						</div>
						<div class="col-md-12 py">
							<div class="row">
								<div class="col-md-4">
									<label for="">C. Brazo</label>
									<input type="text" class="form-control" placeholder="C. Brazo" formControlName="arm" [(ngModel)]="antropometric.arm">
									
								</div>
								<div class="col-md-4">
									<label for="">C. Muñeca</label>
									<input type="text" class="form-control" placeholder="C. Muñeca" formControlName="wrist" [(ngModel)]="antropometric.wrist">
									
								</div>
								<div class="col-md-4">
									<label for="">P.C. Bicipital</label>
									<input type="text" class="form-control" placeholder="P.C. Bicipital" formControlName="bicipital" [(ngModel)]="antropometric.bicipital">
									<p class="red-text mt-min" *ngIf="form['controls']?.bicipital?.errors?.required && submitted">Este campo es
										requerido</p>
									<p class="red-text mt-min" *ngIf="form['controls']?.bicipital?.errors?.pattern">No cumple con el formato</p>
								</div>
							</div>
						</div>
						<div class="col-md-12 py">
							<div class="row">
								<div class="col-md-4">
									<label for="">P.C. Tricipital</label>
									<input type="text" class="form-control" placeholder="P.C. Tricipital" formControlName="tricipital" [(ngModel)]="antropometric.tricipital">
									<p class="red-text mt-min" *ngIf="form['controls']?.tricipital?.errors?.required && submitted">Este campo es
										requerido</p>
									<p class="red-text mt-min" *ngIf="form['controls']?.tricipital?.errors?.pattern">No cumple con el formato</p>
								</div>
								<div class="col-md-4">
									<label for="">P.C. Subescapular</label>
									<input type="text" class="form-control" placeholder="P.C. Subescapular" formControlName="subscapular"
									 [(ngModel)]="antropometric.subscapular">
									<p class="red-text mt-min" *ngIf="form['controls']?.subscapular?.errors?.required && submitted">Este campo
										es
										requerido</p>
									<p class="red-text mt-min" *ngIf="form['controls']?.subscapular?.errors?.pattern">No cumple con el formato</p>
								</div>
								<div class="col-md-4">
									<label for="">P. Cintura</label>
									<input type="text" class="form-control" placeholder="P. Cintura" formControlName="waist" [(ngModel)]="antropometric.waist">
									<p class="red-text mt-min" *ngIf="form['controls']?.waist?.errors?.required && submitted">Este campo es
										requerido</p>
									<p class="red-text mt-min" *ngIf="form['controls']?.waist?.errors?.pattern">No cumple con el formato</p>
								</div>
							</div>
						</div>
						<div class="col-md-12 py">
							<div class="row">
								<div class="col-md-4">
									<label for="">P. Cadera</label>
									<input type="text" class="form-control" placeholder="P. Cadera" formControlName="hip" [(ngModel)]="antropometric.hip">
									<p class="red-text mt-min" *ngIf="form['controls']?.hip?.errors?.required && submitted">Este campo es
										requerido</p>
									<p class="red-text mt-min" *ngIf="form['controls']?.hip?.errors?.pattern">No cumple con el formato</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="card mt-max">
					<div class="card-body">
						<div class="col-md-12 py">
							<div class="row">
								<div class="col-md-4">
									<label for="">IMC</label>
									<input type="text" class="form-control" disabled placeholder="Porcentaje" [(ngModel)]="this.antropometric.imc"
									 [ngModelOptions]="{standalone: true}">
									<p class="red-text mt-min" *ngIf="antropometric.imc >= 25 && antropometric.imc <= 29.9 ">Sobrepeso</p>
									<p class="red-text mt-min" *ngIf="antropometric.imc >= 30 && antropometric.imc <= 34.9 ">Obesidad Grado I</p>
									<p class="red-text mt-min" *ngIf="antropometric.imc >= 35 && antropometric.imc <= 39.9 ">Obesidad Grado II</p>
									<p class="red-text mt-min" *ngIf="antropometric.imc >= 40">Obesidad Grado III</p>
								</div>
								<div class="col-md-4">
									<Label>¿Cuánto se ejercita?</Label>
									<select class="form-control" (change)="setCcd($event.target.value);" formControlName="exercise">
										<option value="0" disabled selected>-- seleccione --</option>
										<option value="1">Poco o ninguno</option>
										<option value="2">Ligero (1-3 a la semana)</option>
										<option value="3">Moderado (3-5 a la semana)</option>
										<option value="4">Fuerte (6-7 a la semana)</option>
										<option value="5">Muy Fuerte (dos veces al día)</option>
									</select>
									<p class="red-text mt-min" *ngIf="form['controls']?.exercise?.errors?.required && submitted">Este campo es requerido</p>
								</div>
								<div class="col-md-4">
									<label>Consumo Calórico Diario (CCD)</label>
									<input type="text" class="form-control" disabled placeholder="Calorias" [(ngModel)]="this.antropometric.ccd"
									 [ngModelOptions]="{standalone: true}">
								</div>
							</div>
						</div>
						<div class="col-md-12 py-max">
							<div class="row">
								<div class="col-md-3 offset-md-9">
									<button class="btn btn-primary btn-block" [disabled]="isLoading" type="submit">Enviar</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</form>
	</div>
</div>
<?
include("footer.php");
?>
