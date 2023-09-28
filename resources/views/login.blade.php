<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
    <!-- Inclure les fichiers Bootstrap -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body>
 <section id="hero4" class="d-flex align-items-center">
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                     @endif
                     <div class="card-header">
                        <ul class="nav nav-tabs card-header-tabs" id="myTab" role="tablist">
                            <li class="nav-item mt-3">
                                <a class="nav-link" href="{{ route('welcome') }}">
                                    <i class="fas fa-arrow-left"></i> Retour
                                </a>
                            </li>
                            <li class="nav-item ml-auto"> <!-- Ajout de la classe ml-auto -->
                                <a class="nav-link" id="login-tab" data-toggle="tab" href="#login" role="tab" aria-controls="login" aria-selected="false">
                                    <h1>Connexion</h1>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <div class="tab-content" id="myTabContent">
                            <!-- Formulaire d'Inscription -->
                            <div class="tab-pane fade show active" id="registration" role="tabpanel" aria-labelledby="registration-tab">
                                <h6>Veuillez ressaisir votre matricule et votre mot de passe memorable</h6>
                                <form action="{{ route('login.action') }}" method="POST" class="user">
                                    @csrf
                                    <div class="form-group">
                                        <label for="matricule">Matricule</label>
                                        <input type="text" class="form-control" id="matricule" name="matricule" placeholder="Entrer votre matricule:">
                                    </div>
                                    <div class="form-group">
                                        <label for="password">Mot de passe</label>
                                        <input type="password" class="form-control" id="password" name="password" placeholder="Entrer votre mot de passe:">
                                    </div>
                                    @if($errors->any())
                                    <div class="alert alert-danger">
                                        {{ $errors->first() }}
                                    </div>
                                @endif
                                    <button type="submit" class="btn btn-primary">Se connecter</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
    <!-- Inclure les fichiers JavaScript de Bootstrap et jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
