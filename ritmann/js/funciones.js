//siempre poner
var x;
x=$(document);
x.ready(inicializarEventos);

function inicializarEventos()
{
var x;
x=$("#btn3");
x.click(body1);
x.click(cabecera);
x.click(pie);
x.click(cuerpo);
x.click(menu);
x.click(boton);
x.click(table);
x.click(titulo);
x.click(pie2);
x.click(link2);
x.click(td);
x.click(letras);
x.click(hover);
x.click(hoverboton);

}

function body1()
{
var c=document.tempoarada.fondo.value;
var x;
x=$("body");
x.css("background-color","#"+c+"");
}

function cabecera()
{
var c=document.tempoarada.cabecera.value;
var x;
x=$("#cabecera");
x.css("background-color","#"+c+"");
	
}

function pie()
{
var c=document.tempoarada.cabecera.value;
var x;
x=$("#piecafe");
x.css("background-color","#"+c+"");
	
}

function cuerpo()
{
var c=document.tempoarada.cuerpo.value;
var x;
x=$("#cuerpo");
x.css("background-color","#"+c+"");
	
}


function menu()
{
var c=document.tempoarada.cuerpo.value;
var x;
x=$("#cabecera1");
x.css("background-color","#"+c+"");
	
}

function boton()
{
	
var c=document.tempoarada.boton.value;
var t=document.tempoarada.textboton.value;
var x;
x=$(".button");
x.css("background-color","#"+c+"");
x.css("color","#"+t+"");
	
}


function table()
{
	
var c=document.tempoarada.tabla.value;

var x;
x=$("table");
x.css("background-color","#"+c+"");


	
}

function titulo()
{
	
var c=document.tempoarada.Titulos.value;

x=$(".titulo");
x.css("color","#"+c+"");
x=$(".titulo1");
x.css("color","#"+c+"");


}

function pie2()
{
var c=document.tempoarada.cadorno.value;
var x;
x=$("#pienaranja");
x.css("background-color","#"+c+"");		
}


function link2()
{
	
var c=document.tempoarada.cadorno.value;
var x;
x=$("#link2");
x.css("color","#"+c+"");
x.css("a {color","#"+c+"}");

}

function td()
{
var c=document.tempoarada.textgeneral.value;
var x;
x=$("td");
x.css("color","#"+c+"");	

}

function letras()
{
	
var c=document.tempoarada.textgeneral.value;
var x;
x=$("label");
x.css("color","#"+c+"");	

}



function hover()
{
var x;
x=$("tr");
x.hover(entratabla,saletabla);
}
function entratabla()
{
var c=document.tempoarada.eftablas.value;
$(this).css("background-color","#"+c+"");
}
function saletabla()
{
var c=document.tempoarada.tabla.value;
$(this).css("background-color","#"+c+"");
}



function hoverboton()
{
var x;
x=$(".button");
x.hover(entrab,saleb);
}
function entrab()
{
var c=document.tempoarada.efectboton.value;
$(this).css("background-color","#"+c+"");
}
function saleb()
{
var c=document.tempoarada.boton.value;
$(this).css("background-color","#"+c+"");
}

