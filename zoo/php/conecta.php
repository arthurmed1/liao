<?php 

	//@ $db = mysqli_connect('localhost','root','ifsp','bd_spfc'); ESSE É NA ESCOLA
		
	@ $db = mysqli_connect('localhost','root','', 'bd_aluno');
		  if (!$db)
		  {
			 echo 'Nao deu para conectar ao Banco de Dados';
			 exit;
		  }
		  mysqli_select_db($db,'bd_aluno');
?>