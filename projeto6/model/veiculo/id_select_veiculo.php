<?php
include_once'../../model/conexao.php';
try{
	$stmt=$conexao->prepare("SELECT  * FROM veiculo WHERE id=:id");
    $stmt->bindParam(':id',$id);
	$Result=$stmt->execute();

	if(!$Result){
		echo "ERRO NO SELECT!!!";

	} else{
        $data=$stmt->fetch();

    }


}catch (PDOException $e){
	echo "Error:".$e->getMessage();
}

?>
