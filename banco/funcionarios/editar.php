
<?php

 include "./banco/conexao.php"
  $id = $_GET['id'];
  $sql = "SELECT * FROM tabela where id='$id' ";
   foreach ($dbh->query($sql) as $row) {
        echo "
            <form action=atualizar.php >  

            <input type=hidden name=id value=$id> 

            <p>Nome</p>
            <input type=text name=nome value=".$row['nome'].">
                             
            <p>Data De Nascimento</p>
            <input type=date name=idade value=".$row['idade'].">
                                                
            <p>Salario</p>
            <input type=number name=salario value=".$row['salario'].">
            <br><br>
                                                
            <input type=submit value=Salvar>
            </form>";
            echo "<a href=index.php>Voltar</a></p>";
    }
 ?>