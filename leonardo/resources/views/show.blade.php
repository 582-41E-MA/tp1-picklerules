<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Robot show</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{ asset('css/styles.css') }}" rel="stylesheet" />
    </head>
    <body>
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container px-4 px-lg-5">

                <a class="navbar-brand" href="#!">Léonardo</a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="/">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="#!">About</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Shop</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#!">All Products</a></li>
                                <li><hr class="dropdown-divider" /></li>
                                <li><a class="dropdown-item" href="#!">Popular Items</a></li>
                                <li><a class="dropdown-item" href="#!">New Arrivals</a></li>
                            </ul>
                        </li>
                    </ul>
                    <form class="d-flex">
                        <button class="btn btn-outline-dark" type="submit">
                            <i class="bi-cart-fill me-1"></i>
                            Cart
                            <span class="badge bg-dark text-white ms-1 rounded-pill">0</span>
                        </button>
                    </form>
                </div>
            </div>
        </nav>

        <!-- Product section-->
        <section class="py-5">
    <div class="container px-4 px-lg-5 my-5">
        <div class="row gx-4 gx-lg-5 align-items-center">
            <div class="col-md-6">
                <!-- Utilise l'attribut image_path du produit pour obtenir l'image -->
                <img class="card-img-top mb-5 mb-md-0" src="{{ asset($produit->image_path) }}" alt="{{ $produit->nom_produit }}" />
            </div>
            <div class="col-md-6">
                <!-- Utilise les attributs du produit comme le SKU, le nom, et le prix -->
                
                <h1 class="display-5 fw-bolder">{{ $produit->nom_produit }}</h1>
                <p class="">{{ $produit->fabricant }}</p>
                <div class="fs-5 mb-5">
                    <!-- Affiche l'ancien prix et le nouveau prix si disponible -->
                    @if ($produit->ancien_prix)
                        <span class="text-decoration-line-through">${{ number_format($produit->ancien_prix, 2) }}</span>
                    @endif
                    <span>${{ number_format($produit->prix, 2) }}</span>
                </div>
                <!-- Utilise la description du produit -->
                <p class="lead">{{ $produit->description }}</p>
                <p class=""><span><strong>Fonctionnalités </strong></span>: {{ $produit->fonctionnalites }}</p>
                <p class=""><span><strong>Matériaux </strong></span> : {{ $produit->materiaux }}</p>
                <p class=""><span><strong>Technologie </strong></span> : {{ $produit->technologie }}</p>
                <p class=""><span><strong>Certifications </strong></span>:  {{ $produit->certifications }}</p>
            
              

             
                <!-- Formulaire pour ajouter le produit au panier -->
                <form class="d-flex"  method="POST">
                    @csrf
                    <input type="hidden" name="produit_id" value="{{ $produit->id }}">
                    <input class="form-control text-center me-3" id="inputQuantity" name="quantity" type="number" value="1" style="max-width: 3rem" />
                    <button class="btn btn-outline-dark flex-shrink-0" type="submit">
                        <i class="bi-cart-fill me-1"></i>
                       Ajouter au panier
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>







        <!-- Related items section-->
        <section class="py-5 bg-light">

    

        </section>

        <!-- Footer-->
        <footer class="py-5 bg-dark">
            <div class="container"><p class="m-0 text-center text-white">Copyright &copy; Léonardo Inovation inc. 2023</p></div>

        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="{{ asset('js/scripts.js') }}"></script>
    </body>
</html>