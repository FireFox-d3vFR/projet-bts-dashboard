<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Instrumentation Systèmes</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="public/css/style.css">
    <link rel="stylesheet" href="public/css/dark_mode.css">
    <script src="https://kit.fontawesome.com/95a02bd20d.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="public/js/dark_mode.js"></script>
</head>

<body>
    <!-- Ajout de la date et de l'heure (mise à jour automatiquement) -->
    <script type="text/javascript">
        function date_heure(id) {
            var now = new Date();
            var annee = now.getFullYear();
            var mois = ('0' + (now.getMonth() + 1)).slice(-2);
            var jour = ('0' + now.getDate()).slice(-2);
            var heure = ('0' + now.getHours()).slice(-2);
            var minute = ('0' + now.getMinutes()).slice(-2);
            var seconde = ('0' + now.getSeconds()).slice(-2);
            var resultat = "Nous sommes le " + jour + "/" + mois + "/" + annee + " et il est " + heure + " : " + minute + " : " + seconde;
            document.getElementById(id).innerHTML = resultat;
            setTimeout('date_heure("' + id + '");', '1000');
            return true;
        }
    </script>
    <span style="margin-left: 20px;" id="date_heure"></span>
    <script type="text/javascript">
        window.onload = date_heure('date_heure');
    </script>
    <header class="bg-primary text-white text-center py-3">
        <h1>Instrumentation Systèmes</h1>
    </header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="index.php">Accueil</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item"><a class="nav-link" href="solar_power.php">Alimentation Solaire</a></li>
                <li class="nav-item"><a class="nav-link" href="light_management.php">Régie Lumières</a></li>
                <li class="nav-item"><a class="nav-link" href="about.php">À propos</a></li>
            </ul>
            <button class="btn btn-outline-dark my-2 my-sm-0" id="toggle-theme">Activer le mode sombre</button>
        </div>
    </nav>
</body>
</html>