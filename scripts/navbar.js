    fetch('/My-first-website/pages/navbar.html')
    .then(response => response.text())
    .then(data => {
        document.body.insertAdjacentHTML('afterbegin', data);
    })
