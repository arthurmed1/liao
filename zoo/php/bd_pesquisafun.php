<?php
require_once "i_topofun.php";
?>
<section class="page-section about-heading">
    <div class="container">
          <div class="col-xl-9 col-lg-10 mx-auto">
            <div class="bg-faded rounded p-5">
              <h2 class="section-heading mb-4">
				<?php

				  include 'buscar.php';
				  
				  include 'conecta.php';

				  $query = "select * from animal where ".$criterio." like '%".$chave."%'";
				 		  
				  $result = mysqli_query($db,$query);
				  
				  $num_results = mysqli_num_rows($result);
				  echo '<p>Número de animais encontrados: '.$num_results.'</p>';
				  for ($i=0; $i <$num_results; $i++)
					  {
						 $row = mysqli_fetch_array($result);
						 echo '<br />Nome: ';
						 echo stripslashes($row[0]);
						 echo '<br />Idade: ';
						 echo stripslashes($row[1]); echo " anos";
						 echo '<br />Espécie: ';
						 echo stripslashes($row[2]);
						  echo '<br />Nome Científico: ';
						 echo stripslashes($row[3]);
						 echo "<br/>";
					  }
					  mysqli_close($db);
					?>

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
  
