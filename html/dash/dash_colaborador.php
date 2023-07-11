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
                            <th>contato</th>
                            <th>usuario</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include_once('../../php/credenciais.php');
                        $sql    =   "SELECT * FROM colaborador";
                        $query  =   mysqli_query($conexao,$sql);
                        while ($colaborador = mysqli_fetch_array($query)) {
                        ?>
                        <tr>
                            <td><?php echo $colaborador["id_colaborador"] ?></td>
                            <td><?php echo $colaborador["nome"] ?></td>
                            <td><?php echo $colaborador["contato"] ?></td>
                            <td><?php echo $colaborador["usuario"] ?></td> 
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