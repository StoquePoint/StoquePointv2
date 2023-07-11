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
                            <th>Código</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include_once('../../php/credenciais.php');
                        $sql    =   "SELECT * FROM categoria";
                        $query  =   mysqli_query($conexao,$sql);
                        while ($categoria = mysqli_fetch_array($query)) {
                        ?>
                        <tr>
                            <td><?php echo $categoria["id_categoria"] ?></td>
                            <td><?php echo $categoria["nome"] ?></td>
                            <td><?php echo $categoria["cod_categoria"] ?></td>
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
        </div>
    </section>
</body>

</html>