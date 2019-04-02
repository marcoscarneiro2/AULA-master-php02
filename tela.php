<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div class="container">
		<h1>Consultar Cliente</h1>
		<form>
			<label>Nome:</label>
			<input type="text" name="nome">
			<br><br>
			<input type="submit" value="Buscar">
			<a href="index.php">Sair</a>
		</form><hr>    
		
		<?php
        if(isset($_GET["nome"]))
        {
        
            $nome = $_GET["nome"];

            include_once 'conexao.php';

            $sql = "SELECT * FROM clientes WHERE nome like '%$nome%' order by nome";

            $result = mysqli_query($con,$sql);
            $totalRegistros = mysqli_num_rows($result);
            
            if($totalRegistros > 0)
            {   
                echo "<table class= 'table'
                        <tr>
                            <th>Nome</th> 
                            <th>E-email</th> 
                            <th>Estado Civil</th> 
                            <th>Sexo</th> 
                        </tr>";
                
                       while($row = mysqli_fetch_array($result)){
                           echo "<tr>";
                        echo "<td>$row[1]</td>";
                        echo "<td>{$row['email']}</td>";
                        echo "<td>".$row["estadocivil"]."</td>";
                        echo "<td>".$row["sexo"]."</td>";
                        echo "</tr>";
                       }
                        echo "</table>";
                        echo "Total de Registro encontrado:".$totalRegistros;

            }else{
                echo "Não há ninguem com esse nome";
            }
        }    
        ?>
	</div>
</body>
</html>