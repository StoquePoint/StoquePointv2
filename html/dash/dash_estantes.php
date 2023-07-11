<?php
include('../menu.html');
?>
        <div class="content">
            <div id="content2">
                <table id="produtos">
                    <thead>
                        <tr>
                            <th>Nº</th>
                            <th>estante</th>
                            <th>prateleira</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include_once('../../php/credenciais.php');
                        $sql    =   "SELECT * FROM estantes";
                        $query  =   mysqli_query($conexao,$sql);
                        while ($estantes = mysqli_fetch_array($query)) {
                        ?>
                        <tr>
                            <td><?php echo $estantes["id_estante"] ?></td>
                            <td><?php echo $estantes["estante"] ?></td>
                            <td><?php echo $estantes["prateleira"] ?></td>
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