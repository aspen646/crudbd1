<?php
include_once'conexao.php';
try{
	$stmt=$conexao->prepare("SELECT  * FROM pecas where id={$_GET['id']}");
	$Result=$stmt->execute();

	if(!$Result){
		echo "ERRO NO SELECT!!!";

	}

	$data=$stmt->fetch();


}catch (PDOException $e){
	echo "Error:".$e->getMessage();
}


?>
<html>
<body>
	<title>
		Formulario para edição
    </title>
</body>
<h2>Formulario Editar.</h2>
<form action="../../model/update_pecas.php" method="Post">
	<input type="hidden" name="id" value="<?= $data["id"]?>">
	<table>
		<tr>
			<td>
				Nome da peça: <input type="text" name="nome_peca" value='<?php echo $data['nome_peca']?>'>
			</td>
		</tr>
		<tr>
			<td>
				Descrição: <input type="text" name="descricao" value='<?php echo $data['descricao']?>'>
			</td>
		</tr>
		<tr>
			<td>
				Fabricante: <input type="text" name="fabricante" value='<?php echo $data['fabricante']?>'>
			</td>
		</tr>
		<tr>
			<td>
				Preço: <input type="number" name="preco" value='<?php echo $data['preco']?>'>
			</td>
			<td>
				<button type='submit'> Salvar</button>
				<a href='../../index.php'> <button type='button'> Cancelar</button> </a> 
			</td>
	 	</tr>
	</table>


</form>
</htmil>