function Persona(nombre, edad, genero) {
  this.nombre = nombre;
  this.edad = edad;
  this.genero = genero;
};

Persona.prototype.saludar = function() {
  alert('¡Hola! me llamo ' + this.nombre + '.');
};


function Profe(nombre, edad, genero, materias) {
 Persona.call(this, nombre, edad, genero);

 this.materias = materias;
}

Profe.prototype.saludar = function() {
 var prefijo;

 if (this.genero === 'M') {
   prefijo = 'Sr.';
 } else if (this.gender === 'female' || this.gender === 'Female' || this.gender === 'f' || this.gender === 'F') {
   prefijo = 'Sra.';
 } else {
   prefijo = 'Prof.';
 }

 alert('¡Hola! me llamo ' + prefijo + ' ' + this.nombre + '. Enseño:');
 for (i = 0; i < this.materias.length; i++)
 alert (this.materias[i]);
};
