const openMobileMenu = () => {
  const mobileMenu = document.getElementById('mobile-menu');
  mobileMenu.classList.add('active');
};

const closeMobileMenu = () => {
  const mobileMenu = document.getElementById('mobile-menu');
  mobileMenu.classList.remove('active');
};

const openBtn = document.getElementById('nav-toggle');
openBtn.addEventListener('click', openMobileMenu);

const closeBtn = document.getElementById('close-menu');
closeBtn.addEventListener('click', closeMobileMenu);
