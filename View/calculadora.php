<HTML>
<HEAD>

<script src="../Controller/scripts/suma.js"></script>
<script src="../Controller/scripts/resta.js"></script>
<script src="../Controller/scripts/multiplicacion.js"></script>
<script src="../Controller/scripts/division.js"></script>
<script>


function pre(e){
e.preventDefault();
}

function procesar(operacion){

var a = parseInt(window.document.getElementById("a").value);
var b = parseInt(window.document.getElementById("b").value);

switch(operacion) {
  case "suma":
	r = suma(a,b);
	window.document.getElementById("operador").innerHTML="<h1>+</h1>";
    break;
  case "resta":
    	r = resta(a,b);
window.document.getElementById("operador").innerHTML="<h1>-</h1>";
    break;
  case "multiplicacion":
    	r = multiplicacion(a,b);
window.document.getElementById("operador").innerHTML="<h1>*</h1>";
    break;
  case "division":
    	r = division(a,b);
window.document.getElementById("operador").innerHTML="<h1>/</h1>";
    break;
  default:
    // code block
} 

window.document.getElementById("resultado").innerHTML="<h1>"+r+"</h1>";
}

</script>
</HEAD>

<body>
<?php
session_start();
ini_set('display_errors', 'On');
error_reporting(E_ALL);
require('../Model/db.php');
$db = new db();

  $query='SELECT id,nombre_real FROM Usuarios WHERE username=\''.$_SESSION["k_username"].'\'';
  
  $result = $db->db->query($query);
  
$row = $result->fetch_array();

  echo "<H1> Hola ".$row["nombre_real"]."</H1>"; 
?>  


<H1> Este es mi primer programa web </H1>
<p> El siguiente codigo es una calculadora basica </p>
<form onsubmit="pre(event);"> 

<input id="a" type="number"> </input> 

<div id="operador"><H1>?</H1></div> 

<input id="b" type="number"></input>
<button onclick="procesar('suma')"> Sumar </button>

<button onclick="procesar('resta')"> Restar </button>

<button onclick="procesar('multiplicacion')"> Multiplicar </button>
<button onclick="procesar('division')"> Dividir </button>
</form>
<H1>=</H1>
<div id="resultado">

</div>
</body>
</HTML>
