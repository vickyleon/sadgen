<div class="wrapper">
	<nav id="sidebar">
		<div class="sidebar-header mt-max">
			<div class="col-md-12 text-center">
				<a><i class="material-icons" style="font-size: 54px;">&#xe853;</i></a>
			</div>
			<div class="col-md-12 text-center py-2">
				<h5><!--Nombre y apellido del usuario--></h5>
			</div>
			<p class="text-right" style="font-style: italic;">
				<!-- roll del usuario-->
			</p>
		</div>
		<ul class="list-unstyled components">
			<li [routerLinkActive]="['active']">
				<a href="#" [routerLink]="['/home']" ><i class="material-icons mr-4">&#xe563;</i>Inicio</a>
			</li>
			<li [routerLinkActive]="['active']" *ngIf="_auth.getUser().rol.id == 2">
				<a href="#" [routerLink]="['/upload']" ><i class="material-icons mr-4">&#xe174;</i>Registrar Estudiante</a>
			</li>
			<li [routerLinkActive]="['active']">
				<a href="#" [routerLink]="['/antropometrico']"><i class="material-icons mr-4">&#xe84e;</i>Historial C.N.</a>
			</li>
			<li [routerLinkActive]="['active']">
				<a href="#" [routerLink]="['/calendar']"><i class="material-icons mr-4">&#xe916;</i>Calendario</a>
			</li>
			<li [routerLinkActive]="['active']">
				<a href="#" [routerLink]="['/faq']"><i class="material-icons mr-4">&#xe8af;</i>FAQ</a>
			</li>
			<li [routerLinkActive]="['active']">
				<a href="#" [routerLink]="['/foro']"><i class="material-icons mr-4">&#xe8af;</i>Foro</a>
			</li>
			<li [routerLinkActive]="['active']">
				<a href="#" [routerLink]="['/modificar-usuario']"><i class="material-icons mr-4">&#xe174;</i>Modificar usuarios</a>
			</li>
			<li [routerLinkActive]="['active']">
				<a href="#" [routerLink]="['/foodplan']"><i class="material-icons mr-4">&#xe85e;</i>Plan Alimenticio</a>
			</li>
			<li [routerLinkActive]="['active']">
				<a href="#" [routerLink]="['/report']"><i class="material-icons mr-4">&#xe8e5;</i>Reportes</a>
			</li>
		</ul>
	</nav>
</div>