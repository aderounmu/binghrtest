require('./bootstrap');

const modalForm = document.getElementById('modal-form')
const closeButtons = document.getElementsByClassName('close-button')
const openButtons = document.getElementsByClassName('open-button')
const userText = document.getElementsByClassName('user-text')
const userForm = document.getElementById('user-form')


function closeModalForm(e){
    e.preventDefault()
    modalForm.style.display = 'none'
}

function openModalForm(e){
    e.preventDefault()
    modalForm.style.display = 'flex'
}


//errorCloseButtons.addEventListener('click',closeErrorMessages);


for(let i = 0 ; i < closeButtons.length ; i++){
    closeButtons[i].addEventListener('click', closeModalForm)
}

for(let i = 0 ; i < openButtons.length; i++){
    openButtons[i].addEventListener('click',(e) => {
        //console.log(openButtons[i].dataset.edit === 'true')
        if(openButtons[i].dataset.edit === 'true'){
            for(let i = 0 ; i < userText.length ; i ++ ){userText[i].innerHTML = 'Edit User'}
            if(document.getElementById('put-attribute') === null) userForm.innerHTML = '<input id="put-attribute" type="hidden" name="_method" value="PUT"> ' + userForm.innerHTML
        }else{
            
            if(document.getElementById('put-attribute') !== null)userForm.removeChild(document.getElementById('put-attribute') )
            for(let i = 0 ; i < userText.length ; i ++ ) userText[i].innerHTML = 'Add User'
        }

        for(let i = 0 ; i < closeButtons.length ; i++){
            closeButtons[i].addEventListener('click', closeModalForm)
        }

        userForm.action = openButtons[i].dataset.action

        openModalForm(e);
    });
}