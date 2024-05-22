<html>

    <head>
          <title>  Programação   </title> 
          
           <link rel="stylesheet" href="styles.css" type="text/css">
           
           <meta charset="utf-8">
           

        
    </head>

            
     <body>
	 	<h1> TESTE PHP <h1>
                <?php
					
					
					echo ("Arquivo menu PHP-1 TESTE!" . "<BR>");
					$a=8;
					$b=5;
					$c= $b + $a;
					echo("Resultado da soma de ".$a."+".$b." é igual ".$c)."<br>";  

					$sql = "CREATE TABLE teste(nome VARCHAR(50), email VARCHAR(50))";
					$conexao->query($sql);					

					$sql = "INSERT INTO teste(nome, email) VALUES ('Teste_II', 'teste_II.teste@gmail.com')";
					$conexao->query($sql);
					 
					$sql = "SELECT nome, email FROM teste";
					$resultado = $conexao->query($sql);
					 
					if ($resultado->num_rows > 0) {
    					while ($linha = $resultado->fetch_assoc()) {
        					echo "Nome: ".$linha["nome"]. " Email: " .$linha["email"]. "<br>";
    					}
					} else {
    						echo "Não contém registros na tabela";
						}
				?>
  				     
     </body>
</html>
