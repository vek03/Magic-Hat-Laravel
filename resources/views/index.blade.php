<x-app-layout>
  <x-slot name="header">
    <!-- ====== Pesquisa ======= -->
    <div id="header">
        <div class="col bg-red-800">
        <nav class="navbar  container text-center">
            <div class="col order-first"></div>
            <div class="col-9">

            <form method="post" action="search.php" id="formPesq" name="formPesq">
                <div class="input-group">
                <input autofocus type="text" placeholder="Com o que vamos brincar?" class="rounded-e-lg form-control" name="txtPesquisa" required id="txtPesquisa">
                <button style="background-color: #ED4442;" class="btn btn-outline-light" type="submit">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                    </svg>
                </button>
                </div>
            </form>

            </div>
            <div class="col order-last"></div>
        </nav>
        </div>
    </div>
  </x-slot>
  
  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex flex-column justify-content-end align-items-center">
    <div id="heroCarousel" class=" container-fluid  carousel carousel-fade" data-bs-ride="carousel">

      <!-- Slide unico -->
      <div class="carousel-inner">
        <img src="img/magichat/cortinanav.png" class="ratio imgteste">
        <div class="carousel-caption d-none d-md-block">
          <h1 class="magichat animate__animated animate__fadeInDown"><b>Magic Hat</b></h1>
          <?php
            if(false){
          ?>
          <h4 class="magichat animate__animated animate__fadeInDown"><b></b></h4>
          <?php
            }
          ?>
          <h4 class="magich animate__animated animate__fadeInDown">Adquira seus brinquedos em um passe de mágica</h4>
          <a href="#categorias" class="btn-get-started animate__animated animate__fadeInUp scrollto">Navegue</a>
        </div>
      </div>

    </div>

    <svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28 " preserveAspectRatio="none">
      <defs>
        <path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z">
      </defs>
      <g class="wave1">
        <use xlink:href="#wave-path" x="50" y="3" fill="rgba(255,255,255, .1)">
      </g>
      <g class="wave2">
        <use xlink:href="#wave-path" x="50" y="0" fill="rgba(255,255,255, .2)">
      </g>
      <g class="wave3">
        <use xlink:href="#wave-path" x="50" y="9" fill="#FAF2F7">
      </g>
    </svg>

  </section><!-- End Hero -->

  <!-- ======= Services Section ======= -->
  <section id="categorias" class="services" style="background-color: #FAF2F7;">
    <div class="container">

      <div class="section-title">
        <p>Categorias</p>
        <h2>Escolha sua categoria favorita</h2>
      </div>

      <div class="row">
        <div class="col-lg-4 col-md-6 mt-5">
          <a href="produtos.php?bonecas">
            <div class="icon-box">
              <div class="icon"><img id="categoriaimg" src="img/categorias/bonecas.png">
              </div>
              <h4 class="title"><a href="produtos.php?bonecas">Bonecas</a></h4>
            </div>
          </a>
        </div>

        <div class="col-lg-4 col-md-6 mt-5">
          <a href="produtos.php?bonecos">
            <div class="icon-box" data-aos-delay="200">
              <div class="icon"><img src="img/categorias/bonecos.png" id="categoriaimg">
              </div>
              <h4 class="title"><a href="produtos.php?bonecos">Bonecos</a></h4>
            </div>
          </a>
        </div>

        <div class="col-lg-4 col-md-6 mt-5">
          <a href="produtos.php?carrinhos">
            <div class="icon-box" data-aos-delay="100">
              <div class="icon"><img src="img/categorias/carrinhos.png" id="categoriaimg">
              </div>
              <h4 class="title"><a href="produtos.php?carrinhos">Carrinhos</a></h4>
            </div>
          </a>
        </div>

        <div class="col-lg-4 col-md-6 mt-5">
          <a href="produtos.php?herois">
            <div class="icon-box" data-aos-delay="300">
              <div class="icon"><img src="img/categorias/herois.png" id="categoriaimg">
              </div>
              <h4 class="title"><a href="produtos.php?herois">Heróis</a></h4>
            </div>
          </a>
        </div>

        <div class="col-lg-4 col-md-6 mt-5">
          <a href="produtos.php?jogos">
            <div class="icon-box" data-aos-delay="400">
              <div class="icon"><img src="img/categorias/jogos.png" id="categoriaimg">
              </div>
              <h4 class="title"><a href="produtos.php?jogos">Jogos</a></h4>
            </div>
          </a>
        </div>


        <div class="col-lg-4 col-md-6 mt-5">
          <a href="produtos.php?princesas">
            <div class="icon-box" data-aos-delay="500">
              <div class="icon"><img src="img/categorias/princesas.png" id="categoriaimg">
              </div>
              <h4 class="title"><a href="produtos.php?princesas">Princesas</a></h4>
            </div>
          </a>
        </div>
      </div>

    </div>

  </section>
  <!-- End Services Section -->

  <!-- ======= Container Section ======= -->
  <section id="cta" class="cta">
    <div class="container">
      <div class="section-title">
        <p>Para você</p>
        <h2>Confira produtos que vão de acordo com sua preferência</h2>
      </div>
      <center>

        <div id="Banerindex" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <a href="produtos.php?bonecas"><img class="ratio ratio-21x9" src="img/bannerindex/bonecaum.png"></a>
          </div>

          <div class="carousel-item">
            <a href="produtos.php?bonecas"><img class="ratio ratio-21x9" src="img/bannerindex/bonecadois.png"></a>
          </div>

          <div class="carousel-item">
            <a href="produtos.php?bonecos"><img class="ratio ratio-21x9" src="img/bannerindex/bonecoum.png"></a>
          </div>

          <div class="carousel-item">
            <a href="produtos.php?bonecos"><img class="ratio ratio-21x9" src="img/bannerindex/bonecodois.png"></a>
          </div>

          <div class="carousel-item">
            <a href="produtos.php?carrinhos"><img class="ratio ratio-21x9" src="img/bannerindex/carrinhoum.png"></a>
          </div>

          <div class="carousel-item">
            <a href="produtos.php?carrinhos"><img class="ratio ratio-21x9" src="img/bannerindex/carrinhodois.png"></a>
          </div>

          <div class="carousel-item">
            <a href="produtos.php?herois"><img class="ratio ratio-21x9" src="img/bannerindex/heroium.png"></a>
          </div>

          <div class="carousel-item">
            <a href="produtos.php?herois"><img class="ratio ratio-21x9" src="img/bannerindex/heroidois.png"></a>
          </div>

          <div class="carousel-item">
            <a href="produtos.php?jogos"><img class="ratio ratio-21x9" src="img/bannerindex/jogoum.png"></a>
          </div>

          <div class="carousel-item">
            <a href="produtos.php?jogos"><img class="ratio ratio-21x9" src="img/bannerindex/jogodois.png"></a>
          </div>

          <div class="carousel-item">
            <a href="produtos.php?princesas"><img class="ratio ratio-21x9" src="img/bannerindex/princesaum.png"></a>
          </div>

          <div class="carousel-item">
            <a href="produtos.php?princesas"><img class="ratio ratio-21x9" src="img/bannerindex/princesadois.png"></a>
          </div>
        </div>

          <button class="carousel-control-prev" type="button" data-bs-target="#Banerindex" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#Banerindex" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>

      </center>
      <br>
    </div>
  </section>
  <!-- End Cta Section -->

  <!-- ======= Portfolio Section ======= -->
  <section id="portfolio" class="portfolio">
    <div class="container">

      <div class="section-title">
        <p>Produtos</p>
        <h2>Alguns produtos de nosso catálogo</h2>
      </div>

      <div class="row portfolio-container">

        <div class="col-lg-4 col-md-6 portfolio-item">
          <div class="portfolio-img"><img src="img/produtosindex/1.png" class="img-fluid"></div>
          <div class="portfolio-info">
            <h4>Pelúcia Capitão América</h4>
            <p>Super-Herói</p>
            <a href="img/produtosindex/1.png" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link"><i class="bx bx-plus"></i></a>
            <a href="produtos.php?herois" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item">
          <div class="portfolio-img"><img src="img/produtosindex/2.png" class="img-fluid"></div>
          <div class="portfolio-info">
            <h4>Relâmpago McQueen</h4>
            <p>Carrinho</p>
            <a href="img/produtosindex/2.png" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link"><i class="bx bx-plus"></i></a>
            <a href="produtos.php?carrinhos" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item">
          <div class="portfolio-img"><img src="img/produtosindex/3.png" class="img-fluid"></div>
          <div class="portfolio-info">
            <h4>Quebra-Cabeça da Bela</h4>
            <p>Princesa</p>
            <a href="img/produtosindex/3.png" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link"><i class="bx bx-plus"></i></a>
            <a href="produtos.php?princesas" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item">
          <div class="portfolio-img"><img src="img/produtosindex/4.png" class="img-fluid" alt=""></div>
          <div class="portfolio-info">
            <h4>Carro de Polícia</h4>
            <p>Carrinho</p>
            <a href="img/produtosindex/4.png" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link"><i class="bx bx-plus"></i></a>
            <a href="produtos.php?carrinhos" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item">
          <div class="portfolio-img"><img src="img/produtosindex/5.png" class="img-fluid" alt=""></div>
          <div class="portfolio-info">
            <h4>Conjunto de Jogos dos Vingadores</h4>
            <p>Heróis</p>
            <a href="img/produtosindex/5.png" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link"><i class="bx bx-plus"></i></a>
            <a href="produtos.php?herois" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item">
          <div class="portfolio-img"><img src="img/produtosindex/6.png" class="img-fluid" alt=""></div>
          <div class="portfolio-info">
            <h4>Uno Minimalista</h4>
            <p>Jogo</p>
            <a href="img/produtosindex/6.png" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link"><i class="bx bx-plus"></i></a>
            <a href="produtos.php?jogos" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item">
          <div class="portfolio-img"><img src="img/produtosindex/7.png" class="img-fluid" alt=""></div>
          <div class="portfolio-info">
            <h4>Pantera Negra</h4>
            <p>Super-Herói</p>
            <a href="img/produtosindex/7.png" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link"><i class="bx bx-plus"></i></a>
            <a href="produtos.php?herois" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item">
          <div class="portfolio-img"><img src="img/produtosindex/8.png" class="img-fluid" alt=""></div>
          <div class="portfolio-info">
            <h4>Caiu Perdeu </h4>
            <p>Jogo</p>
            <a href="img/produtosindex/8.png" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link"><i class="bx bx-plus"></i></a>
            <a href="produtos.php?jogos" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item">
          <div class="portfolio-img"><img src="img/produtosindex/9.png" class="img-fluid"></div>
          <div class="portfolio-info">
            <h4>Mega Casa dos Sonhos da Barbie</h4>
            <p>Boneca</p>
            <a href="img/produtosindex/9.png" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link"><i class="bx bx-plus"></i></a>
            <a href="produtos.php?bonecas" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
          </div>
        </div>


        <div class="col-lg-4 col-md-6 portfolio-item">
          <div class="portfolio-img"><img src="img/produtosindex/10.png" class="img-fluid"></div>
          <div class="portfolio-info">
            <h4>Hermione Granger</h4>
            <p>Boneca</p>
            <a href="img/produtosindex/10.png" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link"><i class="bx bx-plus"></i></a>
            <a href="produtos.php?bonecas" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
          </div>
        </div>

      </div>

    </div>
  </section><!-- End Portfolio Section -->
</x-app-layout>