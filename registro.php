<?
include ("header.php");
?>

<div class="main-body-login">
	<div class="main-container">
		<div class="pd">
			<h3 class="primary-text title-m text-center">Registrarme</h3>
			<div class="card" style="background-color: #EFEFEF">
				<div class="card-body">
					<form  method="post">
						<div class="form-group">
							<div class="col-md-12">
								<div class="row">
									<div class="col-md-4">
										<label class="fs-b">Nombre</label>
										<input type="text" class="form-control" aria-describedby="emailHelp" placeholder="Nombre" formControlName="name" required="required" 
										>
									
									</div>
									<div class="col-md-4">
										<label class="fs-b">Primer Apellido</label>
										<input type="email" class="form-control" aria-describedby="emailHelp" placeholder="Primer Apellido"
										required="required" formControlName="lastName">
										
									</div>
									<div class="col-md-4">
										<label class="fs-b">Segundo Apellido</label>
										<input type="text" class="form-control" placeholder="Segundo Apellido" required="required" 
										 formControlName="secondLastName">
										
									</div>
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="col-md-12">
								<div class="row">
									<div class="col-md-4">
										<label class="fs-b">Correo</label>
										<input type="email" class="form-control" placeholder="Correo"  formControlName="email" required="required">
										
									</div>
									<div class="col-md-4">
										<label class="fs-b">Teléfono</label>
										<input type="text" class="form-control" placeholder="Teléfono"  formControlName="cellphone" required="required">
									
									</div>
									<div class="col-md-4">
										<label class="fs-b">Fecha Nacimiento</label>
										<div class="input-group">
											<div class="input-group-prepend">
												<span class="input-group-text" id="basic-addon2"><i class="material-icons">&#xE24F;</i></span>
											</div>
											<input id="initialDate" type="text" class="form-control" placeholder="Fecha Nacimiento" required="required" 
											 name="birthday" formControlName="birthday" autocomplete="off" data-date-format="yyyy-mm-dd">
										</div>
										
									</div>
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="col-md-12">
								<div class="row">
									<div class="col-md-4">
										<label class="fs-b">Boleta</label>
										<input type="text" class="form-control" placeholder="Boleta" formControlName="ticket" required="required">
										
									</div>
								</div>
							</div>
						</div>
						<hr class="p">
						<div class="form-group">
							<div class="col-md-12">
								<div class="row">
									<div class="col-md-4">
										<label class="fs-b">Código Postal</label>
										<input type="text" class="form-control" placeholder="Código Postal" required="required">
									</div>
									<div class="col-md-4">
										<label class="fs-b">Colonia</label>
										<select class="form-control" formControlName="colony" required="required" placeholder="-- Seleccione --">
											
										</select>
										
									</div>
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="col-md-12">
								<div class="row">
									<div class="col-md-4">
										<label class="fs-b">Calle</label>
										<input type="text" class="form-control" placeholder="Calle" formControlName="street" required="required">
										
									</div>
									<div class="col-md-4">
										<label class="fs-b">No. Exterior</label>
										<input type="text" class="form-control" placeholder="Número Exterior" required="required" >
										
									</div>
									<div class="col-md-4">
										<label class="fs-b">No. Interior</label>
										<input type="text" class="form-control" placeholder="Número Interior" required="required" 
										 formControlName="insideNumber">
										
									</div>
								</div>
							</div>
						</div>
						<hr>
						<div class="col-md-12 text-center form-group form-check">
							<input class="form-check-input" type="checkbox" value="" id="defaultCheck1" 	>
							<label class="form-check-label">He leído y acepto
								<a href="#" style="color: black;" data-toggle="modal" data-target="#termsModal" data-backdrop="static"
								 data-keyboard="false">Términos y condiciones</a>
								<a href="#" style="color: black;" data-toggle="modal" data-target="#privacyModal" data-backdrop="static"
								 data-keyboard="false">Aviso de privacidad</a>
							</label>
						</div>
						<hr>
						<div class="col-md-12">
							<div class="row justify-content-end">
								<div class="col-md-4">
									<a type="button" class="btn btn-secondary btn-block" href="login.php" >Regresar</a>
								</div>
								<div class="col-md-4">
									<button type="submit" class="btn btn-success btn-block" [disabled]="!acceptedTerms || isLoading">Enviar</button>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>


