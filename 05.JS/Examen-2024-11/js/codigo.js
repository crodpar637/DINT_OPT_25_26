"use strict";

// main
var oGestor = new GestorLibreria();
var idgenero = 0;

registrarEventos();

function registrarEventos() {
    // Opciones de menú
  document
    .querySelector("#mnuCrearLibro")
    .addEventListener("click", mostrarFormularios);
  document
    .querySelector("#mnuListado")
    .addEventListener("click", mostrarFormularios);

    // Botones
    frmCrearLibro.btnCrearLibro.addEventListener("click",procesarCrearLibro);
    frmListado.btnListado.addEventListener("click",procesarListado);
}

function mostrarFormularios(oEvento) {
  let opcion = oEvento.target.id;

  ocultarFormularios();

  switch (opcion) {
    case "mnuCrearLibro":
      frmCrearLibro.classList.remove("d-none");
      break;
    case "mnuListado":
      frmListado.classList.remove("d-none");
      break;
  }

  cargarDesplegables();
}

function ocultarFormularios() {
  frmCrearLibro.classList.add("d-none");
  frmListado.classList.add("d-none");
}

async function cargarDesplegables() {
  let respuesta = await oGestor.getGeneros();

  if (respuesta.ok) {
    let options = "";
    for (let fila_genero of respuesta.datos) {
        options += "<option value='" + fila_genero.idgenero + "'>";
        options += fila_genero.genero + "</option>";
    }

    frmCrearLibro.lstGenero.innerHTML = options;
    frmListado.lstGenero.innerHTML = options;

  } else {
    alert(respuesta.mensaje);
  }
}

async function procesarCrearLibro(){
    let titulo = frmCrearLibro.txtTitulo.value.trim();
    let autor = frmCrearLibro.txtAutor.value.trim();
    let descripcion = frmCrearLibro.txtDescripcion.value.trim();
    let imagen = frmCrearLibro.txtImagen.value.trim();
    let idgenero = frmCrearLibro.lstGenero.value;

    // constructor(idlibro, idgenero, titulo, autor, descripcion, imagen)
    let libro = new Libro(null, idgenero,titulo, autor,descripcion,imagen);

    let respuesta = await oGestor.crearLibro(libro);

    alert(respuesta.mensaje);

    if(respuesta.ok){
        frmCrearLibro.reset();
        frmCrearLibro.classList.add("d-none");
    }
}

function procesarListado(){
   open("tarjetas.html");
   idgenero = frmListado.lstGenero.value;
}
