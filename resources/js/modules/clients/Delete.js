$(document).on('click', '.btnDelete', function () {
    var userId = $(this).data('id');
    const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
    Swal.fire({
        title: '¿Estás seguro?',
        text: 'Esta acción es irreversible',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Sí, eliminar!'
    }).then((result) => {
        if (result.isConfirmed) {
            axios.delete(deleteUrl.replace(':id', userId), {
                headers: {
                    'X-CSRF-TOKEN': csrfToken,
                    'X-Requested-With': 'XMLHttpRequest',
                    'Accept': 'application/json'
                }
            })

                .then((response) => {
                    Swal.fire({
                        title: '¡Eliminando!',
                        message: response.data.message,
                        icon: 'success',
                    }).then(() => {
                        window.location = returnUrl
                    })
                })
                .catch((error) => {
                    console.log(error)
                    Swal.fire(
                        '¡Error!',
                        'Ocurrió un error al eliminar el registro',
                        'error'
                    );
                });
        }
    });
});