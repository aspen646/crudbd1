<?php
include_once'conexao.php';
try{
	$stmt=$conexao->prepare("SELECT  * FROM pecas WHERE id=:id");
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