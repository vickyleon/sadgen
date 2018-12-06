<div [ngClass]="{'mini_alert': true, 'danger': alertType === 'danger', 'warning': alertType === 'warning', 'success': alertType === 'success'}"  *ngIf="show" data-dismiss="alert">
	<i class="material-icons close" (click)="closeMiniAlert()">&#xE5CD;</i>
	<div class="in">
		{{ message }}
	</div>
</div>