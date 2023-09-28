{{-- <!DOCTYPE html>
<html>
<head>
    <title>Statistiques</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlw1jLqGIwV0HJl2ylKGmneLbBzXNJZQqKzltqzshUQJ5TrKb9SKKlBjDJDEvM" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" rel="stylesheet" integrity="sha384-oAmi+X3tde6T2l9x0aUui4NZ7sGQNyP0rY3Gts11YDQLjjh9E6auP6W0OpFLZPDW" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-4">
        <h1>Statistiques</h1>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Enfants Inscrits</h5>
                <p class="card-text">Nombre d'enfants inscrits : {{ $totalEnfantsInscrits }}</p>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Enfants Vaccinés</h5>
                        <p class="card-text">Nombre d'enfants vaccinés : {{ $enfantsVaccines }}</p>
                    </div>
                </div>
            </div>

            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Enfants Suivis</h5>
                        <p class="card-text">Nombre d'enfants suivis :
                            {{ $enfantsSuivis }}
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-4">
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Enfants Consultés</h5>
                        <p class="card-text">Nombre d'enfants consultés :
                              {{ $enfantsConsultes }}
                            </p>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Statistiques</h5>
                    @if($totalEnfantsInscrits > 0)
                        <p class="card-text">Pourcentage d'enfants vaccinés : {{ ($enfantsVaccines / $totalEnfantsInscrits) * 100 }}%</p>
                    @else
                        <p class="card-text">Il n'y a pas d'enfants inscrits.</p>
                    @endif
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Statistiques</h5>
                    @if($totalEnfantsInscrits > 0)
                        <p class="card-text">Pourcentage d'enfants suivis : {{ ($enfantsSuivis / $totalEnfantsInscrits) * 100 }}%</p>
                    @else
                        <p class="card-text">Il n'y a pas d'enfants inscrits.</p>
                    @endif
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Statistiques</h5>
                    @if($totalEnfantsInscrits > 0)
                        <p class="card-text">Pourcentage d'enfants consultés : {{ ($enfantsConsultes / $totalEnfantsInscrits) * 100 }}%</p>
                    @else
                        <p class="card-text">Il n'y a pas d'enfants inscrits.</p>
                    @endif
                </div>
            </div>


            {{-- {{-- <div class="col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Enfants Ayant Fait une Consultation</h5>
                        <p class="card-text">Nombre d'enfants ayant fait une consultation :
                              {{ $enfantsAvecConsultation }}
                            </p>
                    </div>
                </div>
            </div> --}}
        {{-- </div> --}}
    {{-- </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-oAmi+X3tde6T2l9x0aUui4NZ7sGQNyP0rY3Gts11YDQLjjh9E6auP6W0OpFLZPDW" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-oAmi+X3tde6T2l9x0aUui4NZ7sGQNyP0rY3Gts11YDQLjjh9E6auP6W0OpFLZPDW" crossorigin="anonymous"></script>
</body>
</html> --}}

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
                <h1 class="mb-4 text-center">Les différentes statistiques</h1>
                <form action="" method="POST" class="user">
                    @csrf
                    <div class="form-group">
                        <label for="nombre_inscrits">Le nombre d'enfants inscrits:</label>
                        <input type="text" id="nombre_inscrits" name="nombre_inscrits" class="form-control" value="{{ $totalEnfantsInscrits }}" readonly>
                    </div>

                    <div class="row">
                        <div class="col-md-6 form-group">
                            <label for="nom">Le nombre d'enfant vaccinés:</label>
                            <input type="text" id="nombre_vaccinés" name="nombre_vaccinés" class="form-control" value="{{ $enfantsVaccines }}" readonly>
                        </div>

                        <div class="col-md-6 form-group">
                            <label for="prenom">% des enfants vaccinés:</label>
                            <input type="text" id="pourcentage_vaccinés" name="pourcentage_vaccinés" class="form-control" value=" {{ ($enfantsVaccines / $totalEnfantsInscrits) * 100 }}%" readonly>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <label for="nom">Le nombre d'enfant suivis:</label>
                            <input type="text" id="nombre_vaccinés" name="nombre_vaccinés" class="form-control" value="{{ $enfantsSuivis }}" readonly>
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="prenom">% des enfants suivis:</label>
                            <input type="text" id="pourcentage_vaccinés" name="pourcentage_vaccinés" class="form-control" value=" {{ ($enfantsSuivis / $totalEnfantsInscrits) * 100 }}%" readonly>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 form-group">
                            <label for="nom">Le nombre d'enfant consultés:</label>
                            <input type="text" id="nombre_vaccinés" name="nombre_vaccinés" class="form-control" value="{{ $enfantsConsultes }}" readonly>
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="prenom">% des enfants consultés:</label>
                            <input type="text" id="pourcentage_vaccinés" name="pourcentage_vaccinés" class="form-control" value=" {{ ($enfantsConsultes / $totalEnfantsInscrits) * 100 }}%" readonly>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <label for="nom">Le nombre d'enfant consultés:</label>
                            <input type="text" id="nombre_vaccinés" name="nombre_vaccinés" class="form-control" value="{{ $enfantsConsultes }}" readonly>
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="prenom">% des enfants consultés:</label>
                            <input type="text" id="pourcentage_vaccinés" name="pourcentage_vaccinés" class="form-control" value=" {{ ($enfantsConsultes / $totalEnfantsInscrits) * 100 }}%" readonly>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <label for="nom">Le nombre ayant fait un rdv:</label>
                            <input type="text" id="nombre_vaccinés" name="nombre_vaccinés" class="form-control" value="{{ $enfantsRendes }}" readonly>
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="prenom">% des enfants ayant fait un rdv:</label>
                            <input type="text" id="pourcentage_vaccinés" name="pourcentage_vaccinés" class="form-control" value=" {{ ($enfantsRendes / $totalEnfantsInscrits) * 100 }}%" readonly>
                        </div>
                    </div>





                    {{-- <button type="submit" class="btn btn-primary">S'inscrire</button> --}}
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


