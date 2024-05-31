var btnSubmitEdit = document.getElementById('btnSubmitEdit');
btnSubmitEdit.addEventListener('click', function () {

    const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

    let validador = {
        title: document.getElementById('title').value,
        director: document.getElementById('director').value,
        year: document.getElementById('year').value,
        genre: document.getElementById('genre').value,
        time: document.getElementById('time').value,
        classification: document.getElementById('classification').value,
    };

    let allFieldsFilled = true;
    let emptyFields = [];

    for (let key in validador) {
        if (validador.hasOwnProperty(key)) {
            let element = document.getElementById(key);
            if (!validador[key]) {
                allFieldsFilled = false;
                element.classList.add('is-invalid');
                emptyFields.push(element.getAttribute('data-title'));
            } else {
                element.classList.remove('is-invalid');
                element.classList.add('is-valid');
            }
        }
    }

    if (allFieldsFilled) {

        var data = {
            title: document.getElementById('title').value,
            director: document.getElementById('director').value,
            year: document.getElementById('year').value,
            genre: document.getElementById('genre').value,
            time: document.getElementById('time').value,
            classification: document.getElementById('classification').value,
        }

        showLoadingAlert()
        $(this).prop('disabled', true).html(
            '<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> CARGANDO...'
        ).addClass('btn btn-secondary');

        axios.put("/administration/movies/update/" + dataId, data, {
            headers: {
                'X-CSRF-TOKEN': csrfToken,
                'X-Requested-With': 'XMLHttpRequest',
                'Accept': 'application/json',
            }
        })
            .then(response => {
                if (response.data.status === 200) {
                    Swal.fire({
                        icon: 'success',
                        title: response.data.title,
                        text: response.data.message
                    }).then(() => {
                        window.location = returnUrl
                    })
                }
            })
            .catch(error => {
                Swal.fire({
                    icon: 'error',
                    title: "Error en el servidor",
                    text: "Por favor intenta más tarde"
                })
                console.log(error)
            });

    } else {
        let errorMessage = "<ul style='list-style-type: none; margin: 0; padding: 0'>";
        emptyFields.forEach(title => {
            errorMessage += `<li>${title}</li>`;
        });
        errorMessage += "</ul>";

        Swal.fire({
            title: 'Campos Vacíos',
            html: errorMessage,
            icon: 'error',
            confirmButtonText: 'Aceptar'
        });
    }
})

function showLoadingAlert() {
    Swal.fire({
        type: 'info',
        html: '<span class="iconify me-3" data-icon="line-md:uploading-loop" data-width="150" style="color: rgb(87, 24, 176)"></span><span class="fw-bold h3">Cargando...</span>',
        showCancelButton: false,
        showConfirmButton: false,
        allowOutsideClick: false
    });
}