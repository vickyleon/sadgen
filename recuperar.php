<?
include ("header.php");
?>
<div class="main-body-login">
	<div class="center-container text-center">
		<div class="pd">
			<h3 class="primary-text title-m">Recuperar Contraseña</h3>
			<div class="card" style="background-color: #EFEFEF">
				<div class="card-body">
					<form [formGroup]="form" (submit)="submit();">
						<div class="input-field">
							<div class="col-md-12">
								<div class="input-group mb-3">
									<div class="input-group-prepend">
										<span class="input-group-text" id="basic-addon1"><i class="material-icons">&#xE7FD;</i></span>
									</div>
									<input type="text" class="form-control" placeholder="Correo" name="email" formControlName="email" aria-label="Correo"
									 aria-describedby="basic-addon1" required="required">
								</div>
							</div>
							

							<div class="p col-md-12">
								<button type="submit" class="btn btn-success btn-block" [disabled]="isLoading">Enviar</button>
							</div>
							<div class="py col-md-12">
								<a type="button" class="btn btn-secondary btn-block" href="login.php" >Regresar</a>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>

<?
include("footer.php");
?>
