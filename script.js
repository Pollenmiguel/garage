// Récupérez les éléments du DOM
const priceInput = document.getElementById('price');
const mileageInput = document.getElementById('mileage');
const yearInput = document.getElementById('year');
const brandSelect = document.getElementById('brand');
const resultsDiv = document.querySelector('.results');

// Écoutez les événements de modification des filtres
priceInput.addEventListener('input', applyFilters);
mileageInput.addEventListener('input', applyFilters);
yearInput.addEventListener('input', applyFilters);
brandSelect.addEventListener('change', applyFilters);

// Fonction pour appliquer les filtres
function applyFilters() {
    const priceFilter = parseInt(priceInput.value) || 0;
    const mileageFilter = parseInt(mileageInput.value) || 0;
    const yearFilter = parseInt(yearInput.value) || 0;
    const brandFilter = brandSelect.value;

    // Utilisez fetch pour obtenir les données filtrées
    fetch('votre-script-php-de-filtrage.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
        },
        body: JSON.stringify({
            price: priceFilter,
            mileage: mileageFilter,
            year: yearFilter,
            brand: brandFilter,
        }),
    })
    .then(response => response.json())
    .then(filteredData => {
        // Utilisez les données filtrées
        displayResults(filteredData);
    })
    .catch(error => {
        console.error('Erreur lors de la récupération des données filtrées:', error);
    });
}

// Fonction pour afficher les résultats
function displayResults(filteredVehicles) {
    resultsDiv.innerHTML = '';

    if (filteredVehicles.length === 0) {
        resultsDiv.innerHTML = '<p>Aucun résultat trouvé.</p>';
        return;
    }

    filteredVehicles.forEach(vehicle => {
        const vehicleDiv = document.createElement('div');
        vehicleDiv.classList.add('vehicle');
        vehicleDiv.innerHTML = `
            <h2>${vehicle.Marque} ${vehicle.Nom_du_modèle_de_voiture}</h2>
            <p>Prix : ${vehicle.Prix} €</p>
            <p>Kilométrage : ${vehicle.Kilométrage} km</p>
            <p>Année : ${vehicle.Année_de_mise_en_circulation}</p>
            <img src="${vehicle.images}" alt="${vehicle.Marque} ${vehicle.Nom_du_modèle_de_voiture}">
            <!-- Ajoutez ici la galerie d'images, le tableau de caractéristiques, et la liste des équipements -->
        `;
        resultsDiv.appendChild(vehicleDiv);
    });
}

// Initialisez l'affichage initial
applyFilters();
