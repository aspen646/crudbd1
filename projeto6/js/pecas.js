
    function Delete(id)
    {
        
        if(window.confirm('Deseja realmente deletar este item ?','_self'))
            {
                window.open('./model/delete_pecas.php?id='+id,'_self');
            }
    }

