function toggleMenu() {
    const hamburger = document.querySelector('.hamburger');
    const dropdownNav = document.querySelector('.dropdown-nav');
    
    hamburger.classList.toggle('active');
    dropdownNav.classList.toggle('active');
};



// Newsletter form submission
document.querySelector('.newsletter-form').addEventListener('submit', function(e) {
  e.preventDefault();
  const email = document.querySelector('.newsletter-form input').value;
  alert(`Thank you for subscribing with ${email}`);
  document.querySelector('.newsletter-form').reset();
});

