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


  <!-- ======= Contact Section ======= -->
  <section id="contact" class="contact">
    <div class="container">

      <div class="section-title">
        <p>Contato</p>
        <h2>Fale conosco</h2>
      </div>

      <div class="row mt-5">

        <div class="col-lg-4">
          <div class="info">
            <div class="address">
              <i class="bi bi-geo-alt"></i>
              <h4>Localização:</h4>
              <p>Av. Águia de Haia, 2633 - Cidade Antônio Estêvão de Carvalho, São Paulo</p>
            </div>

            <div class="email">
              <i class="bi bi-envelope"></i>
              <h4>Email:</h4>
              <p>magichat@outlook.com</p>
            </div>

            <div class="phone">
              <i class="bi bi-phone"></i>
              <h4>Telefone:</h4>
              <p>(11) 69318-8308</p>
            </div>

          </div>

        </div>

        <div class="col-lg-8 mt-5 mt-lg-0">

          <form method="post" action="controller/controller.php?funcao=contato" id="formLogin" name="formLogin">
            <div class="row">
              <div class="col-md-6 form-group">
                <input type="text" name="txtNome" class="form-control" id="txtNome" placeholder="Nome" required>
              </div>
              <div class="col-md-6 form-group mt-3 mt-md-0">
                <input type="email" class="form-control" name="txtEmail" id="txtEmail" placeholder="Email" required>
              </div>
            </div>
            <div class="form-group mt-3">
              <input type="text" class="form-control" name="txtAssunto" id="txtAssunto" placeholder="Assunto" required>
            </div>
            <div class="form-group mt-3">
              <textarea class="form-control" name="txtMensagem" id="txtMensagem" rows="5" placeholder="Mensagem" required></textarea>
            </div>

            <br>
            <br>

            <div class="php-email-form text-center col-12">
              <button type="submit" id="btnEnviar">Enviar</button>
            </div>


          </form>

        </div>

      </div>

    </div>
  </section><!-- End Contact Section -->
  <section id="faq" class="faq">
    <div class="container">

      <div class="section-title">
        <p>Perguntas Frequentes</p>
        <h2>F.A.Q</h2>
      </div>

      <ul class="faq-list">

        <li>
          <div data-bs-toggle="collapse" class="collapsed question" href="#faq1">"Quais as formas de pagamento que a loja utiliza?"<i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
          <div id="faq1" class="collapse" data-bs-parent=".faq-list">
            <p>
              A Magic Hat utiliza apenas duas possibilidades de pagamento: via cartão de crédito ou via cartão de débito.
            </p>
          </div>
        </li>

        <li>
          <div data-bs-toggle="collapse" class="collapsed question" href="#faq2">"Como funciona o valor de frete dos produtos?"<i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
          <div id="faq2" class="collapse" data-bs-parent=".faq-list">
            <p>
              O valor do frete dos produtos terá o seguinte funcionamento: caso o endereço de entrega do produto seja na cidade de São Paulo, o frete será entre 0 a 20 reais e caso seja fora da cidade, o valor do frete será entre 20 a 35 reais.
            </p>
          </div>
        </li>

        <li>
          <div data-bs-toggle="collapse" class="collapsed question" href="#faq3">"O produto que comprei veio com defeito, o que devo fazer para trocá-lo?"<i class="bi bi-chevron-down icon-"></i><i class="bi bi-chevron-up icon-close"></i></div>
          <div id="faq3" class="collapse" data-bs-parent=".faq-list">
            <p>
              Para efetuar a troca de produtos com defeitos é simples: entre em contato conosco por telefone ou email e enviaremos um entregador para recolher o produto defeituoso e entregar um novo.
            </p>
          </div>
        </li>

        <li>
          <div data-bs-toggle="collapse" class="collapsed question" href="#faq4">"Não gostei do produto que comprei. Posso trocar por outro brinquedo ou pedir meu dinheiro de volta?"<i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
          <div id="faq4" class="collapse" data-bs-parent=".faq-list">
            <p>
              Pela política da loja, a troca de produtos só poderá ser feita por dois motivos: produto com defeitos ou caso a loja tenha feito descrição equivocada do item e o objeto não esteja de acordo estas expectativas. Em outros tipos de casos, as trocas não serão efetuadas. Acaso seja uma situação especial, o cliente poderá entrar em contato e explicar seus motivos. Nossa loja dá o melhor para atender e entender o público.
            </p>
          </div>
        </li>

        <li>
          <div data-bs-toggle="collapse" class="collapsed question" href="#faq5">"Posso comprar produtos pelo site e retirar em uma loja física?"<i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
          <div id="faq5" class="collapse" data-bs-parent=".faq-list">
            <p>
              A Magic Hat não possui lojas físicas, portanto, não há esta possibilidade.
            </p>
          </div>
        </li>

        <li>
          <div data-bs-toggle="collapse" class="collapsed question" href="#faq6">"Qual o prazo de entrega mínimo e máximo da loja?"<i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
          <div id="faq6" class="collapse" data-bs-parent=".faq-list">
            <p>
              O prazo de entrega de nossa loja varia de 2 a 20 dias após a realização da compra. Caso seu produto ainda não tenha chegado após o fim deste prazo, recomendamos que entre em contato conosco, relatando o problema e a quantidade de dias ultrapassados.
            </p>
          </div>
        </li>

      </ul>
    </div>
  </section>
</x-app-layout>