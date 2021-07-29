<!DOCTYPE html>
<html>
    <head>
        <title>Cadastro de Produtos</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> <!-- Ícones-->
        <link rel="stylesheet" href="css/produtos.css"> 
    </head>
    <body>
        <div class="produtos">
            <div class="form1">
                <form class="cadastro_produtos">
                    <p>Produtos Cadastrados</p>
                    <div class="pesquisa">
                        <label for="p_prod_nome"> Produto:</label>
                        <input type="text" id="p_prod_nome" name="p_prod_name" class="pesquisa_produto">
                        <br>
                        <label for="p_prod_codigo"> Código:&nbsp;&nbsp;</label>
                        <input type="text" id="p_prod_codigo" name="p_prod_cod" class="pesquisa_codigo">
                        <br>                       
                        <label for="p_prod_estoque"> Estoque:</label>
                        <form class = "estoque_form">
                            <select id="opcao_estoque" name="op_estoque">
                                <option value="igual">=</option>
                                <option value="maior">>=</option>
                                <option value="menor"><=</option>
                            </select>
                        </form>
                        <input type="text" id="p_prod_estoque" name="p_prod_qtde" class="pesquisa_estoque">
                        
                        <br>
                        <input type="submit" value="Limpar Filtros" id="limpar_filtros">
                        <input type="submit" value="Pesquisar" id="pesquisa_pesquisar">
                        <input type="submit" value="Novo" id="novo_produto">
                    </div>
                    
                </form>
            </div>
            <div class="form2">
                <p>NOME | PREÇO | ESTOQUE |<span style="color: rgb(27, 104, 204);">Editar</span> | <span style="color: brown;">Excluir</span></p>
                <form class="Exibir itens" style="border: 1px solid black;">
                    <p>Aqui serão mostrados os produtos</p>
                </form>
                <form class="registro_pagina">
                    <label for="p_prod_nome"> Mostrar</label>
                    <input type="text" id="n_registros_pagina" name="n_registro_page" value="10">
                    <label for="p_prod_nome"> registros por página</label>
                    <input type="submit" value="Confirmar" id="confirmar_registros_pagina">
                    <input type="submit" value="<" id="Anterior">
                    <input type="submit" value=">" id="Próximo">
                </form>
            </div>
            <div class="form3">
                <p> Edição de produtos</p>
                <form class="edit_produto">
                    <label for="e_prod_nome">Nome do Produto</label>
                    <label for="e_prod_codigo"> Código de Barras</label>
                    <br>
                    <input type="text" id="e_prod_id" name="e_prod_id">
                    <input type="text" id="e_prod_nome" name="e_prod_name">
                    <input type="text" id="e_prod_codigo" name="e_prod_cod">
                    <br>
                    <label for="e_prod_preco_custo">Preço de Custo</label>
                    <label for="e_prod_preco_promocional">Preço Promocional</label>
                    <label for="e_prod_preco_venda">Preço Venda</label>
                    <br>
                    <input type="text" id="e_prod_preco_custo" name="e_prod_p_c">
                    <input type="text" id="e_prod_preco_promocional" name="e_prod_p_p">
                    <input type="text" id="e_prod_preco_venda" name="e_prod_p_v">
                    <br>
                    <label for="e_prod_unidade">Unidade</label>
                    <label for="e_prod_estoque">Estoque</label>
                    <label for="e_prod_estoque_minimo">Estoque Mínimo</label>
                    <br>
                    <input type="text" id="e_prod_unidade" name="e_prod_un">
                    <input type="text" id="e_prod_estoque" name="e_prod_estq">
                    <input type="text" id="e_prod_estoque_minimo" name="e_prod_estq_min">
                    <br>
                    <input type="submit" value="Cancelar" id="cancelar_cadastro">
                    <input type="submit" value="Salvar" id="salvar_cadastro">
                    
                    <br>
                </form>
            </div>
            
        </div>
    </body>
</html>