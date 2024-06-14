// Function to toggle the display of grey boxes
function showGreyBox(boxId) {
    var greyBox = document.getElementById(boxId);
    greyBox.style.display = (greyBox.style.display === "none") ? "flex" : "none";
}

// Function to refresh content for AS1
function refreshContentAS1() {
    $.ajax({
        url: 'valeurs_as1.php',
        method: 'GET',
        success: function(response) {
            $('#as1').html(response);
        },
        error: function() {
            console.log('Erreur lors de la récupération des données');
        }
    });
}

// Function to refresh content for AS2
function refreshContentAS2() {
    $.ajax({
        url: 'valeurs_as2.php',
        method: 'GET',
        success: function(response) {
            $('#as2').html(response);
        },
        error: function() {
            console.log('Erreur lors de la récupération des données');
        }
    });
}

// Initial content load
refreshContentAS1();
refreshContentAS2();

// Set interval to refresh content every 5 seconds
setInterval(refreshContentAS1, 5000);
setInterval(refreshContentAS2, 5000);
