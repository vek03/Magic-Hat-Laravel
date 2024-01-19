<section class="gradient-custom">
    <div class="h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="">
                <div class="card bg-dark text-white" style="border-radius: 1rem;">
                    <div class="card-body p-5 text-left">

                        <div class="mb-md-5 mt-md-4 pb-5">
                            <h2 class="fw-bold mb-2 text-uppercase">Atualizar Senha</h2>

                            <form id="send-verification" method="post" action="{{ route('password.update') }}}">
                                @csrf
                            </form>

                            <form method="POST" action="{{ route('password.update') }}">
                                @csrf
                                @method('put')

                                <div class="form-outline form-white mb-4">
                                    <label class="form-label text-left" for="update_password_current_password">Senha Atual</label>
                                    <div style="float:right;">
                                        <label for="checkbox3" class="form-label test">Exibir senha</label>
                                        <input name="checkbox3" id="checkbox3" class="form-check-input mt-0" type="checkbox" aria-label="Checkbox for following text input">
                                    </div>
                                    <input type="password" id="update_password_current_password" name="current_password" required value class="form-control" />
                                    <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2" />
                                </div>

                                <div class="row g-3">
                                    <div class="col">
                                        <div class="form-outline form-white mb-4">
                                            <label class="form-label text-left" for="update_password_password">Senha</label>
                                            <div style="float:right;">
                                                <label for="checkbox1" class="form-label test">Exibir senha</label>
                                                <input name="checkbox1" id="checkbox1" class="form-check-input mt-0" type="checkbox" aria-label="Checkbox for following text input">
                                            </div>
                                            <input type="password" id="update_password_password" name="password" required value class="form-control" />
                                            <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2" />
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-outline form-white mb-4">
                                            <label class="form-label text-left" for="update_password_password_confirmation">Confirmar Senha</label>
                                            <div style="float:right;">
                                                <label for="checkbox2" class="form-label test">Exibir senha</label>
                                                <input name="checkbox2" id="checkbox2" class="form-check-input mt-0" type="checkbox" aria-label="Checkbox for following text input">
                                            </div>
                                            <input type="password" id="update_password_password_confirmation" name="password_confirmation" required value class="form-control" />
                                            <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-2" />
                                        </div>
                                    </div>
                                </div>

                                <br>

                                <div class="flex items-center gap-4">
                                    <button class="btn btn-outline-light btn-lg px-5" type="submit">Atualizar Senha</button>

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