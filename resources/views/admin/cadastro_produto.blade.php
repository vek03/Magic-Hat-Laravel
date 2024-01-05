<x-app-layout>
    <br><br>
    <section id="contact" class="contact">
      <center>
        <div class="container">
          <div class="section-title">
            <p>Cadastro de Produtos</p>
            <h2>Cadastre produtos em seu catálogo de brinquedos</h2>
          </div>

          <div class="row mt-5">
            <center>
              <div class="col-lg-8 mt-5 mt-lg-0">
                <form method="post" action="controller/controller.php?funcao=cadastroProd" id="formCadProd" name="formCadProd" enctype="multipart/form-data">
                  <div class="row g-3">
                    <div class="txtLeft col-md-6">
                      <label for="inputNomeProd" class="form-label">Título do produto</label>
                      <input autofocus type="text" placeholder="ex: Casa dos Sonhos da Barbie" class="form-control" name="txtNomeProd" required id="txtNomeProd">
                    </div>

                    <div class="txtLeft col-md-6">
                      <label for="inputCategoriaProd" class="form-label">Categoria</label>
                      <select class="form-select" name="cboCategoriaProd" id="cboCategoriaProd" required value>
                        <option selected disabled>Escolha...</option>
                        <option value="Bonecas">Bonecas</option>
                        <option value="Bonecos">Bonecos</option>
                        <option value="Carrinhos">Carrinhos</option>
                        <option value="Heróis">Heróis</option>
                        <option value="Jogos">Jogos</option>
                        <option value="Princesas">Princesas</option>
                      </select>
                    </div>

                    <div class="txtLeft col-md-6">
                      <label for="inputPrimeiroTipo" class="form-label">Desenvolvimento primário</label>
                      <select class="form-select" name="cboPrimeiroTipo" id="cboPrimeiroTipo" required value>
                        <option selected disabled>Escolha...</option>
                        <option value="Afetividade">Afetividade</option>
                        <option value="Aprendizado">Aprendizado</option>
                        <option value="Cognição">Cognição</option>
                        <option value="Coordenação Motora">Coordenação Motora</option>
                        <option value="Criatividade">Criatividade</option>
                        <option value="Ideias Divertidas">Ideias Divertidas</option>
                        <option value="Imaginação">Imaginação</option>
                        <option value="Raciocínio Lógico">Raciocínio Lógico</option>
                        <option value="Responsabilidade">Responsabilidade</option>
                      </select>
                    </div>

                    <div class="txtLeft col-md-6">
                      <label for="inputSegundoTipo" class="form-label">Desenvolvimento secundário</label>
                      <select class="form-select" name="cboSegundoTipo" id="cboSegundoTipo" required value>
                        <option selected disabled>Escolha...</option>
                        <option value="Afetividade">Afetividade</option>
                        <option value="Aprendizado">Aprendizado</option>
                        <option value="Cognição">Cognição</option>
                        <option value="Coordenação Motora">Coordenação Motora</option>
                        <option value="Criatividade">Criatividade</option>
                        <option value="Ideias Divertidas">Ideias Divertidas</option>
                        <option value="Imaginação">Imaginação</option>
                        <option value="Raciocínio Lógico">Raciocínio Lógico</option>
                        <option value="Responsabilidade">Responsabilidade</option>
                      </select>
                    </div>

                    <div class="txtLeft col-md-6">
                      <label for="inputFaixaEt" class="form-label">Faixa etária</label>
                      <select class="form-select" name="cboFaixaEt" id="cboFaixaEt" required value>
                        <option selected disabled>Escolha...</option>
                        <option value="Criança">Criança</option>
                        <option value="Pré-Adolescente">Pré-Adolescente</option>
                        <option value="Adolescente">Adolescente</option>
                      </select>
                    </div>

                    <div class="txtLeft col-md-6">
                      <label for="inputQuant" class="form-label">Quantidade</label>
                      <input autofocus type="number" placeholder="000" class="form-control" name="numberQuant" required id="numberQuant">
                    </div>

                    <div class="txtLeft col-md-6">
                      <label for="inputMarca" class="form-label">Marca</label>
                      <input type="text" placeholder="ex: Estrela" class="form-control" name="txtMarca" required id="txtMarca">
                    </div>

                    <div class="txtLeft col-md-6">
                      <label for="inputValor" class="form-label">Valor unitário</label>
                      <input type="number" class="form-control" step="0.01" name="txtValor" min="0.01" required id="txtValor">
                    </div>

                    <div class="txtLeft col-md-6">
                      <label for="inputMaterial" class="form-label">Material/Composição</label>
                      <input type="text" placeholder="ex: Plástico" class="form-control" name="txtMaterial" required id="txtMaterial">
                    </div>

                    <div class="txtLeft col-md-6">
                      <label for="inputDescr" class="form-label">Descrição</label>
                      <input type="text" placeholder="..." class="form-control" name="txtDescr" maxlength="170" required id="txtDescr">

                      <br>

                    </div>
                    <!-- ============================================================================================================= -->
                    <div class="form-group">
                      <label>Imagem Principal</label>
                      <input type="file" name="img1" class="form-control">
                    </div>
                    <div class="form-group">
                      <label>Segunda Imagem</label>
                      <input type="file" name="img2" class="form-control">
                    </div>
                    <div class="form-group">
                      <label>Terceira Imagem</label>
                      <input type="file" name="img3" class="form-control">
                    </div>
                    <!-- ============================================================================================================= -->


                    <div class="row">
                      <div class="col">
                        <br>
                      </div>
                    </div>

                    <div class="php-email-form text-center col-12">
                      <button type="submit" id="btnCadastrar" name="submit" class="btn btn-dark">Cadastrar Produto</button>
                    </div>
                </form>

              </div>
            </center>
          </div>
        </div>
      </center>
    </section><!-- End Contact Section -->
</x-app-layout>