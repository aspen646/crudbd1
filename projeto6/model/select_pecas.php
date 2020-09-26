<?php
include_once'conexao.php';
try{
	$stmt=$conexao->prepare("SELECT  * FROM pecas");
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
			<th>Nome Peças</th> 
			<th>Preço R$</th>
			<th>Descrição</th>
			<th>Fabricante</th>

		</tr>
	</thead>
	<tbody>
		<?php
		while ($row=$stmt->fetch()) {
			$id=$row['id'];
			echo"<tr>";
			echo"<td>".$row['id']."</td>";
			echo"<td>".$row['nome_peca']."</td>";
			echo"<td>".$row['preco']."</td>";
			echo"<td>".$row['fabricante']."</td>";
            echo"<td>".substr($row['descricao'], 0, 10)."</td>";
			echo "<td>
			<a href='./php/view_update.php?id=$id'> <button> Editar</button></a>
            <form action='./model/delete_pecas.php' method='Post'>
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
                window.open('delete_pecas.php?id='+id);
            }
    }

</script>