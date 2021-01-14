
<div class="col-9 central mb-3">
<span class="p-2 bg-title text-light text-uppercase h5 mb-0 text-branco"><i class="fas fa-plus-circle"></i> Cadastrar categoria</span>
                        
<form action="" method="Post">
            <div class="col-6 d-block m-auto rows px-5 py-5">
                <div class="col-12 mb-3">
                    <label class="text-label">Nome</label>	
                    <input type="text" name="categoria" value="" class="form-campo" placeholder="Digite o nome da categoria">
                </div>
                <div class="col-12 mb-3">
                        <label class="text-label">Ativo</label>	
                        <select name="ativo_categoria" class="form-campo">
                            <option value="S">Sim</option>                                                 
                            <option value="N">Não</option>                                                 
                        </select>
                     
                </div>                                    
                <div class="col-12 mt-3 mb-5">
                    <input type="hidden" name="id_categoria" value="">
                    <input type="submit" name="" value="Inserir categoria" class="btn btn-laranja d-block m-auto">
                </div>
            </div>
        </form>
</div>