<?php
	require_once (__DIR__ . '/class/interessados.class.php');
?>

<!DOCTYPE HTML>
<html land="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1" />
   <title>teste</title>
</head>
<body>

	<div class="container">

		<?php
	
		include 'callFactory.php';

		if(isset($_POST['cadastrar'])):

			$nome  = $_POST['nome'];
			$email = $_POST['email'];
            $telefone = $_POST['telefone'];
            $estudouIngles = $_POST['estudouIngles'];
            $quantoTempo = $_POST['quandoTempo'];
            $nota = $_POST['nota'];
            $imagem = $_POST['imagem'];
            $mensagem = $_POST['mensagem'];
            $registro = $_POST['registro'];
            $data = $_POST['data'];
            
            $dados = [$nome, $email, $telefone, $estudouIngles, $quantoTempo, $nota, $imagem, $mensagem, $registro, $data];

			$interessado->setDados($dados);
			

			# Insert
			if($interessado->insert()){
				echo "Inserido com sucesso!";
			}

		endif;

		?>
		<header class="masthead">
			<h1 class="muted">Teste</h1>
			<nav class="navbar">
				<div class="navbar-inner">
					<div class="container">
						<ul class="nav">
							<li class="active"><a href="index.php">Página inicial</a></li>
						</ul>
					</div>
				</div>
			</nav>
		</header>

		<?php 
		if(isset($_POST['atualizar'])):

			$nome  = $_POST['nome'];
			$email = $_POST['email'];
            $telefone = $_POST['telefone'];
            $estudouIngles = $_POST['estudouIngles'];
            $quantoTempo = $_POST['quandoTempo'];
            $nota = $_POST['nota'];
            $imagem = $_POST['imagem'];
            $mensagem = $_POST['mensagem'];
            $registro = $_POST['registro'];
            $data = $_POST['data'];

			$interessado->setDados($dados);

			if($interessado->update($id)){
				echo "Atualizado com sucesso!";
			}

		endif;
		?>

		<?php
		if(isset($_GET['acao']) && $_GET['acao'] == 'deletar'):

			$id = (int)$_GET['id'];
			if($interessado->delete($id)){
				echo "Deletado com sucesso!";
			}

		endif;
		?>

		<?php
		if(isset($_GET['acao']) && $_GET['acao'] == 'editar'){

			$id = (int)$_GET['id'];
			$resultado = $interessado->find($id);
		?>

		<form method="post" action="">
			<div class="input-prepend">
				<span class="add-on"><i class="icon-user"></i></span>
				<input type="text" name="nome" value="<?php echo $resultado->nome; ?>" placeholder="Nome:" />
			</div>
			<div class="input-prepend">
				<span class="add-on"><i class="icon-envelope"></i></span>
				<input type="text" name="email" value="<?php echo $resultado->email; ?>" placeholder="E-mail:" />
			</div>
			<input type="hidden" name="id" value="<?php echo $resultado->id; ?>">
			<br />
			<input type="submit" name="atualizar" class="btn btn-primary" value="Atualizar dados">					
		</form>

		<?php }else{ ?>


		<form method="post" action="">
			<div class="input-prepend">
				<span class="add-on"><i class="icon-user"></i></span>
				<input type="text" name="nome" placeholder="Nome:" />
			</div>
			<div class="input-prepend">
				<span class="add-on"><i class="icon-envelope"></i></span>
				<input type="text" name="email" placeholder="E-mail:" />
			</div>
			<br />
			<input type="submit" name="cadastrar" class="btn btn-primary" value="Cadastrar dados">					
		</form>

		<?php } ?>

		<table class="table table-hover">
			
			<thead>
				<tr>
					<th>#</th>
					<th>Nome:</th>
					<th>E-mail:</th>
					<th>Ações:</th>
				</tr>
			</thead>
			
			<?php foreach($interessado->findAll() as $key => $value): ?>

			<tbody>
				<tr>
					<td><?php echo $value->id; ?></td>
					<td><?php echo $value->nome; ?></td>
                    <td><?php echo $value->telefone; ?></td>
                    <td><?php echo $value->nome; ?></td>
					<td><?php echo $value->email; ?></td>
					<td>
						<?php echo "<a href='index.php?acao=editar&id=" . $value->id . "'>Editar</a>"; ?>
						<?php echo "<a href='index.php?acao=deletar&id=" . $value->id . "' onclick='return confirm(\"Deseja realmente deletar?\")'>Deletar</a>"; ?>
					</td>
				</tr>
			</tbody>

			<?php endforeach; ?>

		</table>

	</div>

<script src="js/jQuery.js"></script>
<script src="js/bootstrap.js"></script>
</body>
</html>