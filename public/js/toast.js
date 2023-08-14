function toast() {
    // Obtener el elemento del "toast"
    let toast = document.querySelector('.mess');
    // Aplicar la animación de desvanecimiento (fadeOut)
    toast.style.transition = 'opacity 0.5s';
    toast.style.opacity = '0';
    // Esperar un corto período de tiempo antes de eliminar el "toast"
    setTimeout(function() {
        toast.remove();
        // Obtener el elemento del input de email
        let emailInput = document.getElementById('email');
        // Desplazar suavemente el viewport hacia el input de email
        emailInput.scrollIntoView({ behavior: 'smooth' });
    }, 600); // Aquí puedes ajustar el tiempo de espera (500ms en este caso)
}
