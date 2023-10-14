const testimonials = document.querySelectorAll(".testimonial");
const testimonialsContainer = document.querySelector(".testimonials");
let currentIndex = 0;

function scrollTestimonials() {
    // Masquer tous les commentaires
    testimonials.forEach((testimonial) => {
        testimonial.style.display = "none";
    });

    // Afficher le commentaire actuel
    testimonials[currentIndex].style.display = "block";

    currentIndex++;
    
    // Si on atteint la fin des commentaires, revenir au premier commentaire
    if (currentIndex === testimonials.length) {
        currentIndex = 0;
    }
}

// Appeler la fonction pour afficher le premier commentaire
scrollTestimonials();

// Définir l'intervalle pour faire défiler les commentaires
setInterval(scrollTestimonials, 3000); // Défilement toutes les 3 secondes





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

// Exemple de données de véhicules (à remplacer par vos données réelles)
const vehicles = [
    { brand: 'Toyota', price: 15000, mileage: 50000, year: 2018 },
    { brand: 'Honda', price: 12000, mileage: 40000, year: 2019 },
    // Ajoutez plus de données ici
];

// Fonction pour appliquer les filtres
function applyFilters() {
    const priceFilter = parseInt(priceInput.value) || 0;
    const mileageFilter = parseInt(mileageInput.value) || 0;
    const yearFilter = parseInt(yearInput.value) || 0;
    const brandFilter = brandSelect.value;

    const filteredVehicles = vehicles.filter(vehicle => {
        return vehicle.price >= priceFilter &&
            vehicle.mileage <= mileageFilter &&
            vehicle.year >= yearFilter &&
            (brandFilter === 'Tous' || vehicle.brand === brandFilter);
    });

    displayResults(filteredVehicles);
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
            <h2>${vehicle.brand}</h2>
            <p>Prix : ${vehicle.price} €</p>
            <p>Kilométrage : ${vehicle.mileage} km</p>
            <p>Année : ${vehicle.year}</p>
        `;
        resultsDiv.appendChild(vehicleDiv);
    });
}

// Initialisez l'affichage initial
displayResults(vehicles);
