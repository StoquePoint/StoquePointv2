<?php
include('../menu.html');
?>
    <div class="content">
        <div class="box-info">
            <div class="info-text">
                <h3>Produtos Cadastrados</h3>
                <span>30</span>
            </div>
            <div class="info-text">
                <h3>Produtos com Estoque Zerado</h3>
                <span>30</span>
            </div>
            <div class="info-text">
                <h3>Produtos com Estoque Mínimo</h3>
                <span>30</span>
            </div>
        </div>

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
                        <td>
                                <a href="#" class="btn-editar"><i class="fa-solid fa-file-pen"></i></a>
                                <a href="#" class="btn-delete"><i class="fa-solid fa-trash-can"></i></a>
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
                        <td>
                                <a href="#" class="btn-editar"><i class="fa-solid fa-file-pen"></i></a>
                                <a href="#" class="btn-delete"><i class="fa-solid fa-trash-can"></i></a>
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
                                <a href="#" class="btn-editar"><i class="fa-solid fa-file-pen"></i></a>
                                <a href="#" class="btn-delete"><i class="fa-solid fa-trash-can"></i></a>
                            </td>
                    </tr>
                </tbody>
                <tfoot>

                </tfoot>
            </table>
        </div>
    </div>
</section>
</body>

</html>