<?php include_once "../../view/template/header.php" ?>
<main>

         <nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="../../index.php">Pagina Inicial</a></li>
    <li class="breadcrumb-item"><a href="./pecaview.php">Peças</a></li>

    <li class="breadcrumb-item active" aria-current="page">Editar</li>
  </ol>
</nav>
    <?php
    $id=$_GET['id'];
    include_once '../../model/id_select_pecas.php';
    ?>


	<!--FORMULARIO-->
	<div id="main" class="container">
		<h3 class="page-header">Editar Item</h3>
        <form action="../../model/update_pecas.php" method="Post">
            
    <input type='hidden' name='id' value="<?=$data['id'] ?>">
	<div class="row">
	 <div class="form-group col-md-4">
	   <label for="campo1">Nome da Peça</label>
	   <input type="text" class="form-control" name='nome_peca' value="<?=$data['nome_peca'] ?>" id="campo1">
	 </div>

	 <div class="form-group col-md-4">
	   <label for="campo2">Preço</label>
	   <input type="number" step="0.010"  class="form-control" name='preco' value="<?=$data['preco'] ?>" id="campo2">
	 </div>

	 <div class="form-group col-md-4">
	   <label for="campo3">Fabricante </label>
	   <input type="text" class="form-control" name='fabricante' value="<?=$data['fabricante'] ?>"id="campo3">
	 </div>
        <div class="form-group col-md-4">
           <label for="campo4">Descrição</label>
            <textarea name="descricao"value="<?=$data['descricao'] ?>"id="campo4"rows="5"cols="160%"class=""><?=$data['descricao'] ?></textarea>
         </div>
	</div>

	

	
	 <!-- SALVAR/CANCELAR -->
	 <hr />
	 <div id="actions" class="row">
		<div class="col-md-12">
		  <button type="submit" class="btn btn-primary">Salvar</button>
		  <a href="pecaview.php" class="btn btn-default">Cancelar</a>
		</div>
	  </div>
	</form>
    </div>
	
</main>

<?php include_once "../../view/template/footer.php" ?>
