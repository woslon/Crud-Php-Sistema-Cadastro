
<?php 
        include("conexao.php");
        
        $sql="SELECT * FROM cadastro";
        $resultado = mysqli_query($conexao, $sql);

        if( mysqli_num_rows($resultado)>0){
            echo'<h2>'."clientes cadastrados".'</h2>'.'<hr>';
                while($rows = mysqli_fetch_assoc($resultado)){
                    
                    echo "nome : ". $rows['nome']."<br>";
                    echo "cpf : ". $rows['cpf']."<br>";
                    echo "endereço : ". $rows['endereço']."<br>";
                    echo "cidad : ". $rows['cidade']."<br>";
                    echo "estado : ". $rows['estado']."<br>";
                    echo "cel : ". $rows['cel']."<br>";
                    echo "email : ". $rows['email']. "<hr>";
                }
            }
        mysqli_close($conexao);
    ?>