<?php include_once "../../view/template/header.php" ?>
<main>
    <nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="index.php">Pagina Inicial</a></li>
    <li class="breadcrumb-item"><a href="pecaview.php">Peças</a></li>

    <li class="breadcrumb-item active" aria-current="page">Visualizar</li>
  </ol>
</nav>
     <?php
    $id=$_GET['id'];
    include_once '../../model/id_select_pecas.php';
    ?>


	<div id="main" class="container">
		<h3 class="page-header">Visualizar Item #<?=$data['id'] ?></h3>
		<div class="row">
	  <div class="col-md-4">
		<p><strong>Nome da Peça</strong></p>
		<p><?=$data['nome_peca'] ?></p>
	  </div>
	  <div class="col-md-4">
		<p><strong>Preço R$</strong></p>
		<p><?=$data['preco'] ?></p>
	  </div>
	  <div class="col-md-4">
		<p><strong>Fabricante</strong></p>
		<p><?=$data['fabricante'] ?></p>
	  </div>
        <div class="col-md-4">
		<p><strong>Descrição</strong></p>
		<p><?=$data['descricao'] ?></p>
	  </div>
	</div> <!-- .row -->

	<hr />
	<div id="actions" class="row">
	 <div class="col-md-12">
	   <a href="pecaview.php" class="btn btn-primary">Voltar</a>
	   <a class='btn btn-warning' href='edit.php?id=<?=$data['id']?>'>Editar</a>
	   <a href="#" class="btn btn-danger" onclick="Delete(<?=$data['id']?>)">Excluir</a>
	 </div>
	</div>
	</div>
    <script>
    function Delete(id)
    {
        
        if(window.confirm('Deseja realmente deletar este item ?','_self'))
            {
                window.open('../../model/delete_pecas.php?id='+id,'_self');
            }
    }

</script>
</main>

<?php include_once "../../view/template/footer.php" ?>


