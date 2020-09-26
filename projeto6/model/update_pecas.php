<?php
include_once'conexao.php';
try{
	// $stmt=$conexao->prepare("UPDATE pecas SET nome_peca=".$_POST['nome_peca'].", preco=".$_POST['preco']." WHERE id=".$_POST['id']);

	$stmt=$conexao->prepare("UPDATE pecas SET nome_peca=:nome, preco=:preco, descricao=:descricao, fabricante=:fabricante WHERE id=:id");

	$stmt->bindParam("nome", $_POST['nome_peca'], PDO::PARAM_STR);
	$stmt->bindParam("preco", $_POST['preco'], PDO::PARAM_STR);
	$stmt->bindParam("id", $_POST['id'], PDO::PARAM_INT);
	$stmt->bindParam("descricao", $_POST['descricao'], PDO::PARAM_STR);
	$stmt->bindParam("fabricante", $_POST['fabricante'], PDO::PARAM_STR);



	$Result=$stmt->execute();

	if(!$Result){
		header('Location: ../view/pecas/pecaview.php?erro=0&mensagem= Atualização não efetuada.');
        exit;
	}else{
		header('Location: ../view/pecas/pecaview.php?erro=1&mensagem=Atualização realizada com sucesso.');
exit;

	}


}catch (PDOException $e){
	echo "Error:".$e->getMessage();
}


?>
