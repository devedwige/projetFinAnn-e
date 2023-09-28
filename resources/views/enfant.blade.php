<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire d'Inscription</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #007bff;
            background-image: url('data:image/svg+xml, %3Csvg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewBox="0 0 8 8"%3E%3Cpath fill-opacity="0.5" d="M0 0h8v8H0z" fill="%23ffffff" /%3E%3C/svg%3E');
        }
        .form-container {
            background-color: rgba(255, 255, 255, 0.8);
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.1);
        }
        .form-group {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="form-container">
                <h1 class="mb-4 text-center">Inscription de l'enfant</h1>

                <form action="{{ route('enfant.save') }}" method="POST" class="user">
                    @csrf
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <label for="nom">Nom :</label>
                            <input type="text" id="nom" name="nom" class="form-control" required placeholder="Votre nom">
                        </div>

                        <div class="col-md-6 form-group">
                            <label for="prenom">Prénom :</label>
                            <input type="text" id="prenom" name="prenom" class="form-control" required placeholder="Votre prénom">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <label for="sexe">Sexe :</label>
                            <select id="sexe" name="sexe" class="form-control" required>
                                <option value="" disabled selected>Sélectionnez le sexe de l'enfant</option>
                                <option value="fille">Fille</option>
                                <option value="garcon">Garçon</option>
                            </select>
                        </div>

                        <div class="col-md-6 form-group">
                            <label for="date_naissance">Date de naissance :</label>
                            <input type="date" id="date" name="date_naissance" class="form-control" required placeholder="Date de naissance de l'enfant">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="centre">Centre de santé :</label>
                        <select id="centre" name="centre" class="form-control" required>
                            <option value="" disabled selected>Sélectionnez le centre de santé:</option>
                            <option value="CSPS sect5/KDG">CSPS sect5/KDG</option>
                            <option value="CSPS sect8/KDG ">CSPS sect8/KDG</option>
                            <option value="CSPS sect9/KDG">CSPS sect9/KDG</option>
                            <option value="CSPS sect10/KDG ">CSPS sect10/KDG</option>
                            <!-- Ajoutez ici les autres options selon vos besoins -->
                        </select>
                    </div>


                    <div class="form-group">
                        <label for="nom_prenom_pere">Nom & Prenom du père:</label>
                        <input type="text" id="nom_prenom_pere" name="nom_prenom_pere" class="form-control" required placeholder="Veuillez mettre le nom et prénom du père">
                    </div>
                    <div class="form-group">
                        <label for="nom_prenom_mere">Nom & Prenom de la maman:</label>
                        <input type="text" id="nom_prenom_mere" name="nom_prenom_mere" class="form-control" required placeholder="Veuillez mettre le nom et prénom de la mère">
                    </div>
                    <div class="form-group">
                        <label for="phone">Numero de Téléphone:</label>
                        <div class="input-group">
                            <input type="number" id="phone" name="phone" class="form-control" required placeholder="Veuillez entrer le(s) numéro(s) des parents">
                            @error('phone')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">S'inscrire</button>
                </form>
            </div>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script>
    // Ajout d'une vérification JavaScript (
