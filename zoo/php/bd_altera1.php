<?php
require_once "i_topofun.php";
?>
<section class="page-section about-heading">
    <div class="container">
          <div class="col-xl-9 col-lg-10 mx-auto">
            <div class="bg-faded rounded p-5">
              <h2 class="section-heading mb-4">
		<?php
		  $nome=$_POST['nome'];
		  $nomec=$_POST['nomec'];
		  $idade=$_POST['idade'];
		  $especie=$_POST['especie'];
		   if (!$nome && !$nomec && !$idade && !$especie)
		  {
			 echo 'Não ha alteracoes a serem feitas<br />';
			 exit;
		  }
		  
		  include 'conecta.php';
		  
		  $query = "update animal set nome='$nome', idade='$idade', especie='$especie', nomec='$nomec' where nome='$nome'";
		  $result = mysqli_query($db,$query);
		  if (mysqli_affected_rows($db)) echo "$nome, $idade atualizado no BD.</br>"; 
		  else echo mysqli_error($db).'<br>';
		  mysqli_close($db);
		?>
		</div>
			</h2>
			</div>
		</div>
	</div>
</section>
	</body>
</html>