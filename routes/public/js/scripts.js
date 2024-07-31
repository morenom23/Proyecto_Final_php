

function initCarousel(containerSelector) {
  const container = document.querySelector(containerSelector);
  const carousel = container.querySelector('.carousel');
  const items = container.querySelectorAll('.item');
  const totalItems = items.length;
  const visibleItems = 4; // Número de imágenes visibles a la vez
  let currentIndex = 0;

  function next() {
      currentIndex = (currentIndex + 1) % totalItems;
      updateCarousel();
  }

  function prev() {
      currentIndex = (currentIndex - 1 + totalItems) % totalItems;
      updateCarousel();
  }

  function updateCarousel() {
      const offset = -currentIndex * (100 / visibleItems);
      carousel.style.transform = `translateX(${offset}%)`;
  }

  container.querySelector('.prevBtn').addEventListener('click', prev);
  container.querySelector('.nextBtn').addEventListener('click', next);

  updateCarousel(); 
}


// Función para mostrar u ocultar el botón basado en el desplazamiento de la página
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    document.getElementById("scrollBtn").style.display = "block";
  } else {
    document.getElementById("scrollBtn").style.display = "none";
  }
}

function topFunction() {
  document.body.scrollTop = 0; // Para Safari
  document.documentElement.scrollTop = 0; // Para Chrome, Firefox, IE y Opera
}

