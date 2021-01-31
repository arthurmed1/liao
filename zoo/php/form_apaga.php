<?php
require_once "i_topofun.php";
?>
	<section class="page-section about-heading">
    <div class="container">
          <div class="col-xl-9 col-lg-10 mx-auto">
            <div class="bg-faded rounded p-5">
              <h2 class="section-heading mb-4">
				<form action="bd_apaga.php" method="post">
				<h1>Exclusão de Animais</h1> 
          		<br>
				<h5> Selecione um criterio para excluir:
				<select name="criterio">
				  <option value="nome">Nome</option>
				  <option value="idade">Idade</option>
				  <option value="especie">Espécie</option>
				  <option value="nomec">Nome científico</option>
				</select>
				<br>
				Digite o valor que quer excluir:
				<input name="chave" type="text" >
				<br>
				<br>
				<input type="submit" value="Excluir">
			</h5>
			</form>
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
