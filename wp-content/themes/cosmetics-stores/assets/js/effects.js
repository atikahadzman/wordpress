(function ($) {
  "use strict";

  // Scroll Animations
  const cosmetics_stores_observer = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        entry.target.classList.add('animations-show-item');
        cosmetics_stores_observer.unobserve(entry.target);
      } else {
        entry.target.classList.remove('animations-show-item');
      }
    });
  });

  const cosmetics_stores_hiddenElements = document.querySelectorAll('.animations-hidden-item');
  cosmetics_stores_hiddenElements.forEach((el) =>
    cosmetics_stores_observer.observe(el)
  );
})(jQuery);