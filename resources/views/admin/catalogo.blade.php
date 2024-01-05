<x-app-layout>
  <!-- ======= Container Section ======= -->
  <section id="cta" class="cta">
    <div class="container">
      <div class="section-title">
        <p>Produtos</p>
        <h2>VEJA NOSSO CATÁLOGO DE PRODUTOS</h2>
        <h2>APERTE CRTL + F5 PARA ATUALIZAR O CATÁLOGO APÓS UMA EDIÇÃO</h2>
      </div>
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
        <ul>
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
                    <a href="{{ route('admin.edit-prod' , $produto->id) }}">
                      <button type="button" class="btn btn-buy btn-primary" data-bs-target="#staticBackdrop" style="border: 0px;" onclick="">
                        Editar
                      </button>
                    </a>
                  </div>
                  <div class="btn-wrap" style="margin-top: -10px;">
                    <button type="button" class="btn btn-buy btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop{{ $produto->id }}" style="border: 0px;">
                      Excluir
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
</x-app-layout>