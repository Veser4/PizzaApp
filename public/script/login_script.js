const input_userLogin = document.getElementById('userLogin');
const input_password = document.getElementById('password');
const error_block = document.querySelector('.form-error');
const error_text = document.querySelector('.form-error__text');

function onchangeFields () {
    input_userLogin.addEventListener('change', () => input_userLogin.classList.remove('error-field'));
    input_password.addEventListener('change', () => input_password.classList.remove('error-field'));
}

function emptyValidation (field) 
{
    if (field === '') {
        return false
    }
    return true
}

function emailValidation (value) 
{
    const EMAIL_REGEXP = /^(([^<>()[\].,;:\s@"]+(\.[^<>()[\].,;:\s@"]+)*)|(".+"))@(([^<>()[\].,;:\s@"]+\.)+[^<>()[\].,;:\s@"]{2,})$/iu;
    return EMAIL_REGEXP.test(value);
}

function phoneValidation (value)
{
    const regex = /^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$/;
     return regex.test(value);
}

function passwordValidation(password) {
    const hasUppercase = /(.*[A-Z].*)/.test(password);
    const hasLowercase = /(.*[a-z].*)/.test(password);
    const hasNumbers = /(.*\d.*)/.test(password);
    if (!hasUppercase || !hasLowercase || password.length < 8 || !hasNumbers) {
      return false;
    }
    return true;
  }

function validateField (field, flag)
{
    if (flag) 
    {
        field.classList.remove('error-field');
        error_block.classList.add('hidden');
        return true
    }
    field.classList.add('error-field');
    error_block.classList.remove('hidden');
    return false
}

function formValidate (form) 
{
    
    if (
        validateField(input_userLogin, emptyValidation(input_userLogin.value)) &&
        (validateField(input_userLogin, emailValidation(input_userLogin.value)) ||
        validateField(input_userLogin, phoneValidation(input_userLogin.value))) && 
        validateField(input_password, passwordValidation(input_password.value))
    )  
    {
        return true;
    } 
    error_text.textContent = 'Error field';
    return false
}

window.addEventListener("DOMContentLoaded", () => {
    onchangeFields();
    const registrate_form = document.getElementById('form');
    registrate_form.onsubmit = async e => {
        e.preventDefault();
        const formData = new FormData(e.target);
        formData.set('password', md5(formData.get('password')));
        if (formValidate(registrate_form)) 
        {
            let response = await fetch('/user/login', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify({
                    'userLogin': formData.get('userLogin'),
                    'password': formData.get('password'),
                }),
            });
            let url = await response.url;
            let status = await response.status;
            if (status === 406)
            {   
                error_text.textContent = 'Check your email/phone or password';
                error_block.classList.remove('hidden');
            } 
            if (status === 200)
            {
                document.location.href = url;
            }
        }
    }
})