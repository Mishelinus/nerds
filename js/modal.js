
const modal = document.querySelector('.modal');
const clickModalShow = document.querySelector('.map-contact__btn');
const clickCloseModal = modal.querySelector('.btn-close');
const form = modal.querySelector('form');
const userName = modal.querySelector('[name=name]');
const userEmail = modal.querySelector('[name=email]');

let isStorageSupport = true;
let storage = '';
//перехват ошибок «исключительные ситуации» (исключения) start
try {
   storage = localStorage.getItem('name');
} catch (err) {
  isStorageSupport = false;
}
// end .......................



    clickModalShow.addEventListener ('click', function(evt){
      evt.preventDefault();
      modal.classList.add('modal_show');
      //фокус на поле name
      userName.focus();
      if(storage){
          userName.value = storage;
      }
});

clickCloseModal.addEventListener('click', function(){
  modal.classList.remove('modal_show');
});


form.addEventListener('submit', function(evt){
  //evt.preventDefault();

 if(!userName.value){
  evt.preventDefault();
  console.log('не заполнено поле name ');
  console.log(userEmail.value);
 } else {
  localStorage.setItem('name', userName.value);
 }
if(!userEmail){
console.log('не заполнено поле email ');
console.log(userEmail.value);
} else {
  localStorage.setItem('userEmail', userEmail.value);
}

});




