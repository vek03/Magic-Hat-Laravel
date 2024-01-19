<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <section class="gradient-custom">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-8 col-md-8 col-lg-8 col-xl-8">
                    <div class="card bg-dark text-white" style="border-radius: 1rem;">
                        <div class="card-body p-5 text-left">

                            <div class="mb-md-5 mt-md-4 pb-5">
                                <div class="logo text-center">
                                    <a href="{{ route('home') }}">
                                        <img style="width: 25%; height:25%;" src="img/magichat/logo.png"></img>
                                    </a>
                                </div>

                                <br>
                                <h2 class="fw-bold mb-2 text-uppercase">Registrar</h2>
                                <p class="text-white-50 mb-5">Please enter your informations!</p>

                                <form method="POST" action="{{ route('register') }}">
                                    @csrf
                                    <div class="row g-3">
                                        <div class="col">
                                            <div class="form-outline form-white mb-4">
                                                <label class="form-label text-left" for="name">Nome</label>
                                                <input type="text" id="name" name="name" value="{{ old('name') }}" required value class="form-control" />
                                                <x-input-error :messages="$errors->get('name')" class="mt-2" />
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-outline form-white mb-4">
                                                <label class="form-label text-left" for="lastname">Sobrenome</label>
                                                <input type="text" id="lastname" name="lastname" value="{{ old('lastname') }}" required value class="form-control" />
                                                <x-input-error :messages="$errors->get('lastname')" class="mt-2" />
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="row">
                                        <div class="col">
                                            <div class="form-outline form-white mb-4">
                                                <label for="category" class="form-label">Categoria que você mais gosta</label>
                                                <select class="form-select" name="category" id="category" required value>
                                                    <option value="1">Princesas</option>
                                                    <option value="2">Carrinhos</option>
                                                    <option value="3">Bonecos</option>
                                                    <option value="4">Heróis</option>
                                                    <option selected value="5">Jogos</option>
                                                    <option value="6">Bonecas</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-outline form-white mb-4">
                                                <label class="form-label text-left" for="cep">CEP</label>
                                                <input type="text" id="cep" name="cep" value="{{ old('cep') }}" required value class="form-control" />
                                                <x-input-error :messages="$errors->get('cep')" class="mt-2" />
                                            </div>
                                            
                                        </div>
                                    </div>

                                    <div class="form-outline form-white mb-4">
                                        <label class="form-label text-left" for="address">Endereço</label>
                                        <input type="text" id="address" name="address" value="{{ old('address') }}" readonly required value class="form-control" />
                                        <x-input-error :messages="$errors->get('address')" class="mt-2" />
                                    </div>
                                    
                                    <div class="row">
                                        <div class="col">
                                            <div class="form-outline form-white mb-4">
                                                <label class="form-label text-left" for="number">Número</label>
                                                <input type="number" id="number" name="number" value="{{ old('number') }}" required value class="form-control" />
                                                <x-input-error :messages="$errors->get('number')" class="mt-2" />
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-outline form-white mb-4">
                                                <label class="form-label text-left" for="extra">Complemento</label>
                                                <input type="text" id="extra" name="extra" value="{{ old('extra') }}" required value class="form-control" />
                                                <x-input-error :messages="$errors->get('extra')" class="mt-2" />
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-outline form-white mb-4">
                                                <label class="form-label text-left" for="state">Estado</label>
                                                <input type="text" id="state" name="state" value="{{ old('state') }}" readonly required value class="form-control" />
                                                <x-input-error :messages="$errors->get('state')" class="mt-2" />
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col">
                                            <div class="form-outline form-white mb-4">
                                                <label class="form-label text-left" for="district">Bairro</label>
                                                <input type="text" id="district" name="district" value="{{ old('district') }}" readonly required value class="form-control" />
                                                <x-input-error :messages="$errors->get('district')" class="mt-2" />
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-outline form-white mb-4">
                                                <label class="form-label text-left" for="city">Cidade</label>
                                                <input type="text" id="city" name="city" value="{{ old('city') }}" readonly required value class="form-control" />
                                                <x-input-error :messages="$errors->get('city')" class="mt-2" />
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-outline form-white mb-4">
                                        <label class="form-label text-left" for="email">Email</label>
                                        <input type="email" id="email" name="email" value="{{ old('email') }}" required value class="form-control" />
                                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                    </div>

                                    <div class="row">
                                        <div class="col">
                                            <div class="form-outline form-white mb-4">
                                                <label class="form-label" for="password">Password</label>
                                                <div style="float:right;">
                                                    <label for="checkbox1" class="form-label test">Exibir senha</label>
                                                    <input name="checkbox1" id="checkbox1" class="form-check-input mt-0" type="checkbox" aria-label="Checkbox for following text input">
                                                </div>
                                                <input type="password" id="password" required value name="password" class="form-control" />
                                                <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-outline form-white mb-4">
                                                <label class="form-label" for="password_confirmation">Password Confirmation</label>
                                                <div style="float:right;">
                                                    <label for="checkbox2" class="form-label test">Exibir senha</label>
                                                    <input name="checkbox2" id="checkbox2" class="form-check-input mt-0" type="checkbox" aria-label="Checkbox for following text input">
                                                </div>
                                                <input type="password" id="password_confirmation" name="password_confirmation" required value class="form-control" />
                                                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                                            </div>
                                        </div>
                                    </div>

                                    <br>

                                    <button class="btn btn-outline-light btn-lg px-5" type="submit">Registrar</button>
                                </form>
                            </div>

                            <div>
                                <p class="mb-0">Already have an account? <a href="{{ route('login') }}" class="text-white-50 fw-bold">Sign In</a></p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-guest-layout>

<!-- Template Main JS File -->
<script type="module" src="js/form.js"></script>
<script src="js/pass1.js"></script>
<script src="js/pass2.js"></script>