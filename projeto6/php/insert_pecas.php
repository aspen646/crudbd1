<?php
include_once'conexao.php';
try{
	$nome_peca =$_POST['nome_peca'];
	$preco =$_POST['preco'];
	$descricao =$_POST['descricao'];
	$fabricante =$_POST['fabricante'];
	
	
	if(empty($nome_peca)||empty($preco) || empty($descricao)|| empty($fabricante))
		echo "O campo nome peças, preço, fabricante ou descricao está vazio";
	else{
		$stmt=$conexao->prepare("INSERT INTO  pecas (nome_peca, preco,descricao, fabricante) VALUES (:nome_peca,:preco,:descricao,:fabricante)");
		$stmt->bindParam(':nome_peca',$nome_peca);
		$stmt->bindParam(':preco',$preco);
		$stmt->bindParam(':descricao',$descricao);
		$stmt->bindParam(':fabricante',$fabricante);
		$Result=$stmt->execute();
		if($Result){

			header('Location: http://localhost/projeto/');
			exit;
		}
	}



}catch(PDOException $e){
	echo "Error:".$e->getMessage();
}