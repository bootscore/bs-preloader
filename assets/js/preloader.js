document.addEventListener('DOMContentLoaded', function () {

  // Exclude links to fade-in
  let ignore_onbeforeunload = false;
  document.querySelectorAll('a[href^="mailto"], a[href^="tel"], a[data-fade="false"], .woocommerce-MyAccount-downloads-file')
    .forEach(function (el) {
      el.addEventListener('click', function () {
        ignore_onbeforeunload = true;
      });
    });

  // Fade helpers (CSS-transition based)
  function fadeIn(el, duration = 200) {
    if (!el) return;
    el.style.transition = `opacity ${duration}ms`;
    el.style.opacity = 0;
    el.style.display = '';
    requestAnimationFrame(() => {
      el.style.opacity = 1;
    });
  }

  function fadeOut(el, duration = 400, delay = 0) {
    if (!el) return;
    setTimeout(() => {
      el.style.transition = `opacity ${duration}ms`;
      el.style.opacity = 0;
      setTimeout(() => {
        el.style.display = 'none';
      }, duration);
    }, delay);
  }

  const preloader = document.getElementById('preloader');
  const status = document.getElementById('status');

  // Preloader
  window.addEventListener('beforeunload', function () {
    if (!ignore_onbeforeunload) {
      fadeIn(preloader, 200);
      fadeIn(status, 200);
    }
    ignore_onbeforeunload = false;
  });

  window.addEventListener('load', function () {
    fadeOut(status);
    fadeOut(preloader, 400, 350);
  });

  setTimeout(function () {
    fadeOut(status);
    fadeOut(preloader, 400, 350);
  }, 1500);

  // Prevents preloader stucking by pressing the browser back/forward buttons
  window.onpagehide = function () {
    fadeOut(status, 200);
    fadeOut(preloader, 400, 350);
  };

});