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
 <section id="hero3" class="d-flex align-items-center">
    <div class="container mb-5">
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
                        <div class="tab-content" id="myTabContent">
                            <!-- Formulaire d'Inscription -->
                            <div class="tab-pane fade show active" id="registration" role="tabpanel" aria-labelledby="registration-tab">
                                {{-- <h2>Inscription</h2> --}}
                                <form action="{{ route('register.save') }}" method="POST" class="user">
                                    @csrf
                                    <div class="form-group">
                                        <label for="nom">Nom</label>
                                        <input type="text" class="form-control" id="nom" name="nom" placeholder="Veuillez entrer votre nom:" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="prenom">Prenom</label>
                                        <input type="text" class="form-control" id="prenom" name="prenom" placeholder="Veuillez entrer votre prenom:" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="matricule">Matricule</label>
                                        <input type="text" class="form-control" id="matricule" name="matricule" placeholder="Veuillez entrer votre matricule:" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="centre">Centre de santé</label>
                                        <select class="form-control" id="centre" name="centre" required>
                                            <option value="centre" disabled selected>Veuillez choisir votre centre de santé:</option>
                                            <option value="centre">CSPS sect 9/KDG</option>
                                            <option value="centre">CSPS sect 10/KDG</option>
                                            <option value="centre">CSPS sect 8/KDG</option>
                                            <option value="centre">CSPS sect 5/KDG</option>
                                            <option value="centre">CHR/KDG</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="phone">Téléphone</label>
                                        <input type="phone" class="form-control" id="phone" name="phone" placeholder="Veuillez entrer votre numéro de téléphone:" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="password">Mot de passe</label>
                                        <input type="password" class="form-control" id="password" name="password" placeholder="Veuillez entrer votre mot de passe à ne pas oublier:" required>
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
</section>

<script>
    document.getElementById('registerForm').addEventListener('submit', function(event) {
        var inputs = this.querySelectorAll('input[required]');
        var valid = true;

        inputs.forEach(function(input) {
            if (input.value.trim() === '') {
                valid = false;
            }
        });

        if (!valid) {
            event.preventDefault();
            alert('Veuillez remplir tous les champs.');
        }
    });
    </script>

    <!-- Inclure les fichiers JavaScript de Bootstrap et jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
