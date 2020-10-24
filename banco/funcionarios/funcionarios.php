<?php


include "./banco/conexao.php";

    $sql = 'SELECT * FROM tabela ';
        foreach ($dbh->query($sql) as $row) {
            echo "<tr>";
            echo "<td>".$row['Id']."</td>";
            echo "<td>".$row['Nome']."</td>";
            echo "<td>".$row['Matricula']."</td>";
            echo "<td>".$row['Telefone']."</td>";
            echo "<td>".$row['Setor']."</td>";
            echo "<td>".$row['Cpf']."</td>";
            echo "<td><a href=editar.php?id=".$row['id'].">Editar</a></td>";
            echo "</tr>";
        }
?>
