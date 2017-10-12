<!DOCTYPE html>
<html>
<head>
    <title>Prueba</title>
</head>
<body>
     <form action="envio.php" method=post>
                                
                                    <div class="form-horiz-izq campo-nombre">
                                        <div class="ico-form nombre"></div>
                                        <div class=campo>
                                            <label for=nombre></label>
                                            <input name=nombre id=nombre placeholder="Nombre *"> </div>
                                    </div>
                                    <div class="form-horiz-dch campo-apellidos">
                                        <div class="ico-form apellidos"></div>
                                        <div class=campo>
                                            <label for=apellidos></label>
                                            <input name=apellidos id=apellidos placeholder="Apellidos *"> </div>
                                    </div>
                                    <div class="form-horiz-izq campo-emial">
                                        <div class="ico-form email"></div>
                                        <div class=campo>
                                            <label for=email></label>
                                            <input name=email id=email placeholder="Email *"> </div>
                                    </div>
                                    <div class="form-horiz-dch campo-telefono">
                                        <div class="ico-form telefono"></div>
                                        <div class=campo>
                                            <label for=telefono></label>
                                            <input name=telefono id=telefono placeholder="Teléfono (con prefijo) *"> </div>
                                    </div>
                                    <div class="form-horiz-izq campo-pais">
                                        <div class="ico-form pais"></div>
                                        <div class=campo>
                                            <label for=id_distrito></label>
                                            <select class=dato id=id_pais name=id_distrito>
                                                <option value=0>Distrito *
                                                    <option>Lima</select>
                                        </div>
                                    </div>
                                    <div class="form-horiz-dch campo-provincia">
                                    </div>
                                    <div class="form-horiz-izq campo-curso">
                                        <div class="ico-form curso"></div>
                                        <div class=campo>
                                            <label for=id_curso></label>
                                            <select class=dato id=id_curso name=id_curso>
                                                <option value=0>Selecciona tu curso *</option>
                                                    <option selected value="Taller de Primeros Auxilios">Taller de Primeros Auxilios</option>
                                                        <option value=Otros>Otros</option></select>
                                        </div>
                                    </div>
                                    <div class="ancho form-horiz-text" id=div_por_empresa>
                                        <div class=form-horiz-izq>
                                            <p class=campo>¿Vas a hacer esta formación a través de tu empresa?<span class=empresa-sino> <input name=por_empresa type=radio value=1 id=por_empresa onclick='$("#div_empresa").show()'> Sí<label for=por_empresa></label><input name=por_empresa type=radio value=0 id=radio_validator checked onclick='$("#div_empresa").hide()'> No<label for=radio_validator></label></span></div>
                                        <div class="form-horiz-dch campo-empresa">
                                            <div id=div_empresa style=display:none>
                                                <div class="ico-form empresa"></div>
                                                <div class="campo form-h-empresa">
                                                    <label for=empresa></label>
                                                    <input name=empresa id=empresa placeholder="Empresa *"> </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="ancho form-horiz-text">
                                    <div>
                                        <p>Comentarios:</p>
                                        <textarea cols=5 name=comentarios rows=5></textarea>
                                    </div>
                                </div>
                                <div class="ancho form-horiz-text">
                                    <div class="form-horiz-dch heleido">
                                        <p>He leído y acepto las <a href="javascript:mostrar_popup('../lopd.html');" title=Condiciones rel=nofollow>condiciones</a> <span class=check-condi><input name=condiciones type=checkbox value=1 id=condiciones checked class=checkbox><label for=condiciones></label></span></div>
                                </div>
                                <!--div class=form-hoirz-boton><a href="" title=Enviar class=enviar style=background:#e02720>Enviar</a></div-->
                                <input class="boton" type="submit" name="button" id="button" value="Enviar consulta">
                            </form>
</body>
</html>