const popup = document.querySelector('#popup');
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

hamburger.addEventListener('click', function(){
  nav.classList.toggle('slide');
  hamburger.classList.toggle('active');
});

var btn1 = document.getElementById("btn-1");
var btn2 = document.getElementById("btn-2");
var btn3 = document.getElementById("btn-3");
var btn4 = document.getElementById("btn-4");

var div1 = document.getElementById("div-1");
var div2 = document.getElementById("div-2");
var div3 = document.getElementById("div-3");
var div4 = document.getElementById("div-4");

btn1.addEventListener('click',() =>{
  div1.style.display="flex";
  div2.style.display="none";
  div3.style.display="none";
  div4.style.display="none";
});
btn2.addEventListener('click',() =>{
  div1.style.display="none";
  div2.style.display="flex";
  div3.style.display="none";
  div4.style.display="none";
});
btn3.addEventListener('click',() =>{
  div1.style.display="none";
  div2.style.display="none";
  div3.style.display="flex";
  div4.style.display="none";
});
btn4.addEventListener('click',() =>{
  div1.style.display="none";
  div2.style.display="none";
  div3.style.display="none";
  div4.style.display="flex";
});

const btnActvList = document.querySelectorAll('.btn');
btn1.classList.add('buttonActive');
btnActvList.forEach(btnActv => {
  btnActv.addEventListener('click', () => {
    document.querySelector('.buttonActive')?.classList.remove('buttonActive');
    btnActv.classList.add('buttonActive');
  });
});

function toggleFilter(buttonNumber) {
  // Reset filter for all buttons
  const buttons = document.querySelectorAll('.btn');
  buttons.forEach(button => {
    button.style.filter = 'grayscale(1)';
  });
  
  // Remove filter for the clicked button
  const clickedButton = document.querySelector(`.btn:nth-child(${buttonNumber})`);
  if (clickedButton) {
    clickedButton.style.filter = 'none';
  }
}

var btna1 = document.getElementById("btn-a1");
var btna2 = document.getElementById("btn-a2");

var a1 = document.getElementById("about-1");
var a2 = document.getElementById("about-2");

btna1.addEventListener('click',() =>{
  a1.style.display="block";
  a2.style.display="none";
});
btna2.addEventListener('click',() =>{
  a1.style.display="none";
  a2.style.display="block";
});

