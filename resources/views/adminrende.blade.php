<!DOCTYPE html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Panel d'administration</title>

    <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/@mdi/font/css/materialdesignicons.min.css" rel="stylesheet">

    <link rel="stylesheet" href="assets/css/style.css">

    <link rel="shortcut icon" href="assets/images/favicon.ico" />
  </head>
  <body>
    <div class="container-scroller">
      <div class="row p-0 m-0 proBanner" id="proBanner">
        <div class="col-md-12 p-0 m-0">
          <div class="card-body card-body-padding d-flex align-items-center justify-content-between">
            <div class="ps-lg-1">
              <div class="d-flex align-items-center justify-content-between">
                <p class="mb-0 font-weight-medium me-3 buy-now-text"></p>

              </div>
            </div>
            <div class="d-flex align-items-center justify-content-between">
              <a href="https://www.bootstrapdash.com/product/purple-bootstrap-admin-template/"><i class="mdi mdi-home me-3 text-white"></i></a>
              <button id="bannerClose" class="btn border-0 p-0">
                <i class="mdi mdi-close text-white me-0"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
        <div class="main-panel"><br><br><br>
          <div class="content-wrapper" style="background-color: #ffffff;">
            <h1 class="text-center">Liste des enfants ayant eu un rendez-vous</h1><br><br>
        <table class="table" >
                <thead>
                    <tr style="background-color: #ccc;">
                        <th>#</th>
                        <th>Code</th>
                        <th>Centre</th>
                        <th>Description</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($rendes as $key => $rende)

                    <tr>
                            <td>{{ $key + 1 }}</td>
                            <td>{{ $rende->code ?? 'Null'  }}</td>
                            <td>{{ $rende->centre ?? 'Null' }}</td>
                            <td>{{ $rende->description ?? 'Null' }}</td>

                            <td>
                                <a href="#" class="btn btn-danger btn-sm" onclick="confirmDelete({{ $rende->id }})">
                                  <i class="fas fa-trash"></i>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
               <div class="col-md-5 grid-margin stretch-card"></div>
            </div>
          </div>
          <footer class="footer">
            <div class="copyright">
              &copy; Copyright 2023 <strong><span>Songre</span></strong>. Tout droits réservés
            </div>
          </footer>
        </div>
      </div>
    </div>
    <script src="assets/vendors/js/vendor.bundle.base.js"></script>
    <script src="assets/vendors/chart.js/Chart.min.js"></script>
    <script src="assets/js/jquery.cookie.js" type="text/javascript"></script>
    <script src="assets/js/off-canvas.js"></script>
    <script src="assets/js/hoverable-collapse.js"></script>
    <script src="assets/js/misc.js"></script>
    <script src="assets/js/dashboard.js"></script>
    <script src="assets/js/todolist.js"></script>

    <script>
        function confirmDelete(vaccinationId) {
          var confirmDelete = confirm("Voulez-vous vraiment supprimer cet enfant ?");

          if (confirmDelete) {
            // Si l'utilisateur clique sur OK, vous pouvez rediriger vers la page de suppression ou effectuer l'action de suppression ici
            window.location.href = "/supprimer-utilisateur/" + userId; // Remplacez l'URL par celle de votre route de suppression
          }
        }
    </script>


  </body>
</html>
