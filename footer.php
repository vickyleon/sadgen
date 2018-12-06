<!-- Footer -->
<!-- 
<footer class="page-footer font-small pt-4 footer" >
	<div class="container">
		<div class="row">
			<div class="col-md-6 mb-4">
				<form class="form-inline">
					<input class="form-control form-control-sm mr-3 w-75" type="text" placeholder="Search" aria-label="Search">
					<i class="fa fa-search" aria-hidden="true"></i>
				</form>
			</div>
			<div class="col-md-6 mb-4">

				<form class="input-group">
					<input type="text" class="form-control form-control-sm" placeholder="Your email" aria-label="Your email"
					 aria-describedby="basic-addon2">
					<div class="input-group-append">
						<button mdbBtn color="white" outline="true" size="sm" type="button" mdbWavesEffect>Sign up</button>
					</div>
				</form>
			</div>
		</div>
	</div>


	<div class="footer-copyright text-center py-3">© 2018 Copyright:
		<a href="https://mdbootstrap.com/angular/angular-tutorial/"> MDBootstrap.com</a>
	</div>
</footer> -->


<footer class="page-footer font-small footer pt-4" [ngStyle]="{'margin-left': _auth.isLogged() ? '247px' : '0'}">
	<div class="container text-center text-md-left">
		<div class="row" style="font-size: 12px;">
			<div class="col-md-3 mx-auto">
				<p class="p-min">
					<a style="color: white;" href="//www.ipn.mx/normatividad" itemprop="url">Normatividad</a>
				</p>
				<p>
					<a style="color: white;" href="//www.ipn.mx/Acerca-del-IPN/Paginas/mapas-instalaciones.aspx" itemprop="url">Mapas
						e Instalaciones</a>
				</p>
			</div>
			<div class="col-md-3 mx-auto">
				<p class="p0">
					<a style="color: white;" href="//www.ipn.mx/egresados/Paginas/bolsa-trabajo.aspx" itemprop="url">Bolsa de trabajo</a>
				</p>
				<p>
					<a style="color: white;" href="//www.ipn.mx/ofertaeducativa/Paginas/centros-idiomas.aspx" itemprop="url">Centros
						de Idiomas</a>
				</p>
			</div>
			<div class="col-md-3 mx-auto">
				<p>
					<a style="color: white;" href="//www.ipn.mx/investigacion/Paginas/directorio-centros.aspx" itemprop="url">Centros
						de Investigación</a>
				</p>
				<p>
					<a style="color: white;" href="//www.ipn.mx/CCS/Paginas/circulares.aspx" itemprop="url">Circulares </a>
				</p>
			</div>
			<div class="col-md-3 mx-auto">
				<p>
					<a style="color: white;" href="//envivo.ipn.mx/" itemprop="url">Transmisión en Línea</a>
				</p>
				<p>
					<a style="color: white;" href="//www.ipn.mx/DG/Paginas/consejo-consultivo.aspx" itemprop="url">Consejo General
						Consultivo</a>
				</p>
			</div>
		</div>
	</div>

	<div class="col-md-12 text-center py-min">
		<a style="color: white;" href="//www.facebook.com/ipn.mx" target="_blank" class="fa fa-facebook"></a>
		<a style="color: white;" href="//twitter.com/IPN_MX" target="_blank" class="fa fa-twitter"></a>
		<a style="color: white;" href="//plus.google.com/103841476689221632363" target="_blank" class="fa fa-google-plus"></a>
		<a style="color: white;" href="//www.youtube.com/user/IPNoficial" target="_blank" class="fa fa-youtube"></a>
		<a style="color: white;" href="//www.ipn.mx/Paginas/rss.aspx" target="_blank" class="fa fa-rss"></a>
	</div>


	<!-- Social buttons -->

	<div class="footer-copyright text-center py-3" style="font-size: 10px !important;">
		<a href="//www.ipn.mx/" style="color: white;">Instituto Politécnico Nacional</a>
		<div class="col-md-12">
			<p>
				D.R. Instituto Politécnico Nacional (IPN), Av. Luis Enrique Erro S/N, Unidad Profesional Adolfo López Mateos,
				Zacatenco, Delegación Gustavo A. Madero, C.P. 07738, Ciudad de México; México 2009-2013.
			</p>
			<p>
				Esta página es una obra intelectual protegida por la Ley Federal del Derecho de Autor, puede ser reproducida con
				fines no lucrativos, siempre y cuando no se mutile, se cite la fuente completa y su dirección electrónica; su uso
				para otros fines, requiere autorización previa y por escrito de la Dirección General del Instituto.
			</p>
		</div>
	</div>
</footer>