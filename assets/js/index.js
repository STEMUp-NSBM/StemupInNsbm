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

const Btn2023 = document.querySelector('#btn-2023');
const Btn2024 = document.querySelector('#btn-2024');
const members2024 = document.querySelector('#members-2024');
const members2023 = document.querySelector('#members-2023');

Btn2023.addEventListener('click', () => {
  Btn2023.classList.add('active');
  Btn2024.classList.remove('active');
  members2023.classList.remove('hidden');
  members2024.classList.add('hidden');
});

Btn2024.addEventListener('click', () => {
  Btn2024.classList.add('active');
  Btn2023.classList.remove('active');
  members2024.classList.remove('hidden');
  members2023.classList.add('hidden');
});
