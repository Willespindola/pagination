<?php

$texto ='Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo, atque expedita quis autem provident quos officiis illo sit culpa incidunt magni unde ipsa repellat corrupti ipsam doloribus quo voluptas fugit!
Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo, atque expedita quis autem provident quos officiis illo sit culpa incidunt magni unde ipsa repellat corrupti ipsam doloribus quo voluptas fugit!
Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo, atque expedita quis autem provident quos officiis illo sit culpa incidunt magni unde ipsa repellat corrupti ipsam doloribus quo voluptas fugit!
Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo, atque expedita quis autem provident quos officiis illo sit culpa incidunt magni unde ipsa repellat corrupti ipsam doloribus quo voluptas fugit!
Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo, atque expedita quis autem provident quos officiis illo sit culpa incidunt magni unde ipsa repellat corrupti ipsam doloribus quo voluptas fugit!
Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo, atque expedita quis autem provident quos officiis illo sit culpa incidunt magni unde ipsa repellat corrupti ipsam doloribus quo voluptas fugit!
Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo, atque expedita quis autem provident quos officiis illo sit culpa incidunt magni unde ipsa repellat corrupti ipsam doloribus quo voluptas fugit!
Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo, atque expedita quis autem provident quos officiis illo sit culpa incidunt magni unde ipsa repellat corrupti ipsam doloribus quo voluptas fugit!
Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo, atque expedita quis autem provident quos officiis illo sit culpa incidunt magni unde ipsa repellat corrupti ipsam doloribus quo voluptas fugit!
Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo, atque expedita quis autem provident quos officiis illo sit culpa incidunt magni unde ipsa repellat corrupti ipsam doloribus quo voluptas fugit!
Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo, atque expedita quis autem provident quos officiis illo sit culpa incidunt magni unde ipsa repellat corrupti ipsam doloribus quo voluptas fugit!
Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo, atque expedita quis autem provident quos officiis illo sit culpa incidunt magni unde ipsa repellat corrupti ipsam doloribus quo voluptas fugit!
Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo, atque expedita quis autem provident quos officiis illo sit culpa incidunt magni unde ipsa repellat corrupti ipsam doloribus quo voluptas fugit!
Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo, atque expedita quis autem provident quos officiis illo sit culpa incidunt magni unde ipsa repellat corrupti ipsam doloribus quo voluptas fugit!
Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo, atque expedita quis autem provident quos officiis illo sit culpa incidunt magni unde ipsa repellat corrupti ipsam doloribus quo voluptas fugit!
Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo, atque expedita quis autem provident quos officiis illo sit culpa incidunt magni unde ipsa repellat corrupti ipsam doloribus quo voluptas fugit!
Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo, atque expedita quis autem provident quos officiis illo sit culpa incidunt magni unde ipsa repellat corrupti ipsam doloribus quo voluptas fugit!
Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo, atque expedita quis autem provident quos officiis illo sit culpa incidunt magni unde ipsa repellat corrupti ipsam doloribus quo voluptas fugit!
Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo, atque expedita quis autem provident quos officiis illo sit culpa incidunt magni unde ipsa repellat corrupti ipsam doloribus quo voluptas fugit!
Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo, atque expedita quis autem provident quos officiis illo sit culpa incidunt magni unde ipsa repellat corrupti ipsam doloribus quo voluptas fugit!
Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo, atque expedita quis autem provident quos officiis illo sit culpa incidunt magni unde ipsa repellat corrupti ipsam doloribus quo voluptas fugit!
Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo, atque expedita quis autem provident quos officiis illo sit culpa incidunt magni unde ipsa repellat corrupti ipsam doloribus quo voluptas fugit!
Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo, atque expedita quis autem provident quos officiis illo sit culpa incidunt magni unde ipsa repellat corrupti ipsam doloribus quo voluptas fugit!
Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo, atque expedita quis autem provident quos officiis illo sit culpa incidunt magni unde ipsa repellat corrupti ipsam doloribus quo voluptas fugit!';
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <?php include __DIR__ . '/includes/head.php'; ?>
  </head>
  <body>
    <main class="fadeIn">
      <!-- Header -->
      <?php include __DIR__ . '/includes/header.php';?>
      <!-- Galeria -->
      <section class="gallery">
          <figure><img src="fotoGrandeSYS" alt="tituloSYS" width="100%" height="auto"></figure>
      </section>    
        <div class="container mt-5">
          <div class="row">
            <!-- Conteúdo -->
              <div class="col-12 col-md-6 col-lg-8">
                <h1 class="blogTitle"></h1>
                <h3 class="blogSubtitle"></h3>
                <!-- <div class=""> -->
                  <?php
                  $textoString = implode($texto);       
                  $var = $textoString;
                  $caracter = '=P=';
                  $lim = 2000;
	                $tamanho = strlen($var);
	                if($tamanho > $lim){	
		                $quebra = $tamanho/$lim;
		                $ini = 0;
		                $fim = $lim;
	
		                for($i=0; $i <= intval($quebra); $i++){
			                if($i == intval($quebra)){
				                $nova.= substr($var, $ini, $lim);
                      }else{
				                $nova.= substr($var, $ini, $lim).$caracter;
			                  $ini = $fim;
			                  $fim = $fim+$lim;
                      }
		                }
		                $textoCompleto = explode("=P=", $nova , -1);
                    
	                } else {
		                $textoCompleto = $var;
                    
	                }
                  ?> 
                  <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
    	                <?php
    		              $controle_ativo = 2;		
    		              $controle_num_slide = 1;
    		              foreach ($textoCompleto as $key => $textoAtual) { 
    			              if($controle_ativo == 2){ ?>
    				              <li data-target="#carouselExampleControls" data-slide-to="0" class="active indicadores"></li><?php
    				              $controle_ativo = 1;
    			              }else{ ?>
    				              <li data-target="#carouselExampleControls" data-slide-to="<?php echo $controle_num_slide; ?>"></li><?php
    				              $controle_num_slide++;
    			              }
    		              }
    	                ?>						
                    </ol>
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox">
                      <?php
                      $controle_ativo = 2;
                      foreach ($textoCompleto as $key => $textoAtual) {
                          if($controle_ativo == 2){ ?>
                          <div class="carousel-item active" id="imagem_<?= $textoAtual ?>">
                          <p class="blogText"><?= $textoAtual; ?></p>
                          </div><?php
                          $controle_ativo = 1;
                      }else{ ?>
                          <div class="carousel-item" id="imagem_<?= $textoAtual ?>">
                          <p class="blogText"><?= $textoAtual; ?></p>
                          </div><?php
                          }
                          ?>
                      <?php
                      }
                      ?>
                    </div>
                  </div>  
                  <!-- Galeria -->
                    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X
                    +965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
                    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" 
                    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
                    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" 
                    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
                <!-- </div> -->

                <div class="blogPagination box-paginacao">
                  <a class="carousel-control-prev btn-paginacao" href="#carouselExampleControls" role="button" data-slide="prev">
                    <button type="button" class="blogPagination__button btnReset btn-paginacao" title="Ir para página anterior"
                      aria-label="Ir para página anterior"><b><i class="fa-solid fa-angle-left"></i> página anterior</b>
                    </button>
                  </a>
                  <a class="carousel-control-next c-color-5 btn-paginacao" href="#carouselExampleControls" role="button" data-slide="next">
                    <button type="button" class="btn-paginacao blogPagination__button btnReset" title="Ir para próxima página"
                      aria-label="Ir para próxima página"><b>próxima página <i class="fa-solid fa-angle-right"></i></b>
                    </button>
                  </a>
                </div>
              </div>
            <!-- Cards Blog -->
            <div class="col-12 col-md-6 col-lg-3 offset-lg-1 box-ler-mais">
              <div class="row">
                <!-- Card Blog -->
                  <aside class="col-12 mb-5">
                    <div class="cardBlog cardShadow zoomIn" title="Ir para Blog" aria-label="Ir para Blog">
                      <figure>
                        <a href="/paginaSYSurlSYS"><img src="fotoGrandeSYS" alt="tituloSYS" width="100% height="auto"></a>
                      </figure>
                      <div class="cardBlog__content">
                        <h3 class="cardBlog__title"><a href="/paginaSYSurlSYS">tituloSYS</a></h3>
                        <div class="cardAgenda__text">
                          descricaoSYS
                        </div>
                        <a href="/paginaSYSurlSYS" type="button" class="ml-auto cardBlog__link" aria-label="Leia mais"  title="Leia mais">Leia mais <i class="fa-solid fa-angle-right"></i>
                        </a>
                      </div>
                    </div>
                  </aside>
              </div>
            </div>
          </div>
      </div>
    </main>
    <script>
      window.scrollTo({
    top: 800,
    left: 0,
    behavior: 'smooth'
  }), {delay: 1000};
  </script>
    <?php include __DIR__ . '/includes/footer.php'; ?>
    
    <?php include __DIR__ . '/includes/scripts.php'; ?>
  </body>
</html>
