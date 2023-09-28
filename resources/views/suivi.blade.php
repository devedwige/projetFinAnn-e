<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fiche de consultation</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <style>
        /* Ajout de bordures personnalisées */
        .custom-border {
            border: 2px solid #007bff; /* Couleur de la bordure */
            border-radius: 5px; /* Coins arrondis */
        }
    </style>
</head>

<body>
    <header class="bg-primary text-white p-5 text-center d-flex align-items-center justify-content-between">
        <a href="{{ route('service') }}" class="btn btn-light">
            <i class="fas fa-arrow-left"></i> Retour
        </a>
        <h1>Fiche de suivi de croissance</h1>
    </header><br>

    <div class="container">
{{-- <section class="container my-5 d-flex justify-content-center background-image-container"> --}}
    <form action=" {{ route('suivi.save') }}" method="POST" class="user">
        @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
        @csrf
         <div class="row">
            <div class="col-md-6 mx-auto">
                <div class="form-group">
                    <label for="code" class="font-weight-bold text-dark">Code :</label>
                    <input type="number" id="code" name="code" class="form-control" required placeholder="Veuillez mettre le code de six(6) reçu lors de l'inscription:">
                </div>
            </div>
        </div>
          <div class="row">
            <div class="col-md-6 mx-auto">
                <div class="form-group">
                    <label for="centre" class="font-weight-bold text-dark">Centre :</label>
                    <select id="centre" name="centre" class="form-control" required>
                        <option value="selectionner votre centre de santé">Sélectionnez votre centre de santé:</option>
                        <option value="CSPS sect5/KDG">CSPS sect5/KDG</option>
                        <option value="CSPS sect8/KDG">CSPS sect8/KDG</option>
                        <option value="CSPS sect9/KDG">CSPS sect9/KDG</option>
                        <option value="CSPS sect10/KDG">CSPS sect10/KDG</option>
                        <option value="CSPS sect2/KDG">CSPS sect2/KDG</option>
                        <option value="CSPS sect1/KDG">CSPS sect1/KDG</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 mx-auto">
                <div class="form-group">
                    <label for="niveau" class="font-weight-bold text-dark">Niveau :</label>
                    <input type="text" id="niveau" name="niveau" class="form-control" required placeholder="Veuillez écrire le niveau de suivi de l'enfant:">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 mx-auto">
                <div class="form-group">
                    <label for="poids" class="font-weight-bold text-dark">Poids :</label>
                    <input type="text" id="poids" name="poids" class="form-control" required placeholder="Veuillez écrire le poids de l'enfant:">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 mx-auto">
                <div class="form-group">
                    <label for="appreciation" class="font-weight-bold text-dark">Appréciation:</label>
                    <textarea id="appreciation" name="appreciation" class="form-control" required placeholder="Faites une appréciation du poids de l'enfant: "></textarea>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 mx-auto">
                <div class="form-group">
                    <label for="taille" class="font-weight-bold text-dark">Taille de l'enfant :</label>
                    <input type="text" id="taille" name="taille" class="form-control" required placeholder="Veuillez écrire la taille de l'enfant:">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 mx-auto">
                <div class="form-group">
                    <label for="appréciation1" class="font-weight-bold text-dark">Appréciation:</label>
                    <textarea id="appreciation1" name="appreciation1" class="form-control" required placeholder="Faites une appréciation de la taille de l'enfant: "></textarea>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 mx-auto">
                <div class="form-group">
                    <label for="autre" class="font-weight-bold text-dark">Autres:</label>
                    <textarea id="autre" name="autre" class="form-control" required placeholder="Veuillez écrire autres aspects de suivi de croissance:"></textarea>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 mx-auto">
                <div class="form-group">
                    <label for="appréciation2" class="font-weight-bold text-dark">Appréciation:</label>
                    <textarea id="appreciation2" name="appreciation2" class="form-control" required placeholder="Faites une appréciation de cet aspect de suivi: "></textarea>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 mx-auto">
                <div class="text-center"> <!-- Nouvelle div pour centrer le bouton -->
                    <button type="submit" class="btn btn-primary">Envoyer</button>
                </div>
            </div>
        </div>
    </form>
</div><br><br>
{{-- </section> --}}
<footer class="bg-primary text-white p-3 text-center">
    <p>&copy; 2023 Songre. Tous droits réservés.</p>
</footer>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script>
    $(document).ready(function(){
        $('#contactForm').submit(function(e){
            e.preventDefault();
            var nom = $('#nom').val();
            var prenom = $('#prenom').val();
            var date = $('#date').val();
            var phone = $('#phone').val();
            var message = $('#message').val();
            alert('Consultation réussi');
            this.reset();
        });
    });
</script>
</body>

</html>
