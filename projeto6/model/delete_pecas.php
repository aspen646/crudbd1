<?php
include_once'conexao.php';
try{

	$stmt=$conexao->prepare("DELETE  FROM pecas WHERE id=:id");

	$stmt->bindParam("id", $_GET['id'], PDO::PARAM_INT);


	$Result=$stmt->execute();

	if(!$Result){
		echo "ERRO NO SELECT!!!";
	}else{
		header('Location: ../view/pecas/pecaview.php');
exit;

	}


}catch (PDOException $e){
	echo "Error:".$e->getMessage();
}


?>
