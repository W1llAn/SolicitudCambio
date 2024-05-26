 // Obtener la fecha actual
 const fechaActual = new Date();

 // Formatear la fecha
 const options = {
     year: 'numeric',
     month: 'long',
     day: 'numeric'
 };
 const fechaFormateada = fechaActual.toLocaleDateString('es-ES', options);

 // Insertar la fecha formateada en el elemento HTML
 const elementoFecha = document.getElementById('fechaSolicitud');
 elementoFecha.textContent = fechaFormateada;