function Persona(nombre, edad, genero) {
  this.nombre = nombre;
  this.edad = edad;
  this.genero = genero;
};

Persona.prototype.saludar = function() {
  alert('¡Hola! me llamo ' + this.nombre + '.');
};
