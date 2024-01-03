// Smooth scroll function with offset and margin adjustment
function smoothScroll(targetId) {
  const targetElement = document.getElementById(targetId);
  if (targetElement) {
    const offset = -0.2 * window.innerHeight; // 10% offset
    window.scrollTo({ top: targetElement.offsetTop + offset, behavior: 'smooth' });
  }
}

// Attach click event listeners to links
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
  anchor.addEventListener('click', function (e) {
    e.preventDefault();
    const targetId = this.getAttribute('href').substring(1);
    smoothScroll(targetId);
  });
});
