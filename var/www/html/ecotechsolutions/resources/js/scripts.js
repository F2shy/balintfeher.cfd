window.addEventListener('scroll', function () {
    var navbar = document.querySelector('.navbar');
    if (window.scrollY > 100) {
      navbar.classList.add('scrolled');
    } else {
      navbar.classList.remove('scrolled');
    }
  });

  $(document).ready(function () {
    $('#search-icon').on('click', function (e) {
      e.preventDefault();
      $('#search-box').toggleClass('show');
    });
  });