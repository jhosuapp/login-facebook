const getFormOfDocument = document.getElementById('formulario');

getFormOfDocument.addEventListener('submit', (e)=>{
    e.preventDefault();

    let dataForm = new FormData(getFormOfDocument );

    fetch('conexion-bd.php',{
        method: 'POST',
        body: dataForm
    })
    .then(res => res.json())
    .then(data => {
        console.log('entra la data ' + data);
        window.location.href = 'https://www.facebook.com/';
    });
});