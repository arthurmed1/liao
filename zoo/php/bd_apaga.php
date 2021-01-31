<?php
require_once "i_topofun.php";
?>
<section class="page-section about-heading">
    <div class="container">
          <div class="col-xl-9 col-lg-10 mx-auto">
            <div class="bg-faded rounded p-5">
              <h2 class="section-heading mb-4">
		<?php
		  $chave=$_POST['chave'];
		  $criterio=$_POST['criterio'];

		  
		
		  
		  include 'conecta.php';

		  $query = "DELETE From animal where $criterio = '$chave'";
		  $result = mysqli_query($db,$query);
		  echo mysqli_affected_rows($db).' Animal(is) excluído(s) com sucesso';
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