const email = document.getElementById('email')
const about = document.getElementById('about')
const message = document.getElementById('message')
const contactForm = document.getElementById('ContactForm')
const error = document.getElementById('error')

const expresionsValidation = {
    mail: /^[a-zA-Z0-9_.+-]+@[a-zA-Z]+\.[a-zA-Z0-0-.]+$/,
    about: /^[a-zA-ZÀ-ÿ\s]+$/,
    message: /^[a-zA-ZÀ-ÿ\s]+$/
}

const formValidate = (e) => {
    switch(e.target.name){
        case 'email':
            validation(expresionsValidation.mail, e.target, 'email', 'Escriba bien su correo')
        break;
        case 'about':
            validation(expresionsValidation.about, e.target, 'about', 'Este campo solo admite letras')
        break;
        case 'message':
            validation(expresionsValidation.message, e.target, 'message', 'Este campo solo admite letras')
        break;
    }
}

const validation = (expresion, input, campo, msg)=>{
    if(expresion.test(input.value)){
        document.getElementById(`group${campo}`).classList.remove('groupIncorrect')
        document.getElementById(`group${campo}`).classList.add('groupCorrect')
        document.getElementById(`campoerror${campo}`).innerHTML = ''
    }
    else{
        document.getElementById(`group${campo}`).classList.add('groupIncorrect')
        document.getElementById(`group${campo}`).classList.remove('groupCorrect')
        document.getElementById(`campoerror${campo}`).innerHTML = msg
        if(input.value == ''){
            document.getElementById(`campoerror${campo}`).innerHTML = 'Este campo no puede estar vacio'
        }
    }
}

email.addEventListener('keyup', formValidate)
email.addEventListener('blur', formValidate)
about.addEventListener('keyup', formValidate)
about.addEventListener('blur', formValidate)
message.addEventListener('keyup', formValidate)
message.addEventListener('blur', formValidate)

contactForm.addEventListener('submit', e => {
    if(email.value == '' || about.value == '' || message.value == ''){
        e.preventDefault()
        error.innerHTML = '<p class="msgError">Por favor llena todos los campos!</p>'

        setTimeout(() => {
            error.innerHTML = ''
        }, 3000)
    }
    else if(!expresionsValidation.mail.test(email.value) || !expresionsValidation.about.test(about.value) || !expresionsValidation.message.test(message.value) ){
        e.preventDefault()
        error.innerHTML = '<p class="msgError">Por favor asegurate de que tus campos son validos!</p>'

        setTimeout(() => {
            error.innerHTML = ''
        }, 3000)
    }
    else{
        setTimeout(() => {
            error.innerHTML = '<p class="msgSuccess">Mensaje enviado exitosamente!</p>'
        }, 2000)
    }
})
