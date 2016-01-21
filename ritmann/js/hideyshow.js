var x;
x=$(document);
x.ready(inicializarEventos);

function inicializarEventos()
{

var x=$("#boton1");
x.click(ocultarRecuadro);
x.click(mostrarRecuadro2);
x=$("#boton2");
x.click(mostrarRecuadro);
x.click(ocultarRecuadro2);

}
function ocultarRecuadro()
{
var x=$("#listado");
x.hide("slow");
}
function mostrarRecuadro()
{
var x=$("#listado");
x.show("fast");
}

function ocultarRecuadro2()
{
var x=$("#formulario");
x.hide("slow");
}
function mostrarRecuadro2()
{
var x=$("#formulario");
x.show("fast");
}


function cargar()
{
var x=$("#formulario");
x.hide("fast");
}
