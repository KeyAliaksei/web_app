document.addEventListener("DOMContentLoaded", ()=>{
    const form = document.getElementById('formReg');
    form.addEventListener('submit', (e) => {
        e.preventDefault();
        const currentForm = e.currentTarget;
        console.log('Form submited');

        let xhr = new XMLHttpRequest();
        xhr.open("POST", "/web_app/registration/register");
        xhr.setRequestHeader("Accept", "application/json");
        xhr.setRequestHeader("Content-Type", "application/json");

        xhr.onreadystatechange = function () {
            if (xhr.readyState === 4) {
                console.log(xhr.status);
                console.log(xhr.responseText);
                window.location.href="/web_app/account";
            }};

        let data = {
                  "name": document.getElementById("name").value,
                  "surname": document.getElementById("surname").value,
                  "email": document.getElementById("email").value,
                  "login": document.getElementById("login").value,
                  "password": document.getElementById("password").value,
                };

        xhr.send(JSON.stringify(data));
    })
})
