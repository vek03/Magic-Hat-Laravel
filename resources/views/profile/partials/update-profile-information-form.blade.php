<section class="gradient-custom">
    <div class="h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="">
                <div class="card bg-dark text-white" style="border-radius: 1rem;">
                    <div class="card-body p-5 text-left">

                        <div class="mb-md-5 mt-md-4 pb-5">
                            <h2 class="fw-bold mb-2 text-uppercase">Atualizar Informações do Perfil</h2>

                            <form id="send-verification" method="post" action="{{ route('verification.send') }}">
                                @csrf
                            </form>

                            <form method="POST" action="{{ route('update-profile') }}">
                                @csrf
                                @method('patch')

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

                                    @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                                        <div>
                                            <p class="text-sm mt-2 text-gray-800 dark:text-gray-200">
                                                {{ __('Your email address is unverified.') }}

                                                <button form="send-verification" class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800">
                                                    {{ __('Click here to re-send the verification email.') }}
                                                </button>
                                            </p>

                                            @if (session('status') === 'verification-link-sent')
                                                <p class="mt-2 font-medium text-sm text-green-600 dark:text-green-400">
                                                    {{ __('A new verification link has been sent to your email address.') }}
                                                </p>
                                            @endif
                                        </div>
                                    @endif
                                </div>

                                <br>

                                <div class="flex items-center gap-4">
                                    <button class="btn btn-outline-light btn-lg px-5" type="submit">Atualizar Dados</button>

                                    @if (session('status') === 'profile-updated')
                                        <p
                                            x-data="{ show: true }"
                                            x-show="show"
                                            x-transition
                                            x-init="setTimeout(() => show = false, 2000)"
                                            class="text-sm text-gray-600 dark:text-gray-400"
                                        >{{ __('Saved.') }}</p>
                                    @endif
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
