$(document).ready(function(){function o(){var o=$("#dinamico-fecha").val();$(".texto-formulario").html(o),$(window).width()>=800?($(".exit").addClass("exit-x"),$(".ppc").hide(),$(".formulario").addClass("popup"),$("#popupatenuado").show(),$(".btn").addClass("popup-btn"),$(".fijo-btn").removeClass("fijoform"),$(".anuncio").addClass("anunciover"),$("#botonenviar").html("Infórmate ya"),$("#sdi_pdf").val("0")):a("#gotoform")}function a(o){posgoto=$(o).offset(),posgoto.top<e||$(window).width()<=550?altura_info_fixed=0:altura_info_fixed=80,window.scrollTo(posgoto.left,posgoto.top-altura_info_fixed)}if("1"==$("#soporte_ppc").val()){var i="";-1!=navigator.appVersion.indexOf("Win")?i="Windows":-1!=navigator.appVersion.indexOf("Mac")?i="MacOS":-1!=navigator.appVersion.indexOf("X11")?i="UNIX":-1!=navigator.appVersion.indexOf("Linux")&&(i="Linux"),$(document).mousemove(function(a){("Windows"==i&&a.pageX>$(document).width()-150||"MacOS"==i&&a.pageX<150)&&a.pageY<$(window).scrollTop()+50&&o()}),setTimeout(function(){o()},12e4)}var e=$(".wrapper").position().top;$(window).scroll(function(){$(window).scrollTop()>=e?"none"==$("#popupatenuado").css("display")&&$(".fijo-btn").addClass("fijoform"):$(".fijo-btn").removeClass("fijoform")}),$("#enlace_relacionadas").click(function(){a("#relacionadas")}),$(".span-formulario").click(function(){var o=$("#dinamico-fecha").val();$(".texto-formulario").html(o),$(window).width()>=800?($(".exit").addClass("exit-x"),$(".formulario").addClass("popup"),$("#popupatenuado").show(),$(".btn").addClass("popup-btn"),$(".fijo-btn").removeClass("fijoform"),$(".anuncio").addClass("anunciover"),$("#botonenviar").html("Infórmate ya"),$("#sdi_pdf").val("0")):a("#gotoform")}),$(".span-beca").click(function(){$(".anuncio").addClass("anunciover"),$("#botonenviar").html("Solicita tu beca"),$("#sdi_pdf").val("0"),$(window).width()>=800?($(".exit").addClass("exit-x"),$(".formulario").addClass("popup"),$(".formulario").addClass("popup-beca"),$(".btn-beca").hide(),$(".btn-beca").html(""),$("#popupatenuado").show(),$(".btn").addClass("popup-btn")):a("#gotoform")}),$(".span-programa").click(function(){$(".anuncio").addClass("anunciover"),$("#botonenviar").html("Descarga el programa"),$("#sdi_pdf").val("1"),$(window).width()>=800?($(".exit").addClass("exit-x"),$(".formulario").addClass("popup"),$(".formulario").addClass("popup-programa"),$(".btn-beca").hide(),$(".btn-beca").html(""),$("#popupatenuado").show(),$(".btn").addClass("popup-btn"),$(".fijo-btn").removeClass("fijoform")):a("#gotoform")}),$(".exit").click(function(){$(".exit").removeClass("exit-x"),$(".formulario").removeClass("popup"),$(".formulario").removeClass("popup-beca"),$(".ppc").show(),$(".btn-beca").show(),$("#bases_legales").hide(),$("#popupatenuado").hide(),$(window).scrollTop()>=e&&$(".fijo-btn").addClass("fijoform"),$(".btn").removeClass("popup-btn"),$(".anuncio").removeClass("anunciover"),$(".btn-beca").html("Quiero solicitar una beca"),$(".texto-formulario").html($("#dinamico-fecha").val()),$("#botonenviar").html("Infórmate ya"),$("#sdi_pdf").val("0")}),$("#pres").click(function(){$("#presentacion").show(),$("#porque").hide(),$("#testimonios").hide(),$("#pres").addClass("ficha-activada"),$("#porq").removeClass("ficha-activada"),$("#test").removeClass("ficha-activada")}),$("#porq").click(function(){$("#presentacion").hide(),$("#porque").show(),$("#testimonios").hide(),$("#pres").removeClass("ficha-activada"),$("#porq").addClass("ficha-activada"),$("#test").removeClass("ficha-activada")}),$("#test").click(function(){$("#presentacion").hide(),$("#porque").hide(),$("#testimonios").show(),$("#pres").removeClass("ficha-activada"),$("#porq").removeClass("ficha-activada"),$("#test").addClass("ficha-activada")})});