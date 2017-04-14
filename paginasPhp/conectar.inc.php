<?php
	// Se conectando ao servidor
	$conexao = mysqli_connect("localhost","root","");
	
	// Se conectando BD criado
	$bd = mysqli_select_db($conexao,"meusite");
	
	// Executando query e retornando valores da tabela "cliente"
	$query = mysqli_query($conexao,"select from * cliente");
	
	//Listando valores retornados da tabela "cliente"
    while($tabela = mysqli_fetch_array($query)){
        
        echo $tabela['nome']. "<br>";
        echo $tabela['email']. "<br>" ;
        echo $tabela['telefone']. "<br>";
        echo $tabela['assunto']. "<br>";
        echo $tabela['mensagem'];
	}
	
?>