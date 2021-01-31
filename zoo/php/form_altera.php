<?php
require_once "i_topofun.php";
?>
	<section class="page-section about-heading">
    <div class="container">
          <div class="col-xl-9 col-lg-10 mx-auto">
            <div class="bg-faded rounded p-5">
              <h2 class="section-heading mb-4">

			<form action="bd_altera.php" method="post">
			<h1>Alteração de Dados</h1> 
          		<br>
			<h5>Selecione um criterio:
				<select name="criterio">
				  <option value="nome">Nome</option>
				  <option value="idade">Idade</option>
				  <option value="especie">Espécie</option>
				  <option value="nomec">Nome científico</option>
				</select>
				<br />
			 Digite o valor de busca:
				<input name="chave" type="text"  >
				<br />
				<br>
				<input type="submit" value="Editar">
			</form></h5>
		</div>
				</h2>
			</div>
		</div>
	</div>
</section>
</body>
<?php
require_once "i_rodape.php";
?>
</html>
