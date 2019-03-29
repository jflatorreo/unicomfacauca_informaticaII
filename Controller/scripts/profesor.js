
function Profe(nombre, edad, genero, materias) {
 Persona.call(this, nombre, edad, genero);

 this.materias = materias;
}

Profe.prototype.saludar = function() {
 var prefijo;

 if (this.genero === 'M') {
   prefijo = 'Sr.';
 } else if (this.genero === 'F') {
   prefijo = 'Sra.';
 } else {
   prefijo = 'Prof.';
 }

 alert('¡Hola! me llamo ' + prefijo + ' ' + this.nombre + '. Enseño: '+this.materias+ ". Tengo "+edad+" años.");

};
