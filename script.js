const testimonialsContainer = document.querySelector('.testimonials');
const prevBtn = document.getElementById('prev-btn');
const nextBtn = document.getElementById('next-btn');

let currentIndex = 0;
const testimonials = document.querySelectorAll('.testimonial');

function showTestimonial(index) {
    testimonials.forEach((testimonial, i) => {
        testimonial.style.transform = `translateX(${100 * (i - index)}%)`;
    });
}

prevBtn.addEventListener('click', () => {
    if (currentIndex > 0) {
        currentIndex--;
        showTestimonial(currentIndex);
    }
});

nextBtn.addEventListener('click', () => {
    if (currentIndex < testimonials.length - 1) {
        currentIndex++;
        showTestimonial(currentIndex);
    }
});

// Défilement automatique
function autoScroll() {
    if (currentIndex < testimonials.length - 1) {
        currentIndex++;
    } else {
        currentIndex = 0;
    }
    showTestimonial(currentIndex);
}

setInterval(autoScroll, 3000); // Défilement toutes les 3 secondes (3000 ms)
