const from = document.querySelector('#form-task');

from.addEventListener('submit', (e)=> {
    e.preventDefault();

    const title = document.querySelector('title-input').value;
    const description = document.querySelector('#description-input').value;

    fetch('/tasks',{
        method:'POST',
        headers:{'Content-Type':'application/json'},
        body:JSON.stringify({title,description})
    })
    .then(Response => Response.json())
    .then(data => console.log(data))
    .then(error => console.error(error));
})
