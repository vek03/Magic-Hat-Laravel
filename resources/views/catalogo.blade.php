<x-app-layout>
    <!-- ======= Container Section ======= -->
    <section id="cta" class="cta">
      <div class="container">
        <div class="section-title">
          <p>Produtos</p>
          <h2>VEJA NOSSO CATÁLOGO DE PRODUTOS</h2>
        </div>

        <center>

          <div id="carouselExampleControls" data-aos-delay="5000" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">

              <div class="carousel-item active">
                <img class="animate__animated animate__fadeInLeft ratio ratio-21x9" src="img/bannercategorias/bonecas.jpg">
              </div>

              <div class="carousel-item active">
                <img class="animate__animated animate__fadeInLeft ratio ratio-21x9" src="img/bannercategorias/bonecos.jpg">
              </div>

              <div class="carousel-item">
                <img class="animate__animated animate__fadeInLeft ratio ratio-21x9" src="img/bannercategorias/carrinhos.jpg">
              </div>

              <div class="carousel-item">
                <img class="animate__animated animate__fadeInLeft ratio ratio-21x9" src="img/bannercategorias/herois.jpg">
              </div>

              <div class="carousel-item">
                <img class="animate__animated animate__fadeInLeft ratio ratio-21x9" src="img/bannercategorias/jogos.jpg">
              </div>

              <div class="carousel-item">
                <img class="animate__animated animate__fadeInLeft ratio ratio-21x9" src="img/bannercategorias/princesas.jpg">
              </div>
            </div>


          </div>

        </center>
      </div>
    </section>
    <!-- End Cta Section -->


    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container">

        <ul id="portfolio-flters" class="d-flex justify-content-end">
          <ul>
            <li data-filter="*">Todos</li>
            <li data-filter=".Bonecas">Bonecas</li>
            <li data-filter=".Bonecos">Bonecos</li>
            <li data-filter=".Jogos">Jogos</li>
          </ul>
          <ul style="margin-left: -20px;">
            <li data-filter=".Carrinhos">Carrinhos</li>
            <li data-filter=".Heróis">Heróis</li>
            <li data-filter=".Princesas">Princesas</li>
          </ul>
        </ul>
        <br>
        <br>
        <br>

        <div class="row portfolio-container pricing">
          <div class="row">
            @foreach ($produtos as $produto)
              @if($produto->qtdd > 0)

                <div class="col-lg-3 col-md-6 mt-4 mt-md-0 portfolio-item {{ $produto->category->name }}">
                  <div class="box">
                    <h3 style="height: 105px;">{{ $produto->name }}</h3>
                    <div><img style="height: 250px; width: 250px;" src="{{ $produto->img1 }}"></div>
                    <h4><sup>R$</sup>{{ $produto->price }}</h4>
                    <div>
                      <div class="btn-group me-2" role="group" aria-label="First group">
                        <button id="btnMenos" type="button" onclick="javascript:var btn = parseInt(document.getElementById('btnValue{{ $produto->id }}').innerHTML.toString()); if(btn > 1){document.getElementById('btnValue{{ $produto->id }}').innerHTML = btn - 1}" style="background-color: #ED4442; border-color: #ED4442;" class="btn btn-primary">-</button>
                        <button id="btnValue{{ $produto->id }}" type="button" style="background-color: white; color:black; border-color: #ED4442;" class="btn btn-primary">1</button>
                        <button id="btnMais" onclick="javascript:var btn = parseInt(document.getElementById('btnValue{{ $produto->id }}').innerHTML.toString()); if(btn < {{ $produto->qtdd }}){document.getElementById('btnValue{{ $produto->id }}').innerHTML = btn + 1}" type="button" style="background-color: #ED4442; border-color: #ED4442;" class="btn btn-primary">+</button>
                      </div>
                    </div>
                    <div class="btn-wrap">
                      <button type="button" class="btn btn-buy btn-primary" data-bs-target="#staticBackdrop" style="border: 0px;" onclick="">
                        + Carrinho
                      </button>
                    </div>
                    <div class="btn-wrap" style="margin-top: -10px;">
                      <button type="button" class="btn btn-buy btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop{{ $produto->id }}" style="border: 0px;">
                        Detalhes
                      </button>
                    </div>
                  </div>
                </div>

              @endif
            @endforeach
          </div>
        </div>

      </div>
    </section><!-- End Portfolio Section -->



    <!-- ======= Janela Modal ======= -->
    <section>
      @foreach ($produtos as $produto)
        @if($produto->qtdd > 0)
          <div class="modal fade" id="staticBackdrop{{ $produto->id }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-dialog modal-xl">
              <div class="modal-content">

                <!-- Carros de imagens do produto -->
                <div class="products modal-body">

                  <div class="row bruh">
                    <div class="col">
                      <div id="carouselExampleIndicators{{ $produto->id }}" class="carousel slide" data-bs-ride="true">
                        <div class="carousel-inner">
                          <div class="carousel-item active">
                            <img src="{{ $produto->img1 }}" class="d-block w-100">
                          </div>
                          <div class="carousel-item">
                            <img src="{{ $produto->img2 }}" class="d-block w-100">
                          </div>
                          <div class="carousel-item">
                            <img src="{{ $produto->img3 }}" class="d-block w-100">
                          </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators{{ $produto->id }}" data-bs-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators{{ $produto->id }}" data-bs-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        </button>
                      </div>
                    </div>


                    <div class="text-center col">

                      <div>
                        <h2>{{ $produto->name }}</h2>

                        <p></p>
                      </div>


                      <!-- Acordião -->
                      <div>
                        <!-- Acordião Descrição -->
                        <div class="accordion" id="accordionExample">
                          <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                              <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Descrição
                              </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                              <div class="accordion-body">
                                {{ $produto->description }}
                              </div>
                            </div>
                          </div>


                          <!-- Acordião Detalhe -->
                          <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                              <button class="Bara-button accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Detalhes
                              </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                              <div class="accordion-body">
                                <table class="table">
                                  <tbody>
                                    <div>
                                      <b><span scope="row" class="txtLeft">Tipo:</span></b>
                                      <span class="txtRight">{{ $produto->type1->name . ', ' . $produto->type2->name  }}</span>
                                    </div>

                                    <div>
                                    <b><span scope="row">Categoria(s):</span></b>
                                      <span>{{ $produto->category->name }}</span>
                                    </div>

                                    <div>
                                    <b><span scope="row">Faixa etária:</span></b>
                                      <span>{{ $produto->age_range }}</span>
                                    </div>

                                    <div>
                                    <b><span scope="row">Marca:</span></b>
                                      <span>{{ $produto->maker }}</span>
                                    </div>

                                    <div>
                                    <b><span scope="row">Material/Composição:</span></b>
                                      <span>{{ $produto->material }}</span>
                                    </div>

                                  </tbody>
                                </table>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>

                      <br>

                      <!-- parte do Preço do produto -->

                      <div class="row pricing">
                        <div class="col-md-12">
                          <h4 style="color: black"><sup>R$ {{ $produto->price }}</sup></h4>
                        </div>
                      </div>

                      <br>

                      <div class="product btn-group" role="group" aria-label="Basic example">
                        <button type="button" onclick="javascript:var btn = parseInt(document.getElementById('btnVar{{ $produto->id }}').innerHTML.toString()); if(btn > 1){document.getElementById('btnVar{{ $produto->id }}').innerHTML = btn - 1}" style="background-color: #ED4442; border-color: #ED4442;" class="btn btn-primary">-</button>
                        <button id="btnVar{{ $produto->id }}" type="button" style="background-color: white; color:black; border-color: #ED4442;" class="btn btn-primary">1</button>
                        <button onclick="javascript:var btn = parseInt(document.getElementById('btnVar{{ $produto->id }}').innerHTML.toString()); if(btn < {{ $produto->qtdd }}){document.getElementById('btnVar{{ $produto->id }}').innerHTML = btn + 1}" type="button" style="background-color: #ED4442; border-color: #ED4442;" class="btn btn-primary">+</button>
                      </div>
                      <br>

                      <!-- Botão de compra -->
                      <br>
                      <div class="product text-center">
                        <button type="button" class="btn btn-buy" onclick="">+ Carrinho</button>

                        <button type="button" class=" btn-buy btn " data-bs-dismiss="modal">Voltar</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        @endif
      @endforeach
    </section>
    <!-- End Janela modal -->
</x-app-layout>