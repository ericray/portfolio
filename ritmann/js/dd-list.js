
function fillCategory(){ 
 // this function is used to fill the category list on load
addOption(document.tempoarada.Mes, "01", "Enero", "");
addOption(document.tempoarada.Mes, "02", "Febrero", "");
addOption(document.tempoarada.Mes, "03", "Marzo", "");
addOption(document.tempoarada.Mes, "04", "Abril", "");
addOption(document.tempoarada.Mes, "05", "Mayo", "");
addOption(document.tempoarada.Mes, "06", "Junio", "");
addOption(document.tempoarada.Mes, "07", "Julio", "");
addOption(document.tempoarada.Mes, "08", "Agosto", "");
addOption(document.tempoarada.Mes, "09", "Septiembre", "");
addOption(document.tempoarada.Mes, "10", "Octubre", "");
addOption(document.tempoarada.Mes, "11", "Noviembre", "");
addOption(document.tempoarada.Mes, "12", "Diciembre", "");





addOption(document.tempoarada.Mes2, "01", "Enero", "");
addOption(document.tempoarada.Mes2, "02", "Febrero", "");
addOption(document.tempoarada.Mes2, "03", "Marzo", "");
addOption(document.tempoarada.Mes2, "04", "Abril", "");
addOption(document.tempoarada.Mes2, "05", "Mayo", "");
addOption(document.tempoarada.Mes2, "06", "Junio", "");
addOption(document.tempoarada.Mes2, "07", "Julio", "");
addOption(document.tempoarada.Mes2, "08", "Agosto", "");
addOption(document.tempoarada.Mes2, "09", "Septiembre", "");
addOption(document.tempoarada.Mes2, "10", "Octubre", "");
addOption(document.tempoarada.Mes2, "11", "Noviembre", "");
addOption(document.tempoarada.Mes2, "12", "Diciembre", "");

}

