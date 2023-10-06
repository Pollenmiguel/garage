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
