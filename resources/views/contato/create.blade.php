<div class="col-9 central mb-3">
    <span class="p-2 bg-title text-light text-uppercase h5 mb-0 text-branco"><i class="fas fa-plus-circle"></i> Cadastrar contato</span>
    
    <form action="" method="Post">
       <div id="tab">
          <ul>
            <li><a href="#tab-1">Dados gerais</a></li>
            <li><a href="#tab-2">Endereço</a></li>
            <li><a href="#tab-3">Informações adicionais</a></li>
          </ul>
          <div id="tab-1">
            <div class="p-2">
                    <span class="d-block mt-4 mb-4 h4 border-bottom text-uppercase">Informações básicas</span>
                    <div class="rows">
                        <div class="col-12 mb-4">
                            <span class="h5 d-block text-upp">Marque os tipos desejados:</span>
                            <div class="rows itens-check px-3">
                            <div><input type="checkbox" name="eh_cliente" class="form-control tipo" id="contato" value="S"> <label class="p-2 mr-1" for="contato"><i class="fas fa-user"></i> Contato</label>
                             </div>
                             <div><input type="checkbox" name="eh_fornecedor" class="form-control tipo" id="fornecedor" value="S"> <label class="p-2 mr-1" for="fornecedor"><i class="fas fa-cart-arrow-down"></i> Fornecedor</label>
                             </div>
    
                             <div><input type="checkbox" name="eh_transportador" class="form-control tipo" id="transportador" value="S"> <label class="p-2" for="transportador"><i class="fas fa-truck"></i> Transportador</label>
                             </div>
                             </div>
                        </div>
    
                    <div class="col-6 mb-3">
                            <label class="text-label">Nome</label>
                            <input type="text" name="nome" value="" placeholder="Digite aqui..." class="form-campo">
                    </div>
                    <div class="col-6 mb-3">
                            <label class="text-label">Nome Fantasia</label>
                            <input type="text" name="nome_fantasia" value="" class="form-campo">
                    </div>
    
                    <div class="col-4 mb-3">
                            <label class="text-label">CPF</label>
                            <input type="text" name="cpf" value="" placeholder="Digite aqui..." class="form-campo">
                    </div>
    
    
                    <div class="col-4 mb-3">
                            <label class="text-label">CNPJ</label>
                            <input type="text" name="cnpj" value="" placeholder="Digite aqui..." class="form-campo">
                    </div>
    
                    <div class="col-4 mb-3">
                            <label class="text-label">Data Cadastro</label>
                            <input type="date" name="data_cadastro" value="" placeholder="Digite aqui..." class="form-campo">
                    </div>
    
                    <div class="col-8 mb-3">
                            <label class="text-label">E-mail</label>
                            <input type="text" name="email" value="" placeholder="Digite aqui..." class="form-campo">
                    </div>
                    <div class="col-4 mb-3">
                            <label class="text-label">Senha</label>
                            <input type="password" name="senha" value="" placeholder="Digite aqui..." class="form-campo">
                    </div>
    
                    <div class="col-1 mb-3">
                            <label class="text-label">DDD:</label>
                            <input type="text" name="ddd" value="" placeholder="Digite aqui..." class="form-campo">
                    </div>
                    <div class="col-3 mb-3">
                            <label class="text-label">Fone:</label>
                            <input type="text" name="fone" value="" placeholder="Digite aqui..." class="form-campo">
                    </div>
                    <div class="col-3 mb-3">
                            <label class="text-label">Celular:</label>
                            <input type="text" name="celular" value="" placeholder="Digite aqui..." class="form-campo">
                    </div>
                    <div class="col-2">
                        <label class="text-label">Ativo</label>
                        <select class="form-campo" name="ativo">
                                <option value="S">Sim</option>
                                <option value="N">Não</option>
                        </select>
                    </div>
    
    
                </div>
            </div>
          </div>
    
          <div id="tab-2">
            <div class="p-2">
            <span class="d-block mt-4 h4 border-bottom text-uppercase">Endereço</span>
            <div class="rows">
                <div class="col-6 mb-3">
                        <label class="text-label">Logradouro</label>
                        <input type="text" name="logradouro" id="logradouro" value="" placeholder="Digite aqui..." class="form-campo">
                </div>
                <div class="col-3 mb-4">
                        <label class="text-label">Numero</label>
                        <input type="text" name="numero" id="numero" value="" placeholder="Digite aqui..." class="form-campo">
                </div>
                <div class="col-3 mb-3">
                        <label class="text-label">Complemento</label>
                        <input type="text" name="complemento" id="complemento" value="" placeholder="Digite aqui..." class="form-campo">
                </div>
                <div class="col-6 mb-3">
                        <label class="text-label">Bairro</label>
                        <input type="text" name="bairro" id="bairro" value="" placeholder="Digite aqui..." class="form-campo">
                </div>
                <div class="col-3 mb-3">
                    <label class="text-label">CEP</label>
                     <div class="input-grupo">
                     <input type="text" value="" name="cep" id="cep" placeholder="Digite aqui..." class="form-campo">
    
                     </div>
                </div>
                <div class="col-3 mb-2">
                        <label class="text-label">UF</label>
                        <select class="form-campo" name="id_estado" id="id_estado" onchange="selecionar_estado()">
                <option value="" selected="">Selecione</option>
                            <option value="1">Acre</option><option value="2">Alagoas</option><option value="3">Amapá</option><option value="4">Amazonas</option><option value="5">Bahia</option><option value="6">Ceará</option><option value="7">Distrito Federal</option><option value="8">Espírito Santo</option><option value="9">Goiás</option><option value="10" selected="">Maranhão</option><option value="11">Mato Grosso do Sul</option><option value="12">Mato Grosso</option><option value="13">Minas Gerais</option><option value="14">Paraná</option><option value="15">Paraíba</option><option value="16">Pará</option><option value="17">Pernambuco</option><option value="18">Piauí</option><option value="19">Rio de Janeiro</option><option value="20">Rio Grande do Norte</option><option value="21">Rio Grande do Sul</option><option value="22">Rondônia</option><option value="23">Roraima</option><option value="24">Santa Catarina</option><option value="25">Sergipe</option><option value="26">São Paulo</option><option value="27">Tocantins</option>
                        </select>
                </div>
                <div class="col-4 mb-2">
                        <label class="text-label">Cidade</label>
                        <select class="form-campo" name="id_cidade" id="id_cidade">
                            <option value="451">Açailândia</option><option value="452">Afonso Cunha</option><option value="453">Água Doce do Maranhão</option><option value="454">Alcântara</option><option value="455">Aldeias Altas</option><option value="456">Altamira do Maranhão</option><option value="457">Alto Alegre do Maranhão</option><option value="458">Alto Alegre do Pindaré</option><option value="459">Alto Parnaíba</option><option value="460">Amapá do Maranhão</option><option value="461">Amarante do Maranhão</option><option value="462">Anajatuba</option><option value="463">Anapurus</option><option value="464">Apicum-Açu</option><option value="465">Araguanã</option><option value="466">Araioses</option><option value="467">Arame</option><option value="468">Arari</option><option value="469">Axixá</option><option value="470">Bacabal</option><option value="471">Bacabeira</option><option value="472">Bacuri</option><option value="473">Bacurituba</option><option value="474">Balsas</option><option value="475">Barão de Grajaú</option><option value="476">Barra do Corda</option><option value="477">Barreirinhas</option><option value="478">Belágua</option><option value="479">Bela Vista do Maranhão</option><option value="480">Benedito Leite</option><option value="481">Bequimão</option><option value="482">Bernardo do Mearim</option><option value="483">Boa Vista do Gurupi</option><option value="484">Bom Jardim</option><option value="485">Bom Jesus das Selvas</option><option value="486">Bom Lugar</option><option value="487">Brejo</option><option value="488">Brejo de Areia</option><option value="489">Buriti</option><option value="490">Buriti Bravo</option><option value="491">Buriticupu</option><option value="492">Buritirana</option><option value="493">Cachoeira Grande</option><option value="494">Cajapió</option><option value="495">Cajari</option><option value="496">Campestre do Maranhão</option><option value="497">Cândido Mendes</option><option value="498">Cantanhede</option><option value="499">Capinzal do Norte</option><option value="500">Carolina</option><option value="501">Carutapera</option><option value="502">Caxias</option><option value="503">Cedral</option><option value="504">Central do Maranhão</option><option value="505">Centro do Guilherme</option><option value="506">Centro Novo do Maranhão</option><option value="507">Chapadinha</option><option value="508">Cidelândia</option><option value="509">Codó</option><option value="510">Coelho Neto</option><option value="511">Colinas</option><option value="512">Conceição do Lago-Açu</option><option value="513">Coroatá</option><option value="514">Cururupu</option><option value="515">Davinópolis</option><option value="516">Dom Pedro</option><option value="517">Duque Bacelar</option><option value="518">Esperantinópolis</option><option value="519">Estreito</option><option value="520">Feira Nova do Maranhão</option><option value="521">Fernando Falcão</option><option value="522">Formosa da Serra Negra</option><option value="523">Fortaleza dos Nogueiras</option><option value="524">Fortuna</option><option value="525">Godofredo Viana</option><option value="526">Gonçalves Dias</option><option value="527">Governador Archer</option><option value="528">Governador Edison Lobão</option><option value="529">Governador Eugênio Barros</option><option value="530">Governador Luiz Rocha</option><option value="531">Governador Newton Bello</option><option value="532">Governador Nunes Freire</option><option value="533">Graça Aranha</option><option value="534">Grajaú</option><option value="535">Guimarães</option><option value="536">Humberto de Campos</option><option value="537">Icatu</option><option value="538">Igarapé do Meio</option><option value="539">Igarapé Grande</option><option value="540">Imperatriz</option><option value="541">Itaipava do Grajaú</option><option value="542">Itapecuru Mirim</option><option value="543">Itinga do Maranhão</option><option value="544">Jatobá</option><option value="545">Jenipapo dos Vieiras</option><option value="546">João Lisboa</option><option value="547">Joselândia</option><option value="548">Junco do Maranhão</option><option value="549">Lago da Pedra</option><option value="550">Lago do Junco</option><option value="551">Lago Verde</option><option value="552">Lagoa do Mato</option><option value="553">Lago dos Rodrigues</option><option value="554">Lagoa Grande do Maranhão</option><option value="555">Lajeado Novo</option><option value="556">Lima Campos</option><option value="557">Loreto</option><option value="558">Luís Domingues</option><option value="559">Magalhães de Almeida</option><option value="560">Maracaçumé</option><option value="561">Marajá do Sena</option><option value="562">Maranhãozinho</option><option value="563">Mata Roma</option><option value="564">Matinha</option><option value="565">Matões</option><option value="566">Matões do Norte</option><option value="567">Milagres do Maranhão</option><option value="568">Mirador</option><option value="569">Miranda do Norte</option><option value="570">Mirinzal</option><option value="571">Monção</option><option value="572">Montes Altos</option><option value="573">Morros</option><option value="574">Nina Rodrigues</option><option value="575">Nova Colinas</option><option value="576">Nova Iorque</option><option value="577">Nova Olinda do Maranhão</option><option value="578">Olho d'Água das Cunhãs</option><option value="579">Olinda Nova do Maranhão</option><option value="580">Paço do Lumiar</option><option value="581">Palmeirândia</option><option value="582">Paraibano</option><option value="583">Parnarama</option><option value="584">Passagem Franca</option><option value="585">Pastos Bons</option><option value="586">Paulino Neves</option><option value="587">Paulo Ramos</option><option value="588">Pedreiras</option><option value="589">Pedro do Rosário</option><option value="590">Penalva</option><option value="591">Peri Mirim</option><option value="592">Peritoró</option><option value="593">Pindaré-Mirim</option><option value="594">Pinheiro</option><option value="595">Pio XII</option><option value="596">Pirapemas</option><option value="597">Poção de Pedras</option><option value="598">Porto Franco</option><option value="599">Porto Rico do Maranhão</option><option value="600">Presidente Dutra</option><option value="601">Presidente Juscelino</option><option value="602">Presidente Médici</option><option value="603">Presidente Sarney</option><option value="604">Presidente Vargas</option><option value="605">Primeira Cruz</option><option value="606">Raposa</option><option value="607">Riachão</option><option value="608">Ribamar Fiquene</option><option value="609">Rosário</option><option value="610">Sambaíba</option><option value="611">Santa Filomena do Maranhão</option><option value="612">Santa Helena</option><option value="613">Santa Inês</option><option value="614">Santa Luzia</option><option value="615">Santa Luzia do Paruá</option><option value="616">Santa Quitéria do Maranhão</option><option value="617">Santa Rita</option><option value="618">Santana do Maranhão</option><option value="619">Santo Amaro do Maranhão</option><option value="620">Santo Antônio dos Lopes</option><option value="621">São Benedito do Rio Preto</option><option value="622">São Bento</option><option value="623">São Bernardo</option><option value="624">São Domingos do Azeitão</option><option value="625">São Domingos do Maranhão</option><option value="626">São Félix de Balsas</option><option value="627">São Francisco do Brejão</option><option value="628">São Francisco do Maranhão</option><option value="629">São João Batista</option><option value="630">São João do Carú</option><option value="631">São João do Paraíso</option><option value="632">São João do Soter</option><option value="633">São João dos Patos</option><option value="634">São José de Ribamar</option><option value="635">São José dos Basílios</option><option value="636">São Luís</option><option value="637">São Luís Gonzaga do Maranhão</option><option value="638">São Mateus do Maranhão</option><option value="639">São Pedro da Água Branca</option><option value="640">São Pedro dos Crentes</option><option value="641">São Raimundo das Mangabeiras</option><option value="642">São Raimundo do Doca Bezerra</option><option value="643">São Roberto</option><option value="644">São Vicente Ferrer</option><option value="645">Satubinha</option><option value="646">Senador Alexandre Costa</option><option value="647">Senador La Rocque</option><option value="648">Serrano do Maranhão</option><option value="649">Sítio Novo</option><option value="650">Sucupira do Norte</option><option value="651">Sucupira do Riachão</option><option value="652">Tasso Fragoso</option><option value="653">Timbiras</option><option value="654">Timon</option><option value="655">Trizidela do Vale</option><option value="656">Tufilândia</option><option value="657">Tuntum</option><option value="658">Turiaçu</option><option value="659">Turilândia</option><option value="660">Tutóia</option><option value="661">Urbano Santos</option><option value="662">Vargem Grande</option><option value="663">Viana</option><option value="664">Vila Nova dos Martírios</option><option value="665">Vitória do Mearim</option><option value="666">Vitorino Freire</option><option value="667">Zé Doca</option>                    </select>
                </div>
                    </div>
            </div>
          </div>
    
            <div id="tab-3">
            <div class="p-2">
                <span class="d-block mt-4 h4 border-bottom text-uppercase">Informações Adicionais</span>
                <div class="rows">
                    <div class="col-4 mb-3">
                            <label class="text-label">Insc. Estadual</label>
                            <input type="text" name="ie" value="" placeholder="Digite aqui..." class="form-campo">
                    </div>
                    <div class="col-4 mb-3">
                            <label class="text-label">Insc. Municipal</label>
                            <input type="text" name="im" value="" placeholder="Digite aqui..." class="form-campo">
                    </div>
                    <div class="col-4 mb-3">
                            <label class="text-label">Suframa</label>
                            <input type="text" name="suframa" value="" placeholder="Digite aqui..." class="form-campo">
                    </div>
    
                    <div class="col-4 mb-3">
                             <label class="text-label">RG</label>
                             <input type="text" name="rg" value="" placeholder="Digite aqui..." class="form-campo">
                     </div>
                     <div class="col-4 mb-3">
                             <label class="text-label">Cód. Estrangeiro</label>
                             <input type="text" name="cod_estrangeiro" value="" placeholder="Digite aqui..." class="form-campo">
                     </div>
                     <div class="col-4 mb-3">
                             <label class="text-label">IE Subst. Trib.</label>
                             <input type="text" name="ie_subt_trib" value="" placeholder="Digite aqui..." class="form-campo">
                     </div>
    
                     </div>
             </div>
             </div>
     </div>
            <div class="col-12 text-center pb-4">
                <input type="submit" value="Salvar" class="btn btn-laranja m-auto">
            </div>
          </div>
        </div>
    </form>
    </div>
    