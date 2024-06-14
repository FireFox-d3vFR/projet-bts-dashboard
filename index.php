<?php include 'templates/header.php'; ?>
<main class="container mt-5">
    <!-- Section d'introduction -->
    <section class="text-center my-5">
        <h1 class="display-4">Bienvenue sur Instrumentation Systèmes</h1>
        <p class="lead">Explorez nos fonctionnalités innovantes et nos solutions technologiques.</p>
    </section>

    <!-- Section des fonctionnalités -->
    <section class="row text-center">
        <div class="col-md-6 col-lg-3 mb-4">
            <div class="card shadow-sm h-100">
                <div class="card-body">
                    <i class="fas fa-solar-panel fa-3x mb-3"></i>
                    <h5 class="card-title">Alimentation Solaire</h5>
                    <p class="card-text">Découvrez nos solutions d'énergie solaire efficaces et durables.</p>
                    <a href="solar_power.php" class="btn btn-outline-primary">Voir Plus</a>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-lg-3 mb-4">
            <div class="card shadow-sm h-100">
                <div class="card-body">
                    <i class="fas fa-lightbulb fa-3x mb-3"></i>
                    <h5 class="card-title">Régie Lumière</h5>
                    <p class="card-text">Gestion intelligente de l'éclairage pour une meilleure efficacité énergétique.</p>
                    <a href="light_management.php" class="btn btn-outline-primary">Voir Plus</a>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-lg-3 mb-4">
            <div class="card shadow-sm h-100">
                <div class="card-body">
                    <i class="fas fa-dice-d6 fa-3x mb-3"></i>
                    <h5 class="card-title">Réalité Augmentée</h5>
                    <p class="card-text">Intégrez la réalité augmentée dans vos projets pour une expérience immersive.</p>
                    <a href="https://172.19.2.130:8181/AS.php" class="btn btn-outline-primary">Voir Plus</a>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-lg-3 mb-4">
            <div class="card shadow-sm h-100">
                <div class="card-body">
                    <i class="fas fa-server fa-3x mb-3"></i>
                    <h5 class="card-title">NAS</h5>
                    <p class="card-text">Solutions de stockage réseau pour vos besoins de données sécurisées.</p>
                    <a href="http://172.19.2.130:8080/cgi-bin/" class="btn btn-outline-primary">Voir Plus</a>
                </div>
            </div>
        </div>
    </section>
</main>
<!-- Inclusion des scripts -->
<script src="https://kit.fontawesome.com/95a02bd20d.js" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJTYoR0tY6L6jI2JT5zwI4FttIMxqsXY7fWUh+e0IGmoCpH1K" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIybnf7Q2xzB/l9FIOV90oWibOWVnZymfucbwp9" crossorigin="anonymous"></script>
<?php include 'templates/footer.php'; ?>