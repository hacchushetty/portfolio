// script.js — small helpers: year and mobile menu
document.addEventListener('DOMContentLoaded', function () {
  var y = document.getElementById('year');
  if (y) y.textContent = new Date().getFullYear();

  var menuToggle = document.getElementById('menuToggle');
  var sidebar = document.getElementById('sidebar');
  if (menuToggle && sidebar) {
    menuToggle.addEventListener('click', function () {
      var visible = sidebar.style.display === 'block';
      sidebar.style.display = visible ? 'none' : 'block';
      this.setAttribute('aria-expanded', (!visible).toString());
    });
  }

  // Optional: simple smooth-scroll for internal links
  document.querySelectorAll('a[href^="#"]').forEach(function (a) {
    a.addEventListener('click', function (e) {
      var target = document.querySelector(this.getAttribute('href'));
      if (target) {
        e.preventDefault();
        target.scrollIntoView({ behavior: 'smooth', block: 'start' });
      }
    });
  });
});
