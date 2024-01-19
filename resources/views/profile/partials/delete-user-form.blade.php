<section class="gradient-custom">
    <div class="h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="">
                <div class="card bg-dark text-white" style="border-radius: 1rem;">
                    <div class="card-body p-5 text-left">

                        <div class="mb-md-5 mt-md-4 pb-5">
                            <h2 class="fw-bold mb-2 text-uppercase">Deletar Conta</h2>
                            <p class="text-white-50 mb-5">Once your account is deleted, all of its resources and data will be permanently deleted. Before deleting your account, please download any data or information that you wish to retain.</p>

                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal">
                            Deletar Conta
                            </button>

                            <!-- Modal -->
                            <div class="modal fade text-black" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <form method="post" action="{{ route('profile.destroy') }}" class="p-6">
                                            @csrf
                                            @method('delete')
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="deleteModalLabel">Are you sure you want to delete your account?</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                            Once your account is deleted, all of its resources and data will be permanently deleted. Please enter your password to confirm you would like to permanently delete your account.
                                            </div>
                                            <div class="modal-body">
                                                <div class="form-outline form-white mb-4">
                                                    <label class="form-label text-left" for="password">Senha Atual</label>
                                                    <div style="float:right;">
                                                        <label for="checkbox4" class="form-label test">Exibir senha</label>
                                                        <input name="checkbox4" id="checkbox4" class="form-check-input mt-0" type="checkbox" aria-label="Checkbox for following text input">
                                                    </div>
                                                    <input type="password" id="password" name="password" required value class="form-control" />
                                                    <x-input-error :messages="$errors->userDeletion->get('password')" class="mt-2" />
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                                                <button type="submit" class="btn btn-danger">Deletar Conta</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>