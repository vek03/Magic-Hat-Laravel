<!-- ======= Header ======= -->
<header id="header" class="d-flex">
    <div class="container d-flex align-items-center justify-content-between">

        <div class="logo">
            <h1><img src="img/magichat/logo.png">
            <a href="index.php">Magic Hat</a></img>
            </h1>
        </div>

        <nav id="navbar" class="navbar">
            <ul>
            <li><a class="nav-link scrollto active" href="{{ route('home') }}">Home</a></li>
            <li><a class="nav-link scrollto" href="{{ route('catalogo') }}">Brinquedos</a></li>
            <li><a class="nav-link scrollto" href="{{ route('fale-conosco') }}">Fale conosco</a></li>
            <li class="dropdown"><a href="#"><span>
                    <ion-icon id="person" name="person"></ion-icon>
                </span></a>
                <ul>
                <?php
                    if(false){
                ?>
                
                <li><a href="editarinfo.php">Editar informações</a></li>
                <li><a href="model/destroy.php?id=1">Sair da conta</a></li>

                <?php
                    }else{
                ?>

                <li><a href="{{ route('login') }}">Login</a></li>
                <li><a href="{{ route('register') }}">Cadastre-se</a></li>

                <?php
                    }
                ?>
                </ul>
            </li>
            </ul>

            <i class="bi bi-list mobile-nav-toggle"></i>

            <button id="cart" class="navbar-toggler" type="button" data-bs-toggle="modal" onclick="">
            <span>
                <ion-icon id="cart" name="cart"></ion-icon>
            </span>
            </button>
        </nav><!-- .navbar -->
    </div>
</header><!-- End Header -->

<!-- ====== Pesquisa ======= -->
<div id="header">
    <div class="col">
    <nav class="navbar  container text-center">
        <div class="col order-first"></div>
        <div class="col-9">

        <form method="post" action="search.php" id="formPesq" name="formPesq">
            <div class="input-group">
            <input autofocus type="text" placeholder="Com o que vamos brincar?" class="form-control" name="txtPesquisa" required id="txtPesquisa">
            <button style="background-color: #ED4442;" class="btn btn-outline-light" type="submit">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                </svg>
            </button>
            </div>
        </form>

        </div>
        <div class="col order-last"></div>
    </nav>
    </div>
</div>