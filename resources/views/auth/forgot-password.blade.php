<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <section class="gradient-custom">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
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

                                <h2 class="fw-bold mb-2 text-uppercase">Forgot Password</h2>
                                <p class="text-white-50 mb-5">Please enter your email!</p>

                                <form method="POST" action="{{ route('password.email') }}">
                                    @csrf
                                    <div class="form-outline form-white mb-4">
                                        <label class="form-label text-left" for="email">Email</label>
                                        <input type="email" id="email" name="email" value="{{ old('email') }}" require class="form-control" />
                                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                    </div>

                                    <br>

                                    <button class="btn btn-outline-light btn-lg px-5" type="submit">Email Password Reset Link</button>
                                </form>
                            </div>

                            <div>
                                <p class="mb-0">Don't have an account? <a href="{{ route('register') }}" class="text-white-50 fw-bold">Sign Up</a></p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-guest-layout>
