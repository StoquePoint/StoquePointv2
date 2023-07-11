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
                            <th>Apresentação</th>
                            <th>Categoria</th>
                            <th>Fornecedor</th>
                            <th>Ações</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include_once('../../php/credenciais.php');
                        $sql    =   "SELECT * FROM produto";
                        $query  =   mysqli_query($conexao,$sql);
                        while ($produto = mysqli_fetch_array($query)) {
                        ?>
                        <tr>
                            <td><?php echo $produto["id_produto"] ?></td>
                            <td><?php echo $produto["nome"] ?></td>
                            <td><?php echo $produto["descricao"] ?></td>
                            <td><?php echo $produto["uni_medida"] ?></td>
                            <td><?php echo $produto["id_categoria"] ?></td>
                            <td><?php echo $produto["id_fornecedor"] ?></td>
                            <td>
                                <a href="#" class="btn-editar"><i class="fa-solid fa-file-pen"></i></a>
                                <a href="#" class="btn-delete"><i class="fa-solid fa-trash-can"></i></a>
                            </td>    
                        </tr>
                        <?php    
                        }
                        ?> 
                    </tbody>
                </table>
            </div>
            <div id="content3">
                <?php 
                include('../cad/cad_materiais.html'); 
                ?>
            </div>
        </div>
    </section>
</body>

</html>