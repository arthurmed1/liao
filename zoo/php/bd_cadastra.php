﻿<?php
require_once "i_topofun.php";
?>	
		</DIV>

		<section class="page-section about-heading">
    <div class="container">
          <div class="col-xl-9 col-lg-10 mx-auto">
            <div class="bg-faded rounded p-5">
              <h2 class="section-heading mb-4">
				<DIV id="cadastro">
					<?php 
					  $nome=$_POST['nome'];
					  $nomec=$_POST['nomec'];
					  $idade=$_POST['idade'];
					  $especie=$_POST['especie'];
					   if ( !$nome || !$idade  || !$especie || !$nomec)
					  {
						 die( 'voce nao preencheu todos os dados<br />');
					  }
					  
					  include 'conecta.php';

					  $query = "insert into animal values ('$nome', '$idade','$especie','$nomec')";
					  $result = mysqli_query($db,$query);
					  if ($result)
						   echo  mysqli_affected_rows($db).' Animal cadastrado com sucesso! </br>'; 
					  else
						  echo mysqli_error($db).'<br>';
					  mysqli_close($db);
					?>	
					<br>
					 <a href= "cadastra.php"><h3>Cadastrar outro animal</a> </LI>
				</DIV>
			</h2>
			</div>
		</div>
	</div>
</section>
  </div>
 
  </body>
  <?php
require_once "i_rodape.php";
?>
  </html> 