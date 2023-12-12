document.addEventListener('DOMContentLoaded', function () {
    const burgerMenu = document.querySelector('.burger-menu');
    const navLinks = document.querySelector('.nav-links-1234');
  
    burgerMenu.addEventListener('click', function () {
      navLinks.classList.toggle('show');
    });
  
    const navLinksArray = Array.from(document.querySelectorAll('.nav-links-1234 a'));
    navLinksArray.forEach(function (link) {
      link.addEventListener('click', function () {
        navLinks.classList.remove('show');
      });
    });

    document.addEventListener('click', function (event) {
      if (!navLinks.contains(event.target) && !burgerMenu.contains(event.target)) {
        navLinks.classList.remove('show');
      }
    });
});