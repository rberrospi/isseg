$(document).ready(function(){function gotoform(modalidad){posform=$("#form").offset();if(modalidad!=""){$("select[name='modalidad']").val(modalidad);}
window.scrollTo(posform.left,posform.top);}
function calcular_ubicacion_proximos(){if($(window).width()<=800){if($(".proximos-lateral").html()!=""){$(".proximos-central").html($(".proximos-lateral").html());}
$(".proximos-lateral").html("");}else{if($(".proximos-central").html()!=""){$(".proximos-lateral").html($(".proximos-central").html());}
$(".proximos-central").html("");}}
calcular_ubicacion_proximos();$(window).resize(function(){calcular_ubicacion_proximos();if($(window).width()<=800){$(".gotoform").click(function(){gotoform($(this).attr("data-modalidad"));});}});$('.mov-menu').click(function(){$('.menu').slideToggle();});$('#m-present').click(function(){pos=$("#presentacion").offset();window.scrollTo(pos.left,pos.top);$('.menu').slideToggle();});$('#m-datos').click(function(){pos=$("#datostaller").offset();window.scrollTo(pos.left,pos.top);$('.menu').slideToggle();});$('#m-form').click(function(){pos=$("#form").offset();window.scrollTo(pos.left,pos.top);$('.menu').slideToggle();});$('#m-cont').click(function(){pos=$("#contenido").offset();window.scrollTo(pos.left,pos.top);$('.menu').slideToggle();});$('#m-ponen').click(function(){pos=$("#ponentes").offset();window.scrollTo(pos.left,pos.top);$('.menu').slideToggle();});$('#m-prox').click(function(){pos=$("#proximos").offset();window.scrollTo(pos.left,pos.top);$('.menu').slideToggle();});var didScroll;var lastScrollTop=0;var delta=5;var navbarHeight=$('header').outerHeight();$(window).scroll(function(event){if($(window).width()<=800){didScroll=true;}});setInterval(function(){if(didScroll){hasScrolled();didScroll=false;}},250);function hasScrolled(){var st=$(this).scrollTop();if(Math.abs(lastScrollTop- st)<=delta)
return;if(st>lastScrollTop&&st>navbarHeight){$('.menu').slideUp(function(){$('header').removeClass('nav-down').addClass('nav-up');});}else{if(st+ $(window).height()<$(document).height()){$('header').removeClass('nav-up').addClass('nav-down');}}
lastScrollTop=st;}
if($(window).width()<=800){$(".gotoform").click(function(){gotoform($(this).attr("data-modalidad"));});}});function validacion_form(){f=document.forms.main;f.nombre.value.search(/^\D+$/)==-1?(alert("Por favor, introduce tu nombre"),f.nombre.focus()):f.apellido1.value.search(/^\D+$/)==-1?(alert("Por favor, introduce tu primer apellido"),f.apellido1.focus()):f.documento.value.search(/\S/)==-1?(alert("Por favor, introduce tu NIF/Pasaporte"),f.documento.focus()):f.email.value.search(/^\w+([-+.]\w+)*@\w+([-.]\w+)*\.[a-z]{2,}$/i)==-1?(alert("Por favor, introduce el email"),f.email.focus()):f.telefono.value.search(/^\+?[0-9]{5,}$/)==-1?(alert("Por favor, introduce el telefono (sin espacios)"),f.telefono.focus()):f.id_pais.selectedIndex==0?(alert("Por favor, selecciona el pais"),f.id_pais.focus()):f.curso.value=='0'?(alert("Por favor, selecciona la formacion"),f.curso.focus()):$("#modalidad").length>0&&f.modalidad.selectedIndex==0?(alert("Por favor, selecciona la modalidad"),f.modalidad.focus()):!(f.perfil_nuevo.checked||f.perfil_alumno.checked||f.perfil_alumni.checked)?(alert("Por favor, indica si eres alumno"),f.perfil_nuevo.focus()):f.condiciones.checked==false?(alert("Falta aceptar las condiciones"),f.condiciones.focus()):f.submit();}