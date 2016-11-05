 <?php include('html/menu.php'); ?> 
	
	<section class="sect1">
		 <h3 class="cen">Medico</h3>
		 <form class="cen" method="post" action="">
		 	<input class="input-top" type="text" name="nombre" placeholder="Nombre*">
			<input class="input-top" type="text" name="apellidos" placeholder="Apellidos*">
			<input class="input-top" type="text" name="cedula" placeholder="Cedula*">
			<input class="input-top" type="text" name="especialidad" placeholder="Especialidad*">
			<input class="input-top" type="text" name="telefonos" placeholder="Telefonos con lada*">
			<input class="input-top" type="text" name="email" placeholder="E-mail*">
			<input id="boton-top" class="boton" type="submit" value="Guardar">
		</form>
	</section>
<?php include('html/end.php'); ?> 