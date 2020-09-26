<?php
include_once'../../model/conexao.php';
try{

	$stmt=$conexao->prepare("DELETE  FROM veiculo WHERE id=:id");

	$stmt->bindParam("id", $_GET['id'], PDO::PARAM_INT);


	$Result=$stmt->execute();

	if(!$Result){
		echo "ERRO NO SELECT!!!";
	}else{
		header('Location: ../../view/veiculo/veiculoview.php');
exit;

	}


}catch (PDOException $e){
	echo "Error:".$e->getMessage();
}


?>
