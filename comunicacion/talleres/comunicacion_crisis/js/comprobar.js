function MM_findObj(n,d){var p,i,x;if(!d)d=document;if((p=n.indexOf("?"))>0&&parent.frames.length){d=parent.frames[n.substring(p+1)].document;n=n.substring(0,p);}
if(!(x=d[n])&&d.all)x=d.all[n];for(i=0;!x&&i<d.forms.length;i++)x=d.forms[i][n];for(i=0;!x&&d.layers&&i<d.layers.length;i++)x=MM_findObj(n,d.layers[i].document);if(!x&&d.getElementById)x=d.getElementById(n);return x;}
function MM_validateForm(){var i,p,q,nm,test,num,min,max,errors='',args=MM_validateForm.arguments;for(i=0;i<(args.length-2);i+=3)
{test=args[i+2];val=MM_findObj(args[i]);if(val)
{nm=val.name;if((val=val.value)!="")
{if(test.indexOf('isEmail')!=-1)
{p=val.indexOf('@');if(p<1||p==(val.length-1))errors+='- '+nm+' debe contener una dirección de e-mail.    \n';}
else if(nm=="telefono")
{if(isNaN(val))
{errors+='- '+nm+' debe contener un número de teléfono válido.    \n';}}
else if(nm=="cp")
{if(isNaN(val))
{errors+='- '+nm+' debe contener un código postal válido.    \n';}}
else if(nm=="edad")
{if(isNaN(val))
{errors+='- '+nm+' debe contener número.    \n';}}
else if(test!='R')
{num=parseFloat(val);if(test.indexOf('inRange')!=-1)
{p=test.indexOf(':');min=test.substring(8,p);max=test.substring(p+1);if(num<min||max<num)errors+='- '+nm+' must contain a number between '+min+' and '+max+'.\n';}}}
else if(test.charAt(0)=='R')errors+='- El campo '+nm+' es necesario.    \n';}}
if(!document.main.condiciones.checked)
{errors+='- Debe aceptar las condiciones.    \n';}
if(errors){alert('Han ocurrido los siguientes errores:    \n\n'+errors);}
document.MM_returnValue=(errors=='');}