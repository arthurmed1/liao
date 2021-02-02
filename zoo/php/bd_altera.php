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

		  $query = "select * from animal where $criterio = '$chave'";
		  $result = mysqli_query($db,$query);
		  $num_results = mysqli_num_rows($result);
	      $animal = mysqli_fetch_array($result);
		   echo "<form action='bd_altera1.php' method='post'>
			Nome:<input type='text' name='nome' value='$animal[0]' readonly /><br/>
			idade: <input type='text' name='idade' value='$animal[1]'/><br/>
			Espécie: <input type='text' name='especie' value='$animal[2]'/><br/>
			Nome Científico: <input type='text' name='nomec' value='$animal[3]'/><br/>
			<input type='submit' value='Alterar'/>
		 </form>"
		 


		  
		?>
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
  
