document.addEventListener("DOMContentLoaded", ()=>{
    const form = document.getElementById('login');
    form.addEventListener('submit', (e) => {
        e.preventDefault();
        const currentForm = e.currentTarget;
        console.log('Form submited');

        let xhr = new XMLHttpRequest();
        xhr.open("POST", "/web_app/login/auth");
        xhr.setRequestHeader("Accept", "application/json");
        xhr.setRequestHeader("Content-Type", "application/json");

        xhr.onreadystatechange = function () {
            if (xhr.readyState === 4) {
                console.log(xhr.status);
                console.log(xhr.responseText);
            }};

        let data = `{
                  "inputLogin": ${document.getElementById("inputLogin").value},
                  "inputPassword": ${document.getElementById("inputPassword").value},
                }`;

        xhr.send(JSON.stringify(data));
    })
})