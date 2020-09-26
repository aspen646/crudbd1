<?php
include_once'conexao.php';
try{
	$nome_peca =$_POST['nome_peca'];
	$preco =$_POST['preco'];
	$descricao =$_POST['descricao'];
	$fabricante =$_POST['fabricante'];
	if(empty($nome_peca)||empty($preco) ||empty($descricao) ||empty($fabricante))
    {
		header('Location: ../view/pecas/pecaview.php?erro=0&mensagem=Há campos vazios no formulário');
        exit;
    }

	else{
		$stmt=$conexao->prepare("INSERT INTO  pecas (nome_peca, preco,fabricante,descricao) VALUES (:nome_peca,:preco,:fabricante,:descricao)");
		$stmt->bindParam(':nome_peca',$nome_peca);
		$stmt->bindParam(':preco',$preco);
        $stmt->bindParam(':fabricante',$fabricante);
		$stmt->bindParam(':descricao',$descricao);
		$Result=$stmt->execute();
		if($Result){
			header('Location: ../view/pecas/pecaview.php?erro=1&mensagem=Item inserido com sucesso!');
			exit;
		}
	}



}catch(PDOException $e){
	echo "Error:".$e->getMessage();
}
