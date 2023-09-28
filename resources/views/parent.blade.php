<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
    <!-- Inclure les fichiers Bootstrap -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <ul class="nav nav-tabs card-header-tabs" id="myTab" role="tablist">
                            <li class="nav-item mt-3">
                                <a class="nav-link" href="{{ route('welcome') }}">
                                    <i class="fas fa-arrow-left"></i> Retour
                                </a>
                            </li>
                            <li class="nav-item ml-auto"> <!-- Ajout de la classe ml-auto -->
                                <a class="nav-link" id="login-tab" data-toggle="tab" href="#login" role="tab" aria-controls="login" aria-selected="false">
                                    <h1>Inscription</h1>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                       {{-- @if ($message = Session::get('success'))
                            <h6>
                                <a href="">{{$message}} !!! Veuillez vous connecter</a>
                            </h6>
                       @endif --}}
                        <div class="tab-content" id="myTabContent">
                            <!-- Formulaire d'Inscription -->
                            <div class="tab-pane fade show active" id="registration" role="tabpanel" aria-labelledby="registration-tab">
                                {{-- <h2>Inscription</h2> --}}
                                <form action="{{route('parent.save')}}" method="POST" class="user">
                                    @error('nom')
                                    <span class="text-danger">{{ $message }}</span>
                                 @enderror
                                    @csrf
                                    <div class="form-group">
                                        <label for="nom">Nom</label>
                                        <input type="text" class="form-control" id="nom" name="nom" placeholder="Veuillez entrer votre nom:">
                                    </div>
                                    <div class="form-group">
                                        <label for="prenom">Prenom</label>
                                        <input type="text" class="form-control" id="prenom" name="prenom" placeholder="Veuillez entrer votre prenom:">
                                    </div>
                                    <div class="form-group">
                                        <label for="matricule">Profession</label>
                                        <input type="text" class="form-control" id="profession" name="profession" placeholder="Veuillez entrer votre profession:">
                                    </div>
                                    <div class="form-group">
                                        <label for="centre">Ville</label>
                                        <input type="text" class="form-control" id="ville" name="ville" placeholder="Veuillez entrer votre ville de résidence:">
                                    </div>
                                     <div class="form-group">
                                        <label for="code">Code</label>
                                        <input type="mumber" class="form-control" id="code" name="code" placeholder="Veuillez entrer le code de six chiffres de votre enfant:">
                                    </div>
                                    <div class="form-group">
                                        <label for="phone">Phone</label>
                                        <input type="phone" class="form-control" id="phone" name="phone" placeholder="Veuillez entrer votre numéro de téléphone:">
                                    </div>
                                    <div class="form-group">
                                        <label for="password">Mot de passe</label>
                                        <input type="password" class="form-control" id="password" name="password" placeholder="Veuillez entrer votre mot de passe mémorable">
                                    </div>
                                    <button type="submit" class="btn btn-primary">S'inscrire</button>
                                </form>
                                {{-- <p class="mt-3">Vous avez déjà un compte ? <a href="#login" data-toggle="tab" role="tab" aria-controls="login" aria-selected="false">Connectez-vous</a></p> --}}
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Inclure les fichiers JavaScript de Bootstrap et jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
