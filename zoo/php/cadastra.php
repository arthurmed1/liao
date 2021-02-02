<?php
require_once "i_topofun.php";
?>

<head>



</head>
<body>
  <div class="container" >
    <a class="links" id="paracadastro"></a>
    <a class="links" id="paralogin"></a>
     
    <div class="content">      
 
      <!--FORMULÁRIO DE CADASTRO-->

      <section class="page-section about-heading">
    <div class="container">
          <div class="col-xl-9 col-lg-10 mx-auto">
            <div class="bg-faded rounded p-5">
              <h2 class="section-heading mb-4">
             <div id="cadastro">
        <form method="post" action="bd_cadastra.php"> 
          <h1>Cadastro de Animais</h1> 
           <br>
          <h5>
            <label for="nome">Nome do Animal:</label>
            <input id="nome" name="nome" required="required" type="text" placeholder="Ex:Leão" />
          </h5>
          
           <h5> 
            <label for="nomec">Nome Científico:</label>
            <input id="nomec" name="nomec" required="required" type="text" placeholder="Ex:lião"/>
          </h5>

          <h5> 
            <label for="especie">Espécie:</label>
            <input id="especie" name="especie" required="required" type="text" placeholder="Ex:Aquático"/> 
          </h5>
           
          <h5> 
            <label for="idade">Idade do Animal:</label>
            <input id="idade" name="idade" required="required" type="text" placeholder="Ex:15"/>
          </h5>
           
          
          
          
          <h5> 
            <input type="submit" value="Cadastrar"/> 
          </h5>
           
         
          </p>
        </form>
      </div>
    </div>
        </div>
  </div>
  </section>
  

     <!-- <div id="cadastro">
        <form method="post" action="bd_cadastra.php"> 
          <h1>Cadastro</h1> 
           
          <p> 
            <label for="nome">Nome do Animal:</label>
            <input id="nome" name="nome" required="required" type="text" placeholder="Ex:Leão" />
          </p>
           
          <p> 
            <label for="especie">Espécie do Animal:</label>
            <input id="especie" name="especie" required="required" type="text" placeholder="Ex:Aquático"/> 
          </p>
           
          <p> 
            <label for="idade">Idade do Animal:</label>
            <input id="idade" name="idade" required="required" type="text" placeholder="Ex:15"/>
          </p>
           
          
          <p> 
            <label for="idade">Idade do Animal:</label>
            <input id="idade" name="idade" required="required" type="text" placeholder="Ex:15"/>
          </p>
        
          
          <p> 
            <input type="submit" value="Cadastrar"/> 
          </p>
            -->
         
          </p>
        </form>
      </div>
    </div>
  </div>  
</body>
<?php
require_once "i_rodape.php";
?>

</html>