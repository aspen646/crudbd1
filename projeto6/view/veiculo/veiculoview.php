
    <?php
include_once "../../view/template/header.php";
include_once '../../model/conexao.php';
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
<main>
    <nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="../../index.php">Pagina Inicial</a></li>
    <li class="breadcrumb-item active" aria-current="page">Veículos</li>
  </ol>
</nav>

 <div id="main" class="container" style="margin-top: 50px">

 	<div id="top" class="row">
		<div class="col-sm-3">
			<h2>Itens</h2>
		</div>
		<div class="col-sm-6">

			<div class="text-center h2">
				<h2> VEÍCULOS</h2>
			</div>

		</div>
		<div class="col-sm-3">
			<a href="#" class="btn btn-primary pull-right h2" data-toggle='modal' data-target='#add'>Novo Item</a>
		</div>
	</div> <!-- /#top -->
     <?php if(isset($_GET['erro']) && empty($_GET['erro']) && $_GET['erro']==0){?>

        <div class="alert alert-danger" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <div> <?=($_GET['mensagem']) ?> </div>
        </div>
     <?php } else{   ?>
     <?php  if(isset($_GET['mensagem']) && !empty($_GET['mensagem'])){   ?>
            <div class="alert alert-success" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <div><?=($_GET['mensagem'])?> </div>
            </div>
     <?php } ?>
     <?php } ?>
 	<hr />
 	<div id="list" class="row">

	<div class="table-responsive col-md-12">
		<table class="table table-striped" cellspacing="0" cellpadding="0">
			<thead>
				<tr>
					<th>ID</th>
					<th>Cor do Veículo</th>
					<th>Marca</th>
					<th>Modelo</th>
          <th>Chassi</th>
          <th>Ano</th>
          <th>Preço R$</th>

					<th class="actions">Ações</th>
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

                    echo"<td class='action'>
                        <a class='btn btn-success btn-xs' href='view.php?id=$id'>Visualizar</a>
						<a class='btn btn-warning btn-xs' href='edit.php?id=$id'>Editar</a>
                        <button onclick='Delete($id)'class='btn btn-danger btn-xs' >Excluir</button>
                    </td>";
                  "</tr>";


                }
               ?>
			</tbody>
		</table>
	</div>

    <script>
    function Delete(id)
    {

        if(window.confirm('Deseja realmente deletar este item ?','_self'))
            {
                window.open('../../model/veiculo/delete_veiculo.php?id='+id,'_self');
            }
    }

</script>

	</div> <!-- /#list -->
 <!-- /#bottom -->
 </div> <!-- /#main -->
</main>
    <?php
    include_once "../../view/veiculo/modal/add.php";
    include_once "../../view/template/footer.php";
    ?>

