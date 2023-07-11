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
                            <th>Endereço</th>
                            <th>CNPJ</th>
                            <th>Contato</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include_once('../../php/credenciais.php');
                        $sql    =   "SELECT * FROM fornecedor";
                        $query  =   mysqli_query($conexao,$sql);
                        while ($fornecedor = mysqli_fetch_array($query)) {
                        ?>
                        <tr>
                            <td><?php echo $fornecedor["id_fornecedor"] ?></td>
                            <td><?php echo $fornecedor["nome"] ?></td>
                            <td><?php echo $fornecedor["endereco"] ?></td>
                            <td><?php echo $fornecedor["cnpj"] ?></td>
                            <td><?php echo $fornecedor["contato"] ?></td>  
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
                include('../cad/cad_fornecedor.html'); 
                ?>
            </div>
        </div>
    </section>
</body>

</html>