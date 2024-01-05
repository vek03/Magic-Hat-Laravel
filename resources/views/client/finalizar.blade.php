<x-app-layout>
    <br><br>
    <section id="contact" class="contact">
        <center>
            <div class="container">
                <div class="section-title">
                    <p>Detalhes da Compra</p>
                    <h2>Confira antes de finalizar sua compra</h2>
                </div>


                <div id="finalizar-Compra" class="row mt-5">
                    <center>
                        <div class="col-lg-8 mt-5 mt-lg-0">
                            <form method="post" action="controller/controller.php?funcao=compra" id="formCad" name="formCad">
                                <div class="row g-3">
                                    <div class="txtLeft col-md-6">
                                        <div class="section-title">
                                            <p class="txtLeft">Resumo da Entrega</p>
                                            <h2>Detalhes da Entrega</h2>
                                        </div>
                                        <label for="inputEmail4" class="form-label">Nome do cliente: </label>
                                        <label for="inputEmail4" class="form-label">nome</label>

                                        <br>

                                        <label for="inputEmail4" class="form-label">CEP: </label>
                                        <label for="inputEmail4" class="form-label">cep</label>

                                        <br>

                                        <label for="inputEmail4" class="form-label">Bairro: </label>
                                        <label for="inputEmail4" class="form-label">bairro</label>

                                        <br>

                                        <label for="inputEmail4" class="form-label">Endereço: </label>
                                        <label for="inputEmail4" class="form-label">endereco</label>

                                        <br>

                                        <label for="inputEmail4" class="form-label">Estado: </label>
                                        <label for="inputEmail4" class="form-label">estado</label>

                                        <br>

                                        <label for="inputEmail4" class="form-label">Cidade: </label>
                                        <label for="inputEmail4" class="form-label">cidade</label>

                                        <br>

                                        <a class="editarinf" href="editarinfo.php"><label for="inputEmail4" class="form-label">Alterar endereço de entrega</label>
                                        </a>


                                    </div>

                                    <div class="txtLeft col-md-6">
                                        <div class="section-title">
                                            <p class="txtLeft">Resumo da Compra</p>
                                            <h2>Detalhes da compra</h2>

                                            <br>

                                            <label for="inputEmail4" class="form-label">Qtdd. de Produtos: </label>
                                            <label for="inputEmail4" class="form-label">qtdd></label>

                                            <br>

                                            <label for="inputEmail4" class="form-label">Valor: </label>
                                            <label for="inputEmail4" class="form-label">R$</label>
                                            <label for="inputEmail4" class="form-label">valor</label>

                                            <br>

                                            <label for="inputEmail4" class="form-label">Frete: </label>
                                            <label for="inputEmail4" class="form-label">R$</label>
                                            <label for="inputEmail4" class="form-label">frete</label>

                                            <br>

                                            <div id="linha-horizontal">
                                            </div>

                                            <label for="inputEmail4" class="form-label">Valor total: </label>
                                            <label for="inputEmail4" class="form-label">R$</label>
                                            <label for="inputEmail4" class="form-label">valor></label>


                                        </div>

                                    </div>




                                    <!-- forms do categoria-->


                                    <br>

                                    <div id="linha-horizontal">
                                    </div>

                                    <center>
                                        <div class="row">

                                            <div class="col-12">
                                                <div class="section-title">
                                                    <p>Opções de pagamento</p>
                                                </div>
                                            </div>

                                            <div class="col-md-2">

                                            </div>

                                            <div class="col-md-4">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                                                    <label class="form-check-label" for="flexRadioDefault2">
                                                        <div class="finalizar-compra">
                                                            <h2>Cartão de Crédito</h2>
                                                        </div>
                                                    </label>
                                                </div>
                                            </div>

                                            <div class="col-md-3">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                                    <label class="form-check-label" for="flexRadioDefault1">
                                                        <div class="finalizar-compra">
                                                            <h2>Cartão de Débito</h2>
                                                        </div>
                                                    </label>
                                                </div>
                                            </div>

                                            <div class="col-md-3 ">

                                            </div>
                                        </div>
                                    </center>


                                    <div id="linha-horizontal">
                                        <br><br>
                                    </div>

                                    <section id="contact" class="contact">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="section-title">
                                                    <p>Dados do pagamento</p>
                                                    <h2>Não salvamos informações de pagamento</h2>
                                                </div>
                                            </div>
                                            <div class="txtLeft col-md-2">
                                            </div>
                                            <div class="txtLeft col-md-8">
                                                <label for="inputNumCartão" class="form-label">Número do cartão</label>
                                                <input autofocus type="text" minlength="19" maxlength="19" placeholder="Ex: 1234 1234 1234 1234" class="form-control" name="txtNumCartão" required id="txtNumCartão">
                                                <br>
                                            </div>
                                            <div class="txtLeft col-md-2">
                                            </div>
                                            <div class="txtLeft col-md-2">
                                            </div>
                                            <div class="txtLeft col-md-8">
                                                <label for="inputNomeCompleto" class="form-label">Nome Completo</label>
                                                <input autofocus type="text" placeholder="Nome como está impresso no cartão" class="form-control" name="txtNomeCompleto" required id="txtNomeCompleto">
                                                <br>
                                            </div>
                                            <div class="txtLeft col-md-2">
                                            </div>

                                            <div class="txtLeft col-md-2">
                                            </div>

                                            <div class="txtLeft col-md-4">
                                                <label for="inputValidade" class="form-label">Validade</label>
                                                <input autofocus type="text" minlength="5" maxlength="5" placeholder="Ex: 10/25" class="form-control" name="txtValidade" required id="txtValidade">
                                                <br>
                                            </div>

                                            <div class="txtLeft col-md-4">
                                                <label for="inputCódSegurança" class="form-label">Código de segurança</label>
                                                <input autofocus type="text" minlength="3" maxlength="3" placeholder="Ex: 111" class="form-control" name="txtCódSegurança" required id="txtCódSegurança">
                                                <br>
                                            </div>
                                            <div class="txtLeft col-md-2">
                                            </div>
                                            <div class="txtLeft col-md-2">
                                            </div>
                                            <div class="txtLeft col-md-8">
                                                <label for="inputParcelas" class="form-label">Número de parcelas</label>
                                                <select class="form-select" name="cboParcelas" id="cboParcelas" required value>
                                                    <option selected value="1x">1x Sem Juros</option>
                                                    <option value="2x">2x Sem Juros</option>
                                                    <option value="3x">3x Sem Juros</option>
                                                    <option value="4x">4x Sem Juros</option>
                                                </select>
                                            </div>
                                            <div class="txtLeft col-md-2">
                                            </div>
                                        </div>
                                    </section>



                                    <div class="php-email-form text-center col-12">
                                        <button type="submit" id="btnFinalizarCompra" class="btn btn-dark">Finalizar
                                            Compra</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </center>
                </div>
            </div>
        </center>
    </section><!-- End Contact Section -->
</x-app-layout>