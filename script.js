// Dark mode toggle
function toggleDarkMode() {
  document.body.classList.toggle('dark');
}

// Mobile nav toggle
function toggleMobileNav() {
  document.getElementById("mobileNav").classList.toggle("show");
}

  // Pour les éléments avec .fade-in
document.querySelectorAll('.fade-in').forEach(el => {
    el.style.animationPlayState = 'running';
});

document.querySelectorAll('.fade-in-img').forEach(img => {
    img.style.animationPlayState = 'running';
  });