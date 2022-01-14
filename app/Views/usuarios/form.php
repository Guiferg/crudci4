<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Novo Usuário</title>
</head>
<body>
	<h1>Novo Usuário</h1>
	<?php echo form_open('usuario/store'); ?>
		<p>
			<label for="nome">Nome</label>
			<input type="text" name="nome" id="nome" <?php echo isset($usuario) ? 'value="'.$usuario['nome'].'"' : '';?>>
		</p>
		<p>
			<label for="email">Email</label>
			<input type="text" name="email" id="email" <?php echo isset($usuario) ? 'value="'.$usuario['email'].'"' : '';?>>
		</p>
		<p>
			<input type="submit" value="Salvar">
		</p>
		<input type="hidden" name="id" <?php echo isset($usuario) ? 'value="'.$usuario['id'].'"' : '';?>>
	</form>
</body>
</html>