function SelectSubCat(){
// ON selection of category this function will work

removeAllOptions(document.tempoarada.dia);
addOption(document.tempoarada.dia, "", "Dia", "");


if(document.tempoarada.Mes.value == '01'){
var c=1;	
for (c;c<=31;c++)
{	
if(c==1 || c==2 || c==3 || c==4 || c==5 || c==6 || c==7 || c==8 || c==9)
{ addOption(document.tempoarada.dia,"0"+c+"", "0"+c+"");}
else{addOption(document.tempoarada.dia,""+c+"", ""+c+"");}
	
};
}



if(document.tempoarada.Mes.value == '02'){
var c=1;	
for (c;c<=28;c++)
{	
if(c==1 || c==2 || c==3 || c==4 || c==5 || c==6 || c==7 || c==8 || c==9)
{ addOption(document.tempoarada.dia,"0"+c+"", "0"+c+"");}
else{addOption(document.tempoarada.dia,""+c+"", ""+c+"");}
	
};
}


if(document.tempoarada.Mes.value == '03'){
var c=1;	
for (c;c<=31;c++)
{	
if(c==1 || c==2 || c==3 || c==4 || c==5 || c==6 || c==7 || c==8 || c==9)
{ addOption(document.tempoarada.dia,"0"+c+"", "0"+c+"");}
else{addOption(document.tempoarada.dia,""+c+"", ""+c+"");}
	
};
}

if(document.tempoarada.Mes.value == '04'){
var c=1;	
for (c;c<=30;c++)
{	
if(c==1 || c==2 || c==3 || c==4 || c==5 || c==6 || c==7 || c==8 || c==9)
{ addOption(document.tempoarada.dia,"0"+c+"", "0"+c+"");}
else{addOption(document.tempoarada.dia,""+c+"", ""+c+"");}
	
};
}


if(document.tempoarada.Mes.value == '05'){
var c=1;	
for (c;c<=31;c++)
{	
if(c==1 || c==2 || c==3 || c==4 || c==5 || c==6 || c==7 || c==8 || c==9)
{ addOption(document.tempoarada.dia,"0"+c+"", "0"+c+"");}
else{addOption(document.tempoarada.dia,""+c+"", ""+c+"");}
	
};
}

if(document.tempoarada.Mes.value == '06'){
var c=1;	
for (c;c<=30;c++)
{	
if(c==1 || c==2 || c==3 || c==4 || c==5 || c==6 || c==7 || c==8 || c==9)
{ addOption(document.tempoarada.dia,"0"+c+"", "0"+c+"");}
else{addOption(document.tempoarada.dia,""+c+"", ""+c+"");}
	
};
}


if(document.tempoarada.Mes.value == '07'){
var c=1;	
for (c;c<=31;c++)
{	
if(c==1 || c==2 || c==3 || c==4 || c==5 || c==6 || c==7 || c==8 || c==9)
{ addOption(document.tempoarada.dia,"0"+c+"", "0"+c+"");}
else{addOption(document.tempoarada.dia,""+c+"", ""+c+"");}
	
};
}


if(document.tempoarada.Mes.value == '08'){
var c=1;	
for (c;c<=31;c++)
{	
if(c==1 || c==2 || c==3 || c==4 || c==5 || c==6 || c==7 || c==8 || c==9)
{ addOption(document.tempoarada.dia,"0"+c+"", "0"+c+"");}
else{addOption(document.tempoarada.dia,""+c+"", ""+c+"");}
	
};
}

if(document.dtempoarada.Mes.value == '09'){
var c=1;	
for (c;c<=30;c++)
{	
if(c==1 || c==2 || c==3 || c==4 || c==5 || c==6 || c==7 || c==8 || c==9)
{ addOption(document.tempoarada.dia,"0"+c+"", "0"+c+"");}
else{addOption(document.tempoarada.dia,""+c+"", ""+c+"");}
	
};
}

if(document.tempoarada.Mes.value == '10'){
var c=1;	
for (c;c<=31;c++)
{	
if(c==1 || c==2 || c==3 || c==4 || c==5 || c==6 || c==7 || c==8 || c==9)
{ addOption(document.tempoarada.dia,"0"+c+"", "0"+c+"");}
else{addOption(document.tempoarada.dia,""+c+"", ""+c+"");}
	
};
}

if(document.tempoarada.Mes.value == '11'){
var c=1;	
for (c;c<=30;c++)
{	
if(c==1 || c==2 || c==3 || c==4 || c==5 || c==6 || c==7 || c==8 || c==9)
{ addOption(document.tempoarada.dia,"0"+c+"", "0"+c+"");}
else{addOption(document.tempoarada.dia,""+c+"", ""+c+"");}
	
};
}

if(document.tempoarada.Mes.value == '12'){
var c=1;	
for (c;c<=31;c++)
{	
if(c==1 || c==2 || c==3 || c==4 || c==5 || c==6 || c==7 || c==8 || c==9)
{ addOption(document.tempoarada.dia,"0"+c+"", "0"+c+"");}
else{addOption(document.tempoarada.dia,""+c+"", ""+c+"");}
	
};
}



}




