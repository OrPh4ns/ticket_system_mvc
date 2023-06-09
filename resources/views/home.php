<!DOCTYPE html>
<html lang="en">
<?php

Asset::add_path('resources/template_1/');
?>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>mvc_tickets_design</title>
    <link rel="stylesheet" href="<?php \app\Core\Assets::assert('bootstrap/css/bootstrap', new \app\Core\Router);?>">
    <?php //\app\Core\Assets::assert('../rescouces/views/assets/bootstrap/css/bootstrap.min.css');?>
    <link rel="stylesheet" href="assets/css/Navbar-Right-Links-Dark-icons.css">
</head>

<body>
    <nav class="navbar navbar-dark navbar-expand-md bg-dark py-3">
        <div class="container"><a class="navbar-brand d-flex align-items-center" href="#"><span class="bs-icon-sm bs-icon-rounded bs-icon-primary d-flex justify-content-center align-items-center me-2 bs-icon"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-ticket-detailed">
                        <path fill-rule="evenodd" d="M0 4.5A1.5 1.5 0 0 1 1.5 3h13A1.5 1.5 0 0 1 16 4.5V6a.5.5 0 0 1-.5.5 1.5 1.5 0 0 0 0 3 .5.5 0 0 1 .5.5v1.5a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 11.5V10a.5.5 0 0 1 .5-.5 1.5 1.5 0 1 0 0-3A.5.5 0 0 1 0 6V4.5ZM1.5 4a.5.5 0 0 0-.5.5v1.05a2.5 2.5 0 0 1 0 4.9v1.05a.5.5 0 0 0 .5.5h13a.5.5 0 0 0 .5-.5v-1.05a2.5 2.5 0 0 1 0-4.9V4.5a.5.5 0 0 0-.5-.5h-13ZM4 5.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5Zm0 5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5ZM5 7a1 1 0 0 0 0 2h6a1 1 0 1 0 0-2H5Z"></path>
                    </svg></span><span>Ticekts</span></a><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-5"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-5">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link active" href="#">Startseite</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Tickets</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Profil</a></li>
                </ul><a class="btn btn-primary ms-md-2 mx-2" role="button" href="#">Einloggen</a><a class="btn btn-primary ms-md-2 mx-2" role="button" href="#">Ausloggen</a>
            </div>
        </div>
    </nav>
    <section class="py-4 py-xl-5">
        <div class="container h-100">
            <div class="row h-100">
                <div class="col-md-10 col-xl-8 text-center d-flex d-sm-flex d-md-flex justify-content-center align-items-center mx-auto justify-content-md-start align-items-md-center justify-content-xl-center">
                    <div>
                        <h2 class="text-uppercase fw-bold mb-3">Willkommen zurück</h2>
                        <p class="mb-4">Wennd Sie noch Konto bei uns haben, klicken Sie auf Registrieren, um sich ein Konto anzukegen</p><button class="btn btn-primary fs-5 me-2 py-2 px-4" type="button">Einloggen</button><button class="btn btn-outline-primary fs-5 py-2 px-4" type="button"><span style="color: rgb(33, 37, 41); background-color: rgb(255, 255, 255);">Registrieren</span></button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="py-4 py-xl-5">
        <div class="container h-100">
            <div class="row h-100">
                <div class="col-md-10 col-xl-8 text-center d-flex d-sm-flex d-md-flex justify-content-center align-items-center mx-auto justify-content-md-start align-items-md-center justify-content-xl-center">
                    <div>
                        <h2 class="text-uppercase fw-bold mb-3">Sie haben 11 tickets</h2>
                        <p class="mb-4">Tickets klicken, um die Tickets zu sehen, oder erstellen, um ein Ticket zu erstellen</p><button class="btn btn-primary fs-5 me-2 py-2 px-4" type="button">Tickets</button><button class="btn btn-outline-primary fs-5 py-2 px-4" type="button"><span style="color: rgb(33, 37, 41); background-color: rgb(255, 255, 255);">Erstellen</span></button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>