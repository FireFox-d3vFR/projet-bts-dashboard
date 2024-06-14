function showGreyBox(id) {
    var greyBox = document.getElementById(id);
    if (greyBox.style.display === "none") {
        greyBox.style.display = "flex";
    } else {
        greyBox.style.display = "none";
    }
}

function refreshContent(id, url) {
    $.ajax({
        url: url, // L'URL vers le script PHP qui récupère les dernières valeurs de la base de données
        method: 'GET',
        success: function(response) {
            // Mettre à jour le contenu de la balise <div> avec la réponse du serveur
            document.getElementById(id).innerHTML = response;
        },
        error: function() {
            console.log('Erreur lors de la récupération des données');
        }
    });
}

// Rafraîchir le contenu toutes les 5 secondes
setInterval(() => {
    refreshContent('rl1', 'valeurs_rl1.php');
    refreshContent('rl2', 'valeurs_rl2.php');
}, 5000);
