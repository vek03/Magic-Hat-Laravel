<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Nome')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- LastName -->
        <div class="mt-4">
            <x-input-label for="lastname" :value="__('Sobrenome')" />
            <x-text-input id="lastname" class="block mt-1 w-full" type="text" name="lastname" :value="old('lastname')" required autocomplete="Silva" />
            <x-input-error :messages="$errors->get('lastname')" class="mt-2" />
        </div>

        <!-- CEP -->
        <div class="mt-4">
            <x-input-label for="cep" :value="__('CEP')" />
            <x-text-input id="cep" class="block mt-1 w-full" maxlength="9" type="text" name="cep" :value="old('cep')" required autocomplete="08485-200" />
            <x-input-error :messages="$errors->get('cep')" class="mt-2" />
        </div>

        <!-- Address -->
        <div class="mt-4">
            <x-input-label for="address" :value="__('Endereço')" />
            <x-text-input id="address" class="block mt-1 w-full" type="text" readonly name="address" :value="old('address')" required autocomplete="Rua Dom Marcos Barbosa" />
            <x-input-error :messages="$errors->get('address')" class="mt-2" />
        </div>

        <!-- Number -->
        <div class="mt-4">
            <x-input-label for="number" :value="__('Número')" />
            <x-text-input id="number" class="block mt-1 w-full" type="number" name="number" :value="old('number')" required autocomplete="266" />
            <x-input-error :messages="$errors->get('number')" class="mt-2" />
        </div>

        <!-- Extra -->
        <div class="mt-4">
            <x-input-label for="extra" :value="__('Complemento')" />
            <x-text-input id="extra" class="block mt-1 w-full" type="text" name="extra" :value="old('extra')" required autocomplete="Apto 21A" />
            <x-input-error :messages="$errors->get('extra')" class="mt-2" />
        </div>

        <!-- City -->
        <div class="mt-4">
            <x-input-label for="city" :value="__('Cidade')" />
            <x-text-input id="city" class="block mt-1 w-full" type="text" readonly name="city" :value="old('city')" required autocomplete="São Paulo" />
            <x-input-error :messages="$errors->get('city')" class="mt-2" />
        </div>

        <!-- District -->
        <div class="mt-4">
            <x-input-label for="district" :value="__('Bairro')" />
            <x-text-input id="district" class="block mt-1 w-full" type="text" readonly name="district" :value="old('district')" required autocomplete="Conjunto Habitacional Santa Etelvina II" />
            <x-input-error :messages="$errors->get('district')" class="mt-2" />
        </div>

        <!-- State -->
        <div class="mt-4">
            <x-input-label for="state" :value="__('Sobrenome')" />
            <x-text-input id="state" class="block mt-1 w-full" type="text" readonly name="state" :value="old('state')" required autocomplete="SP" />
            <x-input-error :messages="$errors->get('state')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Senha')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <button type="button" class="absolute top-[60.5%] sm:right-[34%] right-[110%]  p-3 text-sm font-medium text-black">
                <svg id="ver_senha" type="button" onclick="mostrarSenha('password', 'eye')" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="white" class="w-6 h-6  cursor-pointer">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
                    <path id="eye" stroke-linecap="round" stroke-linejoin="round" d="M3.98 8.223A10.477 10.477 0 001.934 12C3.226 16.338 7.244 19.5 12 19.5c.993 0 1.953-.138 2.863-.395M6.228 6.228A10.45 10.45 0 0112 4.5c4.756 0 8.773 3.162 10.065 7.498a10.523 10.523 0 01-4.293 5.774M6.228 6.228L3 3m3.228 3.228l3.65 3.65m7.894 7.894L21 21m-3.228-3.228l-3.65-3.65m0 0a3 3 0 10-4.243-4.243m4.242 4.242L9.88 9.88"/>
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                </svg>
            </button>

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirme a Senha')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <button type="button" class="absolute top-[70.5%] sm:right-[34%] right-[110%]  p-3 text-sm font-medium text-black">
                <svg id="ver_senha" type="button" onclick="mostrarSenha('password_confirmation', 'eye2')" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="white" class="w-6 h-6  cursor-pointer">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
                    <path id="eye2" stroke-linecap="round" stroke-linejoin="round" d="M3.98 8.223A10.477 10.477 0 001.934 12C3.226 16.338 7.244 19.5 12 19.5c.993 0 1.953-.138 2.863-.395M6.228 6.228A10.45 10.45 0 0112 4.5c4.756 0 8.773 3.162 10.065 7.498a10.523 10.523 0 01-4.293 5.774M6.228 6.228L3 3m3.228 3.228l3.65 3.65m7.894 7.894L21 21m-3.228-3.228l-3.65-3.65m0 0a3 3 0 10-4.243-4.243m4.242 4.242L9.88 9.88"/>
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                </svg>
            </button>

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="txtLeft col-md-6">
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

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                {{ __('Já tem uma conta?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Registrar') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>