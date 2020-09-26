<?php
include_once'../../model/conexao.php';
try{
	$stmt=$conexao->prepare("SELECT  * FROM veiculo");
	$Result=$stmt->execute();

	if(!$Result){
		echo "ERRO NO SELECT!!!";

	}

}catch (PDOException $e){
	echo "Error:".$e->getMessage();
}

?>

<table style="width:100%">
	<thead>
		<tr>
			<th>#</th>
			<th>Cor</th>
			<th>Marca</th>
			<th>Modelo</th>
			<th>Chassi</th>
			<th>Ano</th>
			<th>Preço R$</th>

		</tr>
	</thead>
	<tbody>
		<?php
		while ($row=$stmt->fetch()) {
			$id=$row['id'];
			echo"<tr>";
			echo"<td>".$row['id']."</td>";
			echo"<td>".$row['cor']."</td>";
			echo"<td>".$row['marca']."</td>";
			echo"<td>".$row['modelo']."</td>";
      echo"<td>".$row['chassi']."</td>";
			echo"<td>".$row['ano']."</td>";
			echo"<td>".$row['preco']."</td>";
			echo "<td>
			<a href='./php/view_update.php?id=$id'> <button> Editar</button></a>
            <form action='./model/veiculo/delete_veiculo.php' method='Post'>
            <input type='hidden' name='id' value=".$row['id'].">

            <button type='submit'> Excluir</button>
			</form>

			</td> ";
			echo"</tr>";


		}

		?>
	</tbody>
</table>

<script>
    function Delete(id)
    {

        if(window.confirm('Deseja realmente deletar este item ?','_self'))
            {
                window.open('delete_veiculo.php?id='+id);
            }
    }

</script>
