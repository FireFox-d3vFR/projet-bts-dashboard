<?php require_once 'includes/functions.php'; ?>
<?php include 'templates/header.php'; ?>
<main class="container mt-5">
    <div class="text-center mb-5">
        <h2 class="main-title">
            Alimentation Solaire <i class="fas fa-sun" style="color: orange;"></i>
        </h2>
    </div>
    <div class="row">
        <div class="col-md-6 mb-4">
            <div class="card" onclick="showGreyBox('grey-box')">
                <div class="card-body text-center">
                    <div class="status-circle mb-3"></div>
                    <h3>AS1</h3>
                    <div id="grey-box" class="grey-box" style="display: none;">
                        <?php
                        // Récupérer les valeurs de as1
                        $valuesAs1 = getLastValuesAs1();
                        if ($valuesAs1) {
                            echo '<div class="data-item"><span class="data-label">Inclinaison:</span> <span class="data-value">' . $valuesAs1['inclinaison'] . '°</span></div>',
                            '<div class="data-item"><span class="data-label">Orientation:</span> <span class="data-value">' . $valuesAs1['orientation'] . '°</span></div>',
                            '<div class="data-item"><span class="data-label">Ipan:</span> <span class="data-value">' . $valuesAs1['Ipan'] . 'mA</span></div>',
                            '<div class="data-item"><span class="data-label">Upan:</span> <span class="data-value">' . $valuesAs1['Upan'] . 'V</span></div>',
                            '<div class="data-item"><span class="data-label">Ibat:</span> <span class="data-value">' . $valuesAs1['Ibat'] . 'mA</span></div>',
                            '<div class="data-item"><span class="data-label">Ubat:</span> <span class="data-value">' . $valuesAs1['Ubat'] . 'V</span></div>';
                        } else {
                            echo 'Aucune donnée disponible pour as1';
                        }
                        ?>
                        <div id="as1" class="mt-3"></div>
                        <button class="btn btn-primary mt-3" onclick="window.location.href='Vas1.html'">Historique</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 mb-4">
            <div class="card" onclick="showGreyBox('grey-box2')">
                <div class="card-body text-center">
                    <div class="status-circle mb-3"></div>
                    <h3>AS2</h3>
                    <div id="grey-box2" class="grey-box" style="display: none;">
                        <?php
                        // Récupérer les valeurs de as2
                        $valuesAs2 = getLastValuesAs2();
                        if ($valuesAs2) {
                            echo '<div class="data-item"><span class="data-label">Inclinaison:</span> <span class="data-value">' . $valuesAs2['inclinaison'] . '°</span></div>',
                            '<div class="data-item"><span class="data-label">Orientation:</span> <span class="data-value">' . $valuesAs2['orientation'] . '°</span></div>',
                            '<div class="data-item"><span class="data-label">Ipan:</span> <span class="data-value">' . $valuesAs2['Ipan'] . 'mA</span></div>',
                            '<div class="data-item"><span class="data-label">Upan:</span> <span class="data-value">' . $valuesAs2['Upan'] . 'V</span></div>',
                            '<div class="data-item"><span class="data-label">Ibat:</span> <span class="data-value">' . $valuesAs2['Ibat'] . 'mA</span></div>',
                            '<div class="data-item"><span class="data-label">Ubat:</span> <span class="data-value">' . $valuesAs2['Ubat'] . 'V</span></div>';
                        } else {
                            echo 'Aucune donnée disponible pour as2';
                        }
                        ?>
                        <div id="as2" class="mt-3"></div>
                        <button class="btn btn-primary mt-3" onclick="window.location.href='Vas2.html'">Historique</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<?php include 'templates/footer.php'; ?>
<script src="public/js/solar_power.js"></script>
<link rel="stylesheet" href="public/css/solar_power.css">
