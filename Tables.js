let dataTable;
let dataTableIsInitialized = false;

const dataTableOptions = {
    //scrollX: "2000px",
    lengthMenu: [5, 10, 15, 20, 100, 200, 500],
    columnDefs: [
        { className: "centered", targets: [0, 1] },//funcion para centrar los datos
        { searchable: false, targets: [1] }
    ],
    pageLength: 3,
    destroy: true,
    language: {
        lengthMenu: "Mostrar _MENU_ registros por página",
        zeroRecords: "Ningún formulario encontrado",
        info: "Mostrando de _START_ a _END_ de un total de _TOTAL_ registros",
        infoEmpty: "Ningún formulario encontrado",
        infoFiltered: "(filtrados desde _MAX_ registros totales)",
        search: "Buscar:",
        loadingRecords: "Cargando...",
        paginate: {
            first: "Primero",
            last: "Último",
            next: "Siguiente",
            previous: "Anterior"
        }
    }
};

const initDataTable = async () => {
    if (dataTableIsInitialized) {
        dataTable.destroy();//con esta parte volver a inicializar la tabla
    }

    await listForm();

    dataTable = $("#datatable_form").DataTable(dataTableOptions);

    dataTableIsInitialized = true;
};
//este método agrega los formularios
const listForm= async () => {
    try {
    const response = await fetch("/"); //Aqui va la ruta de donde extraen los datos
        const form = await response.json(); // aqui envian los formularios
        //apartir de aqui es donde se van a crear las filas con solamente dos columnas 
        let content = ``;
        form.forEach((form, index) => {
            content += `
                <tr>
                    <td>${index + 1}</td>
                    <td>${form.nombre}</td>
                </tr>`;
        });
        tableBody_form.innerHTML = content;
    } catch (ex) {
        alert(ex);
    }
};

window.addEventListener("load", async () => {
    await initDataTable();
});
