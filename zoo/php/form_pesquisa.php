<?php
require_once "i_topo.php";
?>

	<section class="page-section about-heading">
    <div class="container">
          <div class="col-xl-9 col-lg-10 mx-auto">
            <div class="bg-faded rounded p-5">
              <h2 class="section-heading mb-4">
          	<form action="../PHP/bd_pesquisa.php" method="post">
          		<h1>Pesquisa de Animais</h1> 
          		<br>
				<h5>Selecione um criterio:
				<select name="criterio">
				  <option value="nome">Nome</option>
				  <option value="especie">Espécie</option>
				  <option value="idade">Idade</option>
				</select><br/>
			
				Digite o valor de busca:
				<input name="chave" type="text"><br/>
				<br>
				<input type="submit" value="Listar">
				</h5>
			</form>
		</div>
        </div>
	</div>
  </section>

</body>
<?php
require_once "i_rodape.php";
?>
</html>
