<?php
include_once'../../model/conexao.php';
try{
	// $stmt=$conexao->prepare("UPDATE pecas SET nome_peca=".$_POST['nome_peca'].", preco=".$_POST['preco']." WHERE id=".$_POST['id']);

	$stmt=$conexao->prepare("UPDATE veiculo SET cor=:cor, marca=:marca, modelo=:modelo, chassi=:chassi, ano=:ano, preco=:preco WHERE id=:id");

	$stmt->bindParam("cor", $_POST['cor'], PDO::PARAM_STR);
	$stmt->bindParam("marca", $_POST['marca'], PDO::PARAM_STR);
	$stmt->bindParam("id", $_POST['id'], PDO::PARAM_INT);
	$stmt->bindParam("modelo", $_POST['modelo'], PDO::PARAM_STR);
	$stmt->bindParam("chassi", $_POST['chassi'], PDO::PARAM_STR);
	$stmt->bindParam("ano", $_POST['ano'], PDO::PARAM_STR);
	$stmt->bindParam("preco", $_POST['preco'], PDO::PARAM_STR);

	$Result=$stmt->execute();

	if(!$Result){
		header('Location: ../../view/veiculo/veiculoview.php?erro=0&mensagem= Atualização não efetuada.');
        exit;
	}else{
		header('Location: ../../view/veiculo/veiculoview.php?erro=1&mensagem=Atualização realizada com sucesso.');
exit;

	}


}catch (PDOException $e){
	echo "Error:".$e->getMessage();
}


?>
