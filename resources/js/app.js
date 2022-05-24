const { data } = require('autoprefixer');

require('./bootstrap');

const modalForm = document.getElementById('modal-form')
const closeButtons = document.getElementsByClassName('close-button')
const openButtons = document.getElementsByClassName('open-button')
const userText = document.getElementsByClassName('user-text')
const userForm = document.getElementById('user-form')
const contentBody = document.getElementById('x-body')
const closeSideBarButton = document.getElementById('close-side-bar-inner')
const innerSideBar = document.getElementById('side-bar-inner')

function toggleSideBar(){
    if(innerSideBar.style.display === 'none'){
        contentBody.classList.remove('ml-[4.5rem]')
        contentBody.classList.add('ml-48')
        innerSideBar.style.display = 'block'
        

    }else{
        innerSideBar.style.display = 'none'
        contentBody.classList.remove('ml-48')
        contentBody.classList.add('ml-[4.5rem]')
    }
}

closeSideBarButton.addEventListener('click',toggleSideBar);



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
    openButtons[i].addEventListener('click',(e) => {
        //console.log(openButtons[i].dataset.edit === 'true')
        if(openButtons[i].dataset.edit === 'true'){
            for(let i = 0 ; i < userText.length ; i ++ ){userText[i].innerHTML = 'Edit User'}
            if(document.getElementById('put-attribute') === null) userForm.innerHTML = '<input id="put-attribute" type="hidden" name="_method" value="PUT"> ' + userForm.innerHTML
            // const updateItem = window.item[openButtons[i].dataset.id]
            let updateItem = window.items[openButtons[i].dataset.id]
            console.log(updateItem )
            document.getElementById('firstname').value = updateItem['firstname'];
            document.getElementById('lastname').value = updateItem['lastname'];
            document.getElementById('firstname').value = updateItem['firstname'];
            document.getElementById('username').value = updateItem['username'];
            document.getElementById('email').value = updateItem['email'];
            document.getElementById('permission').value = updateItem['permission'];
            //document.getElementById('roles').value = updateItem['roles'];
            document.getElementById('mobile').value = updateItem['mobile'];
            document.getElementById('emplyeeID').value = updateItem['emplyeeID'];

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