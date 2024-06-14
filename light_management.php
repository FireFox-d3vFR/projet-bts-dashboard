<?php require_once 'includes/functions.php'; ?>
<?php include 'templates/header.php'; ?>
<main class="container mt-5">
    <div class="text-center mb-5">
        <h2 class="main-title">
            Régie Lumières <i class="fas fa-lightbulb" style="color: yellow;"></i>
        </h2>
    </div>
    <div class="row">
        <div class="col-md-6 mb-4">
            <div class="card" onclick="showGreyBox('grey-box')">
                <div class="card-body text-center">
                    <div class="status-circle mb-3"></div>
                    <h3>RL1</h3>
                    <div id="grey-box" class="grey-box" style="display: none;">
                        <?php
                        // Récupérer les valeurs de rl1
                        $valuesRl1 = getLastValuesRl1();
                        if ($valuesRl1) {
                            echo '<div class="data-item"><span class="data-label">IconsLART:</span> <span class="data-value">' . $valuesRl1['IconsLART'] . 'mA</span></div>',
                            '<div class="data-item"><span class="data-label">IconsTUTELO:</span> <span class="data-value">' . $valuesRl1['IconsTUTELO'] . 'mA</span></div>',
                            '<div class="data-item"><span class="data-label">IconsPAR58:</span> <span class="data-value">' . $valuesRl1['IconsPAR58'] . 'mA</span></div>',
                            '<div class="data-item"><span class="data-label">Durée:</span> <span class="data-value">' . $valuesRl1['duree'] . ' min</span></div>';
                        } else {
                            echo 'Aucune donnée disponible pour rl1';
                        }
                        ?>
                        <div id="rl1" class="mt-3"></div>
                        <button class="btn btn-primary mt-3" onclick="window.location.href='Vrl1.html'">Historique</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 mb-4">
            <div class="card" onclick="showGreyBox('grey-box2')">
                <div class="card-body text-center">
                    <div class="status-circle mb-3"></div>
                    <h3>RL2</h3>
                    <div id="grey-box2" class="grey-box" style="display: none;">
                        <?php
                        // Récupérer les valeurs de rl2
                        $valuesRl2 = getLastValuesRl2();
                        if ($valuesRl2) {
                            echo '<div class="data-item"><span class="data-label">IconsLART:</span> <span class="data-value">' . $valuesRl2['IconsLART'] . 'mA</span></div>',
                            '<div class="data-item"><span class="data-label">IconsTUTELO:</span> <span class="data-value">' . $valuesRl2['IconsTUTELO'] . 'mA</span></div>',
                            '<div class="data-item"><span class="data-label">IconsPAR58:</span> <span class="data-value">' . $valuesRl2['IconsPAR58'] . 'mA</span></div>',
                            '<div class="data-item"><span class="data-label">Durée:</span> <span class="data-value">' . $valuesRl2['duree'] . ' min</span></div>';
                        } else {
                            echo 'Aucune donnée disponible pour rl2';
                        }
                        ?>
                        <div id="rl2" class="mt-3"></div>
                        <button class="btn btn-primary mt-3" onclick="window.location.href='Vrl2.html'">Historique</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<?php include 'templates/footer.php'; ?>
<script src="public/js/light_management.js"></script>
<link rel="stylesheet" href="public/css/light_management.css">
