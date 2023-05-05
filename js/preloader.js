document.addEventListener("DOMContentLoaded", function () {

  // Exclude links to fade-in
  let ignore_onbeforeunload = false;
  const excludedLinks = document.querySelectorAll('a[href^=mailto], a[href^=tel], a[data-fade="false"], .woocommerce-MyAccount-downloads-file');
  excludedLinks.forEach(function (link) {
    link.addEventListener('click', function () {
      ignore_onbeforeunload = true;
    });
  });

  // Preloader
  window.addEventListener('beforeunload', function (event) {
    if (!ignore_onbeforeunload) {
      document.querySelector("#preloader").style.display = 'flex';
      document.querySelector('#status').style.display = 'flex';
    }
    ignore_onbeforeunload = false;
  });

  window.addEventListener('load', function () {
    document.querySelector('#status').style.display = 'none';
    document.querySelector('#preloader').style.display = 'none';
  });

  setTimeout(function () {
    document.querySelector('#status').style.display = 'none';
    document.querySelector('#preloader').style.display = 'none';
  }, 1500);

  // Prevents preloader stucking by press the browser back/forward buttons
  window.addEventListener('pagehide', function () {
    document.querySelector('#status').style.display = 'none';
    document.querySelector('#preloader').style.display = 'none';
  });

});