function SelectSubCate(){
// ON selection of category this function will work

removeAllOptions(document.tempoarada.dia2);
addOption(document.tempoarada.dia2, "", "Dia", "");





if(document.tempoarada.Mes2.value == '01'){
var c=1;	

for (c;c<=31;c++)
{	
if(c==1 || c==2 || c==3 || c==4 || c==5 || c==6 || c==7 || c==8 || c==9)
{ addOption(document.tempoarada.dia2,"0"+c+"", "0"+c+"");}
else{addOption(document.tempoarada.dia2,""+c+"", ""+c+"");}
	
};
}



if(document.tempoarada.Mes2.value == '02'){
var c=1;	
for (c;c<=28;c++)
{	
if(c==1 || c==2 || c==3 || c==4 || c==5 || c==6 || c==7 || c==8 || c==9)
{ addOption(document.tempoarada.dia2,"0"+c+"", "0"+c+"");}
else{addOption(document.tempoarada.dia2,""+c+"", ""+c+"");}
	
};
}


if(document.tempoarada.Mes2.value == '03'){
var c=1;	
for (c;c<=31;c++)
{	
if(c==1 || c==2 || c==3 || c==4 || c==5 || c==6 || c==7 || c==8 || c==9)
{ addOption(document.tempoarada.dia2,"0"+c+"", "0"+c+"");}
else{addOption(document.tempoarada.dia2,""+c+"", ""+c+"");}
	
};
}

if(document.tempoarada.Mes2.value == '04'){
var c=1;	
for (c;c<=30;c++)
{	
if(c==1 || c==2 || c==3 || c==4 || c==5 || c==6 || c==7 || c==8 || c==9)
{ addOption(document.tempoarada.dia2,"0"+c+"", "0"+c+"");}
else{addOption(document.tempoarada.dia2,""+c+"", ""+c+"");}
	
};
}


if(document.tempoarada.Mes2.value == '05'){
var c=1;	
for (c;c<=31;c++)
{	
if(c==1 || c==2 || c==3 || c==4 || c==5 || c==6 || c==7 || c==8 || c==9)
{ addOption(document.tempoarada.dia2,"0"+c+"", "0"+c+"");}
else{addOption(document.tempoarada.dia2,""+c+"", ""+c+"");}
	
};
}

if(document.tempoarada.Mes2.value == '06'){
var c=1;	
for (c;c<=30;c++)
{	
if(c==1 || c==2 || c==3 || c==4 || c==5 || c==6 || c==7 || c==8 || c==9)
{ addOption(document.tempoarada.dia2,"0"+c+"", "0"+c+"");}
else{addOption(document.tempoarada.dia2,""+c+"", ""+c+"");}
	
};
}


if(document.tempoarada.Mes2.value == '07'){
var c=1;	
for (c;c<=31;c++)
{	
if(c==1 || c==2 || c==3 || c==4 || c==5 || c==6 || c==7 || c==8 || c==9)
{ addOption(document.tempoarada.dia2,"0"+c+"", "0"+c+"");}
else{addOption(document.tempoarada.dia2,""+c+"", ""+c+"");}
	
};
}


if(document.tempoarada.Mes2.value == '08'){
var c=1;	
for (c;c<=31;c++)
{	
if(c==1 || c==2 || c==3 || c==4 || c==5 || c==6 || c==7 || c==8 || c==9)
{ addOption(document.tempoarada.dia2,"0"+c+"", "0"+c+"");}
else{addOption(document.tempoarada.dia2,""+c+"", ""+c+"");}
	
};
}

if(document.dtempoarada.Mes2.value == '09'){
var c=1;	
for (c;c<=30;c++)
{	
if(c==1 || c==2 || c==3 || c==4 || c==5 || c==6 || c==7 || c==8 || c==9)
{ addOption(document.tempoarada.dia2,"0"+c+"", "0"+c+"");}
else{addOption(document.tempoarada.dia2,""+c+"", ""+c+"");}
	
};
}

if(document.tempoarada.Mes2.value == '10'){
var c=1;	
for (c;c<=31;c++)
{	
if(c==1 || c==2 || c==3 || c==4 || c==5 || c==6 || c==7 || c==8 || c==9)
{ addOption(document.tempoarada.dia2,"0"+c+"", "0"+c+"");}
else{addOption(document.tempoarada.dia2,""+c+"", ""+c+"");}
	
};
}

if(document.tempoarada.Mes2.value == '11'){
var c=1;	
for (c;c<=30;c++)
{	
if(c==1 || c==2 || c==3 || c==4 || c==5 || c==6 || c==7 || c==8 || c==9)
{ addOption(document.tempoarada.dia2,"0"+c+"", "0"+c+"");}
else{addOption(document.tempoarada.dia2,""+c+"", ""+c+"");}
	
};
}

if(document.tempoarada.Mes2.value == '12'){
var c=1;	
for (c;c<=31;c++)
{	
if(c==1 || c==2 || c==3 || c==4 || c==5 || c==6 || c==7 || c==8 || c==9)
{ addOption(document.tempoarada.dia2,"0"+c+"", "0"+c+"");}
else{addOption(document.tempoarada.dia2,""+c+"", ""+c+"");}
	
};
}





}



////////////////// 

function removeAllOptions(selectbox)
{
	var i;
	for(i=selectbox.options.length-1;i>=0;i--)
	{
		//selectbox.options.remove(i);
		selectbox.remove(i);
	}
}


function addOption(selectbox, value, text )
{
	var optn = document.createElement("OPTION");
	optn.text = text;
	optn.value = value;

	selectbox.options.add(optn);
}
