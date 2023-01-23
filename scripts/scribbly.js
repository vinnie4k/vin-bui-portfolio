let friends = document.getElementById('scribbly-friends');
let home = document.getElementById('scribbly-home');
let books = document.getElementById('scribbly-books');
let mems = document.getElementById('scribbly-mems');
let timer = document.getElementById('scribbly-timer');

window.addEventListener('scroll', () => {
   let value = window.scrollY;

   home.style.left = -300 + value * 0.25 + 'px';
   timer.style.right = -200 + value * 0.15 + 'px';
   books.style.left = -200 + value * 0.15 + 'px';
   mems.style.right = -550 + value * 0.25 + 'px';
   friends.style.left = -1000 + value * 0.35 + 'px';
})