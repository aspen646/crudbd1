<?php include_once "../../view/template/header.php" ?>
<main>
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="../../index.php">Pagina Inicial</a></li>
    <li class="breadcrumb-item"><a href="./veiculoview.php">Veículos</a></li>

    <li class="breadcrumb-item active" aria-current="page">Editar</li>
  </ol>
</nav>
    <?php
    $id=$_GET['id'];
    include_once '../../model/veiculo/id_select_veiculo.php';
    ?>


	<!--FORMULARIO-->
	<div id="main" class="container">
		<h3 class="page-header">Editar Item</h3>
        <form action="../../model/veiculo/update_veiculo.php" method="Post">

    <input type='hidden' name='id' value="<?=$data['id'] ?>">
	<div class="row">
	 <div class="form-group col-md-4">
	   <label for="campo1">Cor do Veículo</label>
	   <input type="text" class="form-control" name='cor' value="<?=$data['cor'] ?>" id="campo1">
	 </div>

	 <div class="form-group col-md-4">
	   <label for="campo2">Marca</label>
	   <input type="text" class="form-control" name='marca' value="<?=$data['marca'] ?>" id="campo2">
	 </div>

	 <div class="form-group col-md-4">
	   <label for="campo3">Modelo </label>
	   <input type="text" class="form-control" name='modelo' value="<?=$data['modelo'] ?>"id="campo3">
	 </div>

   <div class="form-group col-md-4">
     <label for="campo4">Chassi </label>
     <input type="text" class="form-control" name='chassi' value="<?=$data['chassi'] ?>"id="campo4">
   </div>

   <div class="form-group col-md-4">
	   <label for="campo5">Ano </label>
	   <input type="date" class="form-control" name='ano' value="<?=$data['ano'] ?>"id="campo5">
	 </div>

   <div class="form-group col-md-4">
	   <label for="campo6">Preço R$ </label>
	   <input type="number" step="0.010" class="form-control" name='preco' value="<?=$data['preco'] ?>"id="campo6">
	 </div>

	</div>




	 <!-- SALVAR/CANCELAR -->
	 <hr />
	 <div id="actions" class="row">
		<div class="col-md-12">
		  <button type="submit" class="btn btn-primary">Salvar</button>
		  <a href="veiculoview.php" class="btn btn-default">Cancelar</a>
		</div>
	  </div>
	</form>
    </div>
</main>
<?php include_once "../../view/template/footer.php" ?>