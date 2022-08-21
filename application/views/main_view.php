<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<title>UMG Desarrollo Web</title>
	<link rel = "stylesheet" type = "text/css" href = "<?php echo base_url(); ?>css/Styles.css">
	
</head>
<body style="background-color:#808080; padding: 20px;">
	<div class="container">

		<div class="row" >
			<h2>UMG Forms</h2>
		</div>



		<!-- Formulario -->
		
		<div class="mb-5">
		<?php echo form_open('welcome/agregar', [ 'id' =>'form-persona']); ?>
			<form action="">
				<div class="row">
				<div class="form-group col-sm-4">
								<label for="">Name</label>
								<input type="text" name="nombre" class="form-control" required placeholder="Nombre" id="nombre">
							</div>
							<div class="form-group col-sm-4">
							<label for="">Last Name</label>
							<input type="text" name="apellido" class="form-control" required placeholder="Apellido" id="apellido">
						</div>
						<div class="form-group col-sm-4">
							<label for="">Direction</label>
							<input type="text" name="direccion" class="form-control" required placeholder="Direccion" id="direccion">
						</div>
				</div>
				<div class="row">
					<div class="form-group col-sm-4">
							<label for="">Movil</label>
							<input type="text" name="movil" class="form-control" required placeholder="+502 1111-1111" id="movil">
						</div>
						<div class="form-group col-sm-4">
							<label for="">Email</label>
							<input type="text" name="email" class="form-control" required placeholder="ejemplo@gmail.com" id="email">
						</div>
					</div>
					<button type="submit" class="btn btn-primary btn-block">Save</button>
				</div>
				<?php echo form_close(); ?>
				
				</form>
				
			</div>
		<!-- Tabla de Datos -->

			<div class="row">
				<div class="card col-12" style="background-color:#808080; padding: 20px;">
					<div class="card-header" style="background-color:#808080; padding: 20px;">
						<h4>UMG Users</h4>
					</div>
					<div class="card-body" style="background-color:#808080; padding: 20px;">
						<table class="table table-striped table-dark">
							<thead>
								<tr>
									<th scope="col">#</th>
									<th scope="col">Name</th>
									<th scope="col">Direction</th>
									<th scope="col">Movil</th>
									<th scope="col">Editar</th>
									<th scope="col">Delete</th>
									
								</tr>
							</thead>
								<tbody>
									<?php
										$count =  0;
										foreach ($personas as $persona){
											echo '
											<tr> 
												<td>'.++$count.' </td>
												<td>'.$persona->nombre.' '.$persona->apellido.' </td>
												<td>'.$persona->direccion.' </td>
												<td>'.$persona->movil.' </td>
												<td><button type="button" class="btn btn-warning text-white" onclick="llenar_datos
												('.$persona->alumno.', `'.$persona->nombre.'`, `'.$persona->apellido.'`, `'.$persona->direccion.'`, `'.$persona->movil.'`, `'.$persona->email.'`)">Edi</button></td>		
												<td><a href="'.base_url('welcome/eliminar/'.$persona->alumno).'" type="button" class="btn btn-danger">Delete</a></td>		
											</tr>
											';	
										}
									?>
							</tbody>
						</table>
					</div>
				</div>

		
			


	</div>

	<script>

			let url = "<?php echo base_url('welcome/editar'); ?>";
			const llenar_datos = (alumno, nombre, apellido, direccion, movil, email) => {
				let path = url+"/"+alumno;
				document.getElementById('form-persona').setAttribute('action', path);
				
				document.getElementById('nombre').value = nombre;
				document.getElementById('apellido').value = apellido;
				document.getElementById('direccion').value = direccion;
				document.getElementById('movil').value = movil;
				document.getElementById('email').value = email;
			};
		
		</script>
</body>
</html>