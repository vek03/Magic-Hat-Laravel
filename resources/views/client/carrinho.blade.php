<x-app-layout>
    <br><br>
    <!-- ======= Pricing Section ======= -->
    <section id="pricing" class="pricing">
        <div class="container">

            <div class="section-title">
                <p>Carrinho</p>
                <h2>Esses são os seus itens no carrinho</h2>
                <h2>Para atualizar a quantidade de um produto, coloque a nova quantidade e clique em atualizar carrinho</h2>
            </div>

        </div>
    </section><!-- End Pricing Section -->



    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
        <div class="container">

            <div class="row portfolio-container pricing">
                <div class="row">

                    @foreach ($cart as $item)

                        <div class="col-lg-3 col-md-6 mt-4 mt-md-0 portfolio-item">
                            <div class="box">
                                <h3 style="height: 105px;">{{ $item->product()->first()->name }}</h3>
                                <div><img style="height: 250px; width: 250px;" src="{{ $item->product->img1 }}"></div>
                                <h4><sup>R$</sup>{{ $item->product()->first()->price }}</h4>
                                <div>
                                    <div class="btn-group me-2" role="group" aria-label="First group">
                                    <button id="btnMenos" type="button" onclick="javascript:var btn = parseInt(document.getElementById('btnValue{{ $item->product->id }}').innerHTML.toString()); if(btn > 1){document.getElementById('btnValue{{ $item->product->id }}').innerHTML = btn - 1}" style="background-color: #ED4442; border-color: #ED4442;" class="btn btn-primary">-</button>
                                    <button id="btnValue{{ $item->product->id }}" type="button" style="background-color: white; color:black; border-color: #ED4442;" class="btn btn-primary">{{ $item->qtdd }}</button>
                                    <button id="btnMais" onclick="javascript:var btn = parseInt(document.getElementById('btnValue{{ $item->product->id }}').innerHTML.toString()); if(btn < {{ $item->product->qtdd }}){document.getElementById('btnValue{{ $item->product->id }}').innerHTML = btn + 1}" type="button" style="background-color: #ED4442; border-color: #ED4442;" class="btn btn-primary">+</button>
                                    </div>
                                </div>
                                <br>
                                <div class="btn-wrap" style="margin-top: -10px;">
                                    <button type="button" class="btn btn-buy btn-primary" style="border: 0px;"
                                    onclick="">
                                    Atualizar carrinho
                                    </button>
                                </div>
                                <div class="btn-wrap" style="margin-top: -10px;">
                                    <button type="button" class="btn btn-buy btn-primary" style="border: 0px;"
                                    onclick="javascript:var result = confirm('Deseja retirar o produto do carrinho?'); if(result == true){document.location='cart.php?funcao=0&id={{ $item->product->id }}'}">
                                    Excluir
                                    </button>
                                </div>
                            </div>
                        </div>

                    @endforeach
                </div>
            </div>

            <div class="row pricing">
                <div class="col">
                    <form class="php-email-form">
                        <div class="text-center">
                            <a href="{{ route('client.create-compra') }}">
                                <button type="button" id="btnFinalizar" class="btn btn-buy php-email-form">Finalizar Compra</button>
                            </a>
                        </div>
                    </form>
                </div>
            </div>
            
            

        </div>
    </section><!-- End Portfolio Section -->

    <br><br>
</x-app-layout>