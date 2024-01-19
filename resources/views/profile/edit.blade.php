<x-app-layout>
    <x-slot name="header">
        <div class="section-title text-center">
            <p>Edite e visualize as suas informações</p>
            <h2>Editar Informações</h2>
        </div>
    </x-slot>

    <div class="">
            <div class="p-4 sm:p-8 bg-white bg-gray-800 shadow sm:rounded-lg">
                <div class="">
                    @include('profile.partials.update-profile-information-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white bg-gray-800 shadow sm:rounded-lg">
                <div class="">
                    @include('profile.partials.update-password-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white bg-gray-800 shadow sm:rounded-lg">
                <div class="">
                    @include('profile.partials.delete-user-form')
                </div>
            </div>
    </div>
</x-app-layout>

<!-- Template Main JS File -->
<script src="js/pass1.js"></script>
<script src="js/pass2.js"></script>
<script src="js/pass3.js"></script>
<script src="js/pass4.js"></script>