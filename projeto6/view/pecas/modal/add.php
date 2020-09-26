<!-- Modal -->
<div class="modal fade"  id="add" tabindex="-1" role="dialog" aria-labelledby="modalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
        <form action="../../model/insert_pecas.php" method="Post">
        
        
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="modalLabel">Cadastrar Peça</h4>
      </div>
        
        
      <div class="modal-body">
          <div class="row">
            <div class="form-group col-md-4">
           <label for="campo1">Nome da Peça</label>
           <input name='nome_peca' type="text" class="form-control" id="campo1" placeholder="Digite o nome da peça">
         </div>

         <div class="form-group col-md-4">
           <label for="campo2">Preço R$</label>
           <input name='preco' type="number" step="0.010" class="form-control" id="campo2" placeholder="Digite o preço">
         </div>

         <div class="form-group col-md-4">
           <label for="campo3">Fabricante</label>
           <input name='fabricante' type="text" class="form-control" id="campo3" placeholder="Digite o nome do Fabricante">
         </div>

        <div class="form-group col-md-4">
           <label for="campo4">Descrição</label>
            <textarea name="descricao"rows="5"cols="78%"></textarea>
         </div>
          </div>
      </div>
        
        
          <div class="modal-footer">
            <button type="submit" class="btn btn-primary">Salvar</button>
            <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
          </div>
        </form>
        
        
    </div>
  </div>
</div>


<!--FORMULARIO-->

	
	 
        
	




	 <!-- SALVAR/CANCELAR -->
	 


