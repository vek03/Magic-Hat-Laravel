<x-guest-layout>
    <section class="gradient-custom">
        <div class="container py-5 ">
            <div class="row d-flex justify-content-center align-items-center ">
                <div class="col-6 col-md-6 col-lg-6 col-xl-6">
                    <div class="card bg-dark text-white" style="border-radius: 1rem;">
                        <div class="card-body p-5 text-left">

                            <div class="mb-md-5 mt-md-4 pb-5">
                                <div class="logo text-center">
                                    <a href="{{ route('home') }}">
                                        <img style="width: 35%; height:35%;" src="img/magichat/logo.png"></img>
                                    </a>
                                </div>

                                <br>
                                
                                <h2 class="fw-bold mb-2 text-uppercase">Login</h2>
                                <p class="text-white-50 mb-5">Please enter your login and password!</p>

                                <form method="POST" action="{{ route('password.store') }}">
                                    @csrf

                                    <!-- Password Reset Token -->
                                    <input type="hidden" name="token" value="{{ $request->route('token') }}">

                                    <div class="form-outline form-white mb-4">
                                        <label class="form-label text-left" for="email">Email</label>
                                        <input type="email" id="email" name="email" require value="{{ old('email') }}" class="form-control" />
                                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                    </div>

                                    <div class="form-outline form-white mb-4">
                                        <label class="form-label" for="password">Password</label>
                                        <div style="float:right;">
                                            <label for="checkbox1" class="form-label test">Exibir senha</label>
                                            <input name="checkbox1" id="checkbox1" class="form-check-input mt-0" type="checkbox" aria-label="Checkbox for following text input">
                                        </div>
                                        <input type="password" id="password" name="password" require class="form-control" />
                                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                    </div>

                                    <div class="form-outline form-white mb-4">
                                        <label class="form-label" for="password_confirmation">Password Confirmation</label>
                                        <div style="float:right;">
                                            <label for="checkbox1" class="form-label test">Exibir senha</label>
                                            <input name="checkbox1" id="checkbox1" class="form-check-input mt-0" type="checkbox" aria-label="Checkbox for following text input">
                                        </div>
                                        <input type="password" id="password_confirmation" name="password_confirmation" require class="form-control" />
                                        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                                    </div>

                                    <br>

                                    <button class="btn btn-outline-light btn-lg px-5" type="submit">Reset Password</button>
                                </form>
                            </div>

                            <div>
                                <p class="">Don't have an account? <a href="{{ route('register') }}" class="text-white-50 fw-bold">Sign Up</a></p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-guest-layout>

<!-- Template Main JS File -->
<script src="js/pass1.js"></script>
<script src="js/pass2.js"></script>