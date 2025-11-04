"use strict";

class Libro {
  #idlibro;
  #idgenero;
  #titulo;
  #autor;
  #descripcion;
  #imagen;

  constructor(idlibro, idgenero, titulo, autor, descripcion, imagen) {
    this.#idlibro = idlibro;
    this.#idgenero = idgenero;
    this.#titulo = titulo;
    this.#autor = autor;
    this.#descripcion = descripcion;
    this.#imagen = imagen;
  }

  get idlibro() {
    return this.#idlibro;
  }
  get idgenero() {
    return this.#idgenero;
  }
  get titulo() {
    return this.#titulo;
  }
  get autor() {
    return this.#autor;
  }
  get descripcion() {
    return this.#descripcion;
  }
  get imagen() {
    return this.#imagen;
  }
  set idlibro(valor) {
    this.#idlibro = valor;
  }
  set idgenero(valor) {
    this.#idgenero = valor;
  }
  set titulo(valor) {
    this.#titulo = valor;
  }
  set autor(valor) {
    this.#autor = valor;
  }
  set descripcion(valor) {
    this.#descripcion = valor;
  }
  set imagen(valor) {
    this.#imagen = valor;
  }

  toJSON() {
    return {
      idlibro: this.#idlibro,
      idgenero: this.#idgenero,
      titulo: this.#titulo,
      autor: this.#autor,
      descripcion: this.#descripcion,
      imagen: this.#imagen,
    };
  }
}

class Genero {
  #idgenero;
  #genero;

  constructor(idgenero, genero) {
    this.#idgenero = idgenero;
    this.#genero = genero;
  }

  get idgenero() {
    return this.#idgenero;
  }
  get genero() {
    return this.#genero;
  }
  set idgenero(valor) {
    this.#idgenero = valor;
  }
  set genero(valor) {
    this.#genero = valor;
  }
  toJSON() {
    return {
      idgenero: this.#idgenero,
      genero: this.#genero,
    };
  }
}

class GestorLibreria {
  async crearLibro(oLibro) {
    let datos = new FormData();

    datos.append("libro", JSON.stringify(oLibro));

    let respuesta = await peticionPOST("crear_libro.php", datos);

    return respuesta;
  }
  async getLibrosGenero(idgenero) {
    let datos = new FormData();

    datos.append("idgenero", idgenero);

    let respuesta = await peticionGET("get_libros_genero.php", datos);

    return respuesta;
  }
  async getGeneros() {
    let datos = new FormData();

    let respuesta = await peticionGET("get_generos.php", datos);

    return respuesta;
  }
}