<!-- Modal -->
<div class="modal fade" id="termsModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header text-center">
				<h3 class="modal-title">Términos y condiciones</h3>
				<!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button> -->
			</div>
			<div class="modal-body">
				<h4>INFORMACIÓN RELEVANTE </h4>
				<p>
					Es requisito necesario para la adquisición de los productos que se ofrecen en este sitio, que lea y acepte los
					siguientes Términos y Condiciones que a continuación se redactan. El uso de nuestros servicios implicará que usted
					ha leído y aceptado los Términos y Condiciones de Uso en el presente documento. Todos los datos obtenidos por el
					sistema se le darán un tratamiento previamente estipulado en el Aviso de Privacidad.
				</p>
				<p>
					El usuario puede elegir y cambiar la clave para su acceso de administración de la cuenta en cualquier momento, en
					caso de que se haya registrado y que sea necesario para la compra de alguno de nuestros productos.
					www.sagden.blogspot.com no asume la responsabilidad en caso de que entregue dicha clave a terceros.
				</p>
				<p>
					Todas las transacciones que se lleven a cabo por medio de este sitio web, están sujetas a un proceso de
					confirmación y verificación. En algunos casos puede que se requiera una verificación por medio de correo
					electrónico.
				</p>

				<h4>LICENCIA</h4>
				<p>
					SAGDEN a través de su sitio web concede una licencia para que los usuarios utilicen los servicios que son
					otorgados en este sitio web de acuerdo a los Términos y Condiciones que se describen en este documento.
				</p>
				<h4>USO NO AUTORIZADO </h4>
				<p>
					En caso de que aplique, usted no puede colocar ningún tipo de información adicional a la propuesta por los
					propietarios, modificado o sin modificar, en un CD, sitio web o ningún otro medio y ofrecerlos para la
					redistribución o la reventa de ningún tipo.
				</p>
				<h4>PROPIEDAD</h4>
				<p>
					Usted no puede declarar propiedad intelectual o exclusiva a ninguno de nuestros servicios, modificado o sin
					modificar. Todos los servicios y código, fuente así como el diseño responsivo son propiedad de los proveedores del
					contenido.
				</p>
				<p>
					– De acuerdo a las especificaciones técnicas indicadas para cada usuario.
				</p>
				<p>
					– En uso específico para la función con que fue diseñado el sistema.
				</p>
				<p>
					– En condiciones de operación acorde con las especificaciones y tolerancias indicadas.
				</p>
				<h4>PRIVACIDAD </h4>
				<p>
					Este sitio web www.sagden.blogspot.com garantiza que la información personal que usted envía cuenta con la
					seguridad necesaria. Los datos ingresados por usuario o en el caso de requerir una validación de los pedidos no
					serán entregados a terceros, salvo que deba ser revelada en cumplimiento a una orden judicial o requerimientos
					legales.
				</p>
				<p>
					La suscripción a boletines de correos electrónicos publicitarios es voluntaria y podría ser seleccionada al
					momento de crear su cuenta.
				</p>
				<p>
					SAGDEN reserva los derechos de cambiar o de modificar estos términos sin previo aviso. Estos términos y
					condiciones se han generado en las oficinas de Recursos Informáticos
				</p>
			</div>
			<div class="modal-footer">
				<div class="container-fluid">
					<div class="row justify-content-md-center">
						<div class="col-md-4">
							<button type="button" class="btn btn-outline-info btn-block" data-dismiss="modal">Cerrar</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


