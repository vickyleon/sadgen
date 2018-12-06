<?
include ("header.php");
?>
<div class="main-body-login">
	<div class="container">
		<div class="row justify-content-md-center">
			<div class="center-container col-md-6">		
				<div class="pd">
					<h3 class="primary-text title-m text-center">Inicio de sesión</h3>
					<div class="card" style="background-color: #EFEFEF">
						<div class="card-body ">
							<div class="input-field">
								<form method="post">
									<div class="col-md-12">
										<div class="input-group mb-3">
											<div class="input-group-prepend">
												<span class="input-group-text" id="basic-addon1"><i class="material-icons">&#xE7FD;</i></span>
											</div>
											<input type="text" class="form-control" placeholder="Correo" name="email" formControlName="email" autocomplete="off"
											aria-label="Correo" aria-describedby="basic-addon1" required="required">
										</div>

										<div class="input-group mb-3">
											<div class="input-group-prepend">
												<span class="input-group-text" id="basic-addon2"><i class="material-icons">&#xE897;</i></span>
											</div>
											<input type="password" class="form-control" placeholder="Contraseña" name="password" formControlName="password"
											autoComplete="off" aria-label="Username" aria-describedby="basic-addon2" required="required">
										</div>


									</div>

									<div class="p col-md-12">
										<button class="btn btn-success btn-block" type="submit">Entrar</button>
									</div>
									<div class="col-md-12">
										<div class="row">
											<div class="p.min col-md-6">
												<a type="button" class="btn btn-secondary btn-block" href="recuperar.php">Recuperar contraseña</a>
											</div>
											<div class="p.min col-md-6">
												<a type="button" class="btn btn-secondary btn-block" href="registro.php" >Registrarme</a>
											</div>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?
include("footer.php");
?>

