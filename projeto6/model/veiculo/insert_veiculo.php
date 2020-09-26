<?php
include_once'../../model/conexao.php';
try{
	$cor =$_POST['cor'];
	$marca =$_POST['marca'];
	$modelo =$_POST['modelo'];
	$chassi =$_POST['chassi'];
	$ano =$_POST['ano'];
	$preco =$_POST['preco'];
	if(empty($cor)||empty($marca) ||empty($modelo)||empty($chassi)||empty($ano)||empty($preco))
    {
		header('Location: ../../view/veiculo/veiculoview.php?erro=0&mensagem=Há campos vazios no formulário');
        exit;
    }

	else{
		$stmt=$conexao->prepare("INSERT INTO  veiculo (cor,marca,modelo,chassi,ano,preco) VALUES (:cor,:marca,:modelo,:chassi,:ano,:preco)");
		$stmt->bindParam(':cor',$cor);
		$stmt->bindParam(':marca',$marca);
    $stmt->bindParam(':modelo',$modelo);
		$stmt->bindParam(':chassi',$chassi);
		$stmt->bindParam(':ano',$ano);
		$stmt->bindParam(':preco',$preco);
		$Result=$stmt->execute();
		if($Result){
			header('Location: ../../view/veiculo/veiculoview.php?erro=1&mensagem=Item inserido com sucesso!');
			exit;
		}
	}



}catch(PDOException $e){
	echo "Error:".$e->getMessage();
}
