<div class="col-9 central mb-3">
<span class="p-2 bg-title text-light text-uppercase h5 mb-0 text-branco"><i class="fas fa-plus-circle"></i> Cadastrar produto</span>
       
<div class="rows p-4"> 
                        <div class="col-4">
                                <div class="py-1 px-2 mt-3 border text-center">
                                        <img src="upload/semproduto.png" class="img-fluido opaco">
                                </div>
                        </div>
                        <div class="col-8 px-2">
                           <div class="rows">
                                <div class="col-12 mb-3">
                                        <label class="text-label">Titulo do produto</label>
                                        <input type="text" value="" name="produto" placeholder="Digite aqui..." class="form-campo">
                                </div>
                                <div class="col-4 mb-3">
                                        <label class="text-label">Categoria</label>
                                        <select class="form-campo" name="id_categoria">
                                            <option>opção</option> 
                                            <option>opção</option> 
                                            <option>opção</option> 
                                            
                                        </select>
                                </div>
                                <div class="col-4 mb-3">
                                        <label class="text-label">Código Personalizado</label>
                                        <input type="text" name="codigo_personalizado" value="" placeholder="Digite aqui..." class="form-campo">
                                </div>
                                <div class="col-4 mb-3">
                                        <label class="text-label">Unidade</label>
                                        <select class="form-campo" name="id_unidade">
                                            <option>opção</option> 
                                            <option>opção</option> 
                                            <option>opção</option>
									   </select>
                                </div>
                               
                                <div class="col-6 mb-3">
                                        <label class="text-label">Upload da imagem</label>
                                        <input type="file" name="arquivo" class="form-campo">
                                </div>
                                <div class="col-6 mb-3">
                                        <label class="text-label">Nome do arquivo</label>
                                        <input type="text" value="" name="nome_do_arquivo" placeholder="Digite aqui..." class="form-campo">
                                </div>
                                <div class="col-4 mb-3">
                                        <label class="text-label">Preço Alto</label>
                                        <input type="text" name="preco_alto" value="" placeholder="Digite aqui..." class="form-campo">
                                </div>
                                <div class="col-4 mb-3">
                                        <label class="text-label">Preço atual</label>
                                        <input type="text" name="preco" value="" placeholder="Digite aqui..." class="form-campo">
                                </div>												

                                <div class="col-4 mb-3">
                                        <label class="text-label">Ativo</label>
                                        <select class="form-campo" name="ativo">
                                                <option value="S">Sim</option>                                                 
                                                <option value="N">Não</option> 
                                        </select>
                                </div>
                               <div class="col-12 mt-2">
                                    <input type="hidden" name="id_produto" value="">
                                    <input type="submit" value="Salvar alterações" class="btn btn-laranja btn-medio d-block m-auto">
                            </div>	
                        </div>
			
                           
                        </div>
</div>
</div>