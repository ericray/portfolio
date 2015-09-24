/*jslint browser: true*/
/*global $, jQuery, FormData, alert, console*/

/* =================== Load ====================*/

$(document).ready(function(e){
	$(".sidebar-form").loadAjax({
		callback: function(datos){
			$("#resultado").html(datos);
		}
	});
});

/* ==========================  Plugin  ==========================*/
(function ($) {
	
    "use strict";
	$.fn.extend({
		cancel : function () {
			return this.each(function () {
				$(this).click(function (ev) {
					
					ev.preventDefault();
					var padreForm = $(this).parents('form');
					var idPadreForm = padreForm.attr('id');
					var url = $("#" + idPadreForm).attr('action');
					window.location = url;
				});
			});
		},
        loadAjax : function (options) {
			
			var $this,frm,idFrm,action,method,datos,isValid;
			
			var defaults =
			{
				isValidator     : false,
				idCapaOverlay   : 'box',
				idCapaLoading   : 'formulario',	
				callback        : function(){}
			}
			var options = $.extend(defaults, options);
			
			return this.each(function () {
                				
				
				$(this).submit(function(ev){
					
					$('#msg').html('');
					
					$this = $(this)[0];
					frm   = $(this);
					idFrm  = frm.attr('id');
					action = frm.attr('action');
					method = frm.attr("method");
					datos  = new FormData($this);
					if(defaults.isValidator)
					{
						isValid = $("#" + idFrm).data('bootstrapValidator').isValid();
					}
					
					else
					{
						isValid = true;
					}
					
					ev.preventDefault();
					
					$.ajax({
						url  : action,
						data : datos,
						type : method,
						cache: false,
						contentType: false,
						processData: false,
						beforeSend: function(){
							
							if(isValid == true){
								
								$("#" + idFrm + " ."+defaults.idCapaOverlay).append("<div class=\'overlay\'></div>");
								$("#" + idFrm + " ."+defaults.idCapaLoading).append("<div class=\'loading-img\'></div>");
							}						
						},
						success: function(datos){
							

							if(isValid == true){
								
								console.log(datos);
								
								$('.overlay').remove();
								$('.loading-img').remove();					
								$('p.help-block').html('');
								
								//Implementado callback
								if(typeof defaults.callback == 'function'){
										defaults.callback.call(this,datos);
								}
	
							}
							else{ console.log('Mal'); }
						}
					});
					
				});
				
			});
		},
		autocompletar : function (url, display) {
			
            var $this, id;
            
			return this.each(function () {
				
				var cadena = [];
				
				$.getJSON(url, function (data) {
	
					$.each(data, function (index, val) {
					    cadena.push(val[display]);
					});
				});
				
				$this = $(this);
				id = $this.attr('id');
				
				$("#" + id).autocomplete({
					source: cadena
				});
				
			});
		}
	});
	
	
}(jQuery));



/* ===============================  Funciones normales ===========================*/

function cargarXIdJson(p_id,p_tabla,p_campo,p_url,callback,event)
{
	event.preventDefault();
	$.ajax({
		url : p_url,
		type:'POST',
		data:{ 
			id    : p_id,
			campo : p_campo,
			tabla : p_tabla
		},
		dataType:"json",
		success: function(data){
			
			datos = data;
			
			if(typeof callback == 'function'){
				callback.call(this,datos);
			}
		}
	});
}

function saludo(nombre,event)
{
	event.preventDefault();	
	alert(nombre);
	return false;
}

function cargar_pagina(capa,url)
{
	$(capa).load(url);
}

function cambio(id) {
    "use strict";
    alert('Hola '+id);
}

function pie_chart_js(data)
{
			window.onload = function(){
				var ctx = document.getElementById("chart-area").getContext("2d");
				window.myPie = new Chart(ctx).Pie(data);
			};
}

function sumar_columna(id_tabla,posicion_columna)
{
	var suma = 0;
	$("#"+id_tabla+" tr.dato").each(function(){
		suma += parseInt($(this).find("td").eq(posicion_columna).text()||0,10);
	});
	$("table#"+id_tabla).append("<tfoot><tr><td class='td_total'>"+suma+"</td><td colspan='3'></td></tr></tfoot>");
}