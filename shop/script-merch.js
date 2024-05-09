const popup = document.querySelector('#addCart');
const openPopup = document.querySelector('#openPopup');
const closePopup = document.querySelector('#closePopup');
const hamburger = document.querySelector('.hamburger');
const nav = document.querySelector('nav ul');
const content = document.querySelector('content');

openPopup.addEventListener('click', function() {
  popup.style.display = 'block';
});

closePopup.addEventListener('click', function() {
  popup.style.display = 'none';
});
  
window.addEventListener('click', function(event) {
  if (event.target === popup) {
    popup.style.display = 'none';
  }
});