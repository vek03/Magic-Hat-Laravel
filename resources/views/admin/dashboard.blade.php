<x-app-layout>
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex flex-column justify-content-end align-items-center">
      <div id="heroCarousel" class=" container-fluid  carousel carousel-fade" data-bs-ride="carousel">

        <!-- Slide unico -->

        <div class="carousel-inner">
          <img src="img/magichat/cortinanav.png" class="ratio imgteste">
          <div class="carousel-caption d-none d-md-block">
            <h1 class="magichat animate__animated animate__fadeInDown"><b>Olá,
              {{ Auth::user()->name }}! O que vamos fazer?
              </b></h1>
            <a class="btn-get-started animate__animated animate__fadeInUp scrollto" href="{{ route('admin.create-prod') }}">Cadastrar produto</a>
            <a class="btn-get-started animate__animated animate__fadeInUp scrollto" href="{{ route('admin.catalogo') }}">Produtos do catálogo</a>
          </div>
        </div>

      </div>
</x-app-layout>