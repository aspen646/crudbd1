<!-- Modal -->
<div class="modal fade"  id="add" tabindex="-1" role="dialog" aria-labelledby="modalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
        <form action="../../model/veiculo/insert_veiculo.php" method="Post">


      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="modalLabel">Cadastrar Veículo</h4>
      </div>


      <div class="modal-body">
          <div class="row">
            <div class="form-group col-md-4">
           <label for="campo1">Cor do Veículo</label>
           <input name='cor' type="text" class="form-control" id="campo1" placeholder="Digite a cor do veículo">
         </div>

         <div class="form-group col-md-4">
        <label for="campo2">Marca do Veículo</label>
        <input name='marca' type="text" class="form-control" id="campo2" placeholder="Digite a marca do veículo">
        </div>

        <div class="form-group col-md-4">
        <label for="campo3">Modelo do Veículo</label>
        <input name='modelo' type="text" class="form-control" id="campo3" placeholder="Digite o modelo do veículo">
        </div>

         <div class="form-group col-md-4">
           <label for="campo4">Chassi</label>
           <input name='chassi' type="text" class="form-control" id="campo4" placeholder="Digite o chassi">
         </div>

         <div class="form-group col-md-4">
           <label for="campo5">Ano</label>
           <input name='ano' type="date" class="form-control" id="campo5" placeholder="Digite o ano">
         </div>

         <div class="form-group col-md-4">
           <label for="campo6">Preço R$</label>
           <input name='preco' type="number" step="0.010" class="form-control" id="campo6" placeholder="Digite o preço">
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
