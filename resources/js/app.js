require('./bootstrap');

const modalForm = document.getElementById('modal-form')
const closeButtons = document.getElementsByClassName('close-button')
const openButtons = document.getElementsByClassName('open-button')

function closeModalForm(e){
    e.preventDefault()
    modalForm.style.display = 'none'
}

function openModalForm(e){
    e.preventDefault()
    modalForm.style.display = 'flex'
}


for(let i = 0 ; i < closeButtons.length ; i++){
    closeButtons[i].addEventListener('click', closeModalForm)
}

for(let i = 0 ; i < openButtons.length; i++){
    openButtons[i].addEventListener('click',openModalForm);
}