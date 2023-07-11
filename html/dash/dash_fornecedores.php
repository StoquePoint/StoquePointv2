<?php
include('../menu.html');
?>
        <div class="content">
            <div id="content2">
                <table id="produtos">
                    <thead>
                        <tr>
                            <th>Nº</th>
                            <th>Nome</th>
                            <th>Descrição</th>
                            <th>Categoria</th>
                            <th>Apresentação</th>
                            <th>Quantidade</th>
                            <th>Preço</th>
                            <th>Fornecedor</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Computador Desktop</td>
                            <td>Processador i5, 16gb de memoria RAM</td>
                            <td>Informática</td>
                            <td>Unidade</td>
                            <td>20</td>
                            <td>R$ 3.000,00</td>
                            <td>Neto Tecnologia</td>
                            <td class="btn-acao">
                                <a href="#" class="btn-editar">Editar</a>
                                <a href="#" class="btn-delete">Excluir</a>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Notebook Positivo</td>
                            <td>celeron, 4gb de memoria RAM, 80gb HD</td>
                            <td>Informática</td>
                            <td>Unidade</td>
                            <td>3</td>
                            <td>R$ 1.300,00</td>
                            <td>Starbyte</td>
                            <td class="btn-acao">
                                <a href="#" class="btn-editar">Editar</a>
                                <a href="#" class="btn-delete">Excluir</a>
                            </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Mouse Gamer Logitech</td>
                            <td>Mouse ergonomico, optico, dpi 3000, bluetooth</td>
                            <td>Informática</td>
                            <td>Unidade</td>
                            <td>5</td>
                            <td>R$ 130,00</td>
                            <td>System Informática</td>
                            <td>
                                <a href="#" class="btn-editar">Editar</a>
                                <a href="#" class="btn-delete">Excluir</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div id="content3">
                <?php 
                include('../cad/cad_fornecedor.html'); 
                ?>
            </div>
        </div>
    </section>
</body>

</html>