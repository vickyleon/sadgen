<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>


<nav class="navbar fixed-top navbar-dark bg-dark px-0">
	<div class="container">
		<div class="col-md-6 text-left">
			<img src="http://framework-gb.cdn.gob.mx/assets/images/gobmxlogo.svg">
		</div>
		<div class="col-md-6 text-right" >
			<a href="javascript:void(0);" style="color:white;" (click)="logout();">Cerrar Sesión</a>
		</div>
	</div>
</nav>

<div class="container" style="margin-top: 55px;" [ngStyle]="{'margin-left': _auth.isLogged() ? '247px' : '0'}">
	<div class="row">
		<div class="col-md-12 text-center">
			<img src="assets/img/escudo.jpg" alt="" height="75px">
		</div>
	</div>
</div>

<app-side-bar></app-side-bar>