<!-- Modal -->
<div class="modal fade" id="privacyModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle"
 aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header text-center">
				<h3 class="modal-title">Aviso de privacidad</h3>
			</div>
			<div class="modal-body">
				<p>
					Sistema de Administración y Gestión de Dietas Especializado en Nutrición, mejor conocido como SAGDEN, con
					domicilio en calle Av. Juan de Dios Bátiz no. 22, colonia Lindavista, ciudad Linda/Vallejo, municipio o delegación
					Gustavo A. Madero, C.P 07738, en la entidad de Ciudad de México, país México, es el responsable del uso y
					protección de sus datos personales, y al respecto le informamos lo siguiente:
				</p>

				<h4>
					¿Para qué fines utilizaremos sus datos personales?
				</h4>

				<p>
					Los datos personales que recabamos de usted, los utilizaremos para las siguientes finalidades que son necesarias
					para el servicio que solicita:
				</p>
				<p>
					● Conocer su historia clínica
				</p>
				<p>
					● Conocer medios de comunicación (e-mail)
				</p>
				<p>
					● Recabar datos de hábitos alimenticios
				</p>
				<p>
					● Solicitar la prestación de Servicios
				</p>
				<p>
					● Crear perfiles personales
				</p>
				<p>
					● Tener acceso a información nutricional
				</p>
				<p>
					De manera adicional, utilizaremos su información personal para las siguientes finalidades secundarias que no son
					necesarias para el servicio solicitado, pero que nos permiten y facilitan brindarle una mejor atención:
				</p>
				<p>
					● Notificar al usuario sobre cambios de estatus.
				</p>
				<p>
					En caso de que no desee que sus datos personales se utilicen para estos fines secundarios, indíquelo a
					continuación:


					No consiento que mis datos personales se utilicen para los siguientes fines:

					[ ] Notificar al usuario sobre cambios de estatus.
				</p>
				<p>
					La negativa para el uso de sus datos personales para estas finalidades no podrá ser un motivo para que le neguemos
					los servicios y productos que solicita o contrata con nosotros.
				</p>

				<h4>
					¿Qué datos personales utilizaremos para estos fines?
				</h4>
				<p>
					Para llevar a cabo las finalidades descritas en el presente aviso de privacidad, utilizaremos los siguientes datos
					personales:
				</p>
				<p>
					● Nombre
				</p>
				<p>
					● Clave única de Registro de Población (CURP)
				</p>
				<p>
					● Teléfono celular
				</p>
				<p>
					● Correo electrónico
				</p>
				<p>
					● Edad
				</p>
				<p>
					● Fotografía
				</p>
				<p>
					● Peso
				</p>
				<p>
					● Tipo de sangre
				</p>
				<p>
					● Puesto o cargo que desempeña
				</p>
				<p>
					● Domicilio de trabajo
				</p>
				<p>
					● Correo electrónico institucional
				</p>
				<p>
					● Teléfono institucional
				</p>
				<p>
					● Trayectoria educativa
				</p>
				<p>
					● Cédula profesional
				</p>
				<p>
					● Seguros
				</p>
				<p>
					● Deportes que practica
				</p>
				<p>
					● Historial Clínico
				</p>

				<p>
					Además de los datos personales mencionados anteriormente, para las finalidades informadas en el presente aviso de
					privacidad utilizaremos los siguientes datos personales considerados como sensibles, que requieren de especial
					protección:
				</p>
				<p>
					● Estado de salud físico presente, pasado o futuro
				</p>
				<p>
					● Estado de salud mental presente, pasado o futuro
				</p>
				<h4>
					¿Cómo puede acceder, rectificar o cancelar sus datos personales, u oponerse a su uso?
				</h4>
				<p>
					Usted tiene derecho a conocer qué datos personales tenemos de usted, para qué los utilizamos y las condiciones del
					uso que les damos (Acceso). Asimismo, es su derecho solicitar la corrección de su información personal en caso de
					que esté desactualizada, sea inexacta o incompleta (Rectificación); que la eliminemos de nuestros registros o
					bases de datos cuando considere que la misma no está siendo utilizada adecuadamente (Cancelación); así como
					oponerse al uso de sus datos personales para fines específicos (Oposición). Estos derechos se conocen como
					derechos ARCO.
				</p>
				<p>
					Para el ejercicio de cualquiera de los derechos ARCO, usted deberá presentar la solicitud respectiva a través del
					siguiente medio:

					Página de Internet o Correo Electrónico

					Con relación al procedimiento y requisitos para el ejercicio de sus derechos ARCO, le informamos lo siguiente:

					a) ¿A través de qué medios pueden acreditar su identidad el titular y, en su caso, su representante, así como la
					personalidad este último?

					Página de Internet

					b) ¿Qué información y/o documentación deberá contener la solicitud?

					Motivo y dirección de correo

					c) ¿En cuántos días le daremos respuesta a su solicitud?

					7 días hábiles

					d) ¿Por qué medio le comunicaremos la respuesta a su solicitud?

					Correo

					e) ¿En qué medios se pueden reproducir los datos personales que, en su caso, solicite?

					Ninguno

					f) Ponemos a sus órdenes los siguientes formularios o sistemas para facilitar el ejercicio de derechos ARCO:

					Buzón de Quejas

					g) Para mayor información sobre el procedimiento, ponemos a disposición los siguientes medios:

					sagden.tt@gmail.com
				</p>
				<p>
					Los datos de contacto de la persona o departamento de datos personales, que está a cargo de dar trámite a las
					solicitudes de derechos ARCO, son los siguientes:

					a) Nombre de la persona o departamento de datos personales: Recursos Informáticos

					b) Domicilio: calle Av. Juan De Dios Bátiz, colonia Lindavista, ciudad Lindavista/Vallejo, municipio o delegación

					Gustavo A. Madero, C.P. 07738, en la entidad de Ciudad de México, país México

					c) Correo electrónico: sagden.tt@gmail.com

					d) Número telefónico: 5582440312
				</p>

				<p>
					Usted puede revocar su consentimiento para el uso de sus datos personales

					Usted puede revocar el consentimiento que, en su caso, nos haya otorgado para el tratamiento de sus datos
					personales. Sin embargo, es importante que tenga en cuenta que no en todos los casos podremos atender su solicitud
					o concluir el uso de forma inmediata, ya que es posible que por alguna obligación legal requiramos seguir tratando
					sus datos personales. Asimismo, usted deberá considerar que para ciertos fines, la revocación de su consentimiento
					implicará que no le podamos seguir prestando el servicio que nos solicitó, o la conclusión de su relación con
					nosotros.

					Para revocar su consentimiento deberá presentar su solicitud a través del siguiente medio:

					Llenar una solicitud de queja
				</p>

				<p>
					Con relación al procedimiento y requisitos para la revocación de su consentimiento, le informamos lo siguiente:

					a) ¿A través de qué medios pueden acreditar su identidad el titular y, en su caso, su representante, así como la
					personalidad este último?

					Redes Sociales

					b) ¿Qué información y/o documentación deberá contener la solicitud?

					Motivo y correo electrónico

					c) ¿En cuántos días le daremos respuesta a su solicitud?

					7 días hábiles

					d) ¿Por qué medio le comunicaremos la respuesta a su solicitud?

					Correo Electrónico

					e) Para mayor información sobre el procedimiento, ponemos a disposición los siguientes medios:

					Buzón de Quejas
				</p>

				<h4>
					¿Cómo puede limitar el uso o divulgación de su información personal?
				</h4>
				<p>
					Con objeto de que usted pueda limitar el uso y divulgación de su información personal, le ofrecemos los siguientes
					medios:

					No compartir su información con nadie

					Asimismo, usted se podrá inscribir a los siguientes registros, en caso de que no desee obtener publicidad de
					nuestra parte:

					Registro Público de Usuarios, para mayor información consulte el portal de internet de la CONDUSEF

					El uso de tecnologías de rastreo en nuestro portal de internet

					Le informamos que en nuestra página de internet utilizamos cookies, web beacons u otras tecnologías, a través de
					las cuales es posible monitorear su comportamiento como usuario de internet, así como brindarle un mejor servicio
					y experiencia al navegar en nuestra página. Los datos personales que recabamos a través de estas tecnologías, los
					utilizaremos para los siguientes fines:

					Finalidades Estadísticas del Usuario

					Los datos personales que obtenemos de estas tecnologías de rastreo son los siguientes:

					Tipo de navegador del usuario

					Tipo de sistema operativo del usuario

					Fecha y hora del inicio y final de una sesión de un usuario

					Para conocer la forma en que se pueden deshabilitar estas tecnologías, consulte el siguiente medio:

					https://support.google.com/chrome/answer/95647?co=GENIE.Platform%3DDesktop&hl=es
				</p>
				<h4>¿Cómo puede conocer los cambios en este aviso de privacidad?</h4>
				<p>
					El presente aviso de privacidad puede sufrir modificaciones, cambios o actualizaciones derivadas de nuevos
					requerimientos legales; de nuestras propias necesidades por los productos o servicios que ofrecemos; de nuestras
					prácticas de privacidad; de cambios en nuestro modelo de negocio, o por otras causas.

					Nos comprometemos a mantenerlo informado sobre los cambios que pueda sufrir el presente aviso de privacidad, a
					través de: Correo.

					El procedimiento a través del cual se llevarán a cabo las notificaciones sobre cambios o actualizaciones al
					presente aviso de privacidad es el siguiente:

					Se le enviará un correo electrónico registrado en el sistema, el cual tendrá que está vigente.

					Su consent imiento para el tratamiento de sus datos personales
				</p>

				<p>
					Consiento que mis datos personales sean tratados de conformidad con los términos y condiciones informados en el
					presente aviso de privacidad.
				</p>

				<p>
					*Última actualización: 08/05/2018
				</p>
			</div>
			<div class="modal-footer">
				<div class="container-fluid">
					<div class="row justify-content-md-center">
						<div class="col-md-4">
							<button type="button" class="btn btn-outline-info btn-block" data-dismiss="modal">Cerrar</button>
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
