<div class="contenido zona-clientes">

    <h2>Nuestros clientes</h2>	
    <section id="situacion_linea"class="muelles">
        <h2>Situación actual en línea</h2>
        <p>Seleccione el muelle sobre el cual desea conocer información:</p>
        <div class="btn-carga"> 
            <p>Conozca la situación actual de su carga</p>
            <a class="inlinepop" href="http://186.116.10.188">CONTROL CARGA</a>
        </div>
        <ul class="btn-muelles">
            <?php $i = 0; ?>
            <?php foreach ($muelles as $mu): ?>
                <?php ($i == 0) ? $clase = 'active' : $clase = ''; ?>
                <?php ($mu->field_en_muelle['und'][0]['value'] == 1) ? $clase_ext = '' : $clase_ext = 'no-barco'; ?>
                <li id="<?php print $i?>">
                    <a onclick="cambia_muelle(<?php print $i; ?>);" id="titulo_muelle_<?php print $i;?>" class="<?php print $clase.' '.$clase_ext; ?>">
                        <p><?php print $mu->title; ?></p>
                    </a>
                </li>
                <?php $i++; ?>
            <?php endforeach; ?>
        </ul>
        <?php $i = 0; ?>
        <?php foreach ($muelles as $mu): ?>
            <?php ($i == 0) ? $estilo = '' : $estilo = 'none;'; ?>
            <div id="muelle_<?php print $i;?>" class="content-muelles" style="display:<?php print $estilo;?>">
                <h3><p><?php print $mu->title; ?></p></h3>
                <p>1 motonave atracada</p>
                <div class="tabla-muelle" ng-controller="spreadsheetsCtrl">
                    <ul>
                        <li>
                            <h4>Motonave</h4>
                            <p><?php print $mu->field_motonave['und'][0]['value'];?></p>
                        </li>
                        <li>
                            <h4>Fecha de atraque</h4>
                            <p><?php print $mu->field_fecha_atraque['und'][0]['value'];?></p>
                        </li>
                        <li>
                            <h4>Hora</h4>
                            <p><?php print $mu->field_hora['und'][0]['value'];?></p>
                        </li>
                        <li>
                            <h4>Agente marítimo</h4>
                            <p><?php print $mu->field_agente_maritimo['und'][0]['value'];?></p>
                        </li>
                    </ul>
                    <ul>
                        <li>
                            <h4>Clientes Principales</h4>
                            <p><?php print $mu->field_clientes['und'][0]['value'];?></p>
                        </li>
                        <li>
                            <h4>Tipo de Producto</h4>
                            <p><?php print $mu->field_tipo_de_producto['und'][0]['value'];?></p>
                        </li>
                        <li>
                            <h4>Tonelaje anunciado</h4>
                            <p><?php print $mu->field_tonelaje_anclado['und'][0]['value'];?></p>
                        </li>
                        <li>
                            <h4>Tonelaje descargado</h4>
                            <p><?php print $mu->field_tonelaje_descargado['und'][0]['value'];?></p>
                        </li>
                    </ul>
                </div>
            </div>
            <?php $i++; ?>
        <?php endforeach; ?>
    </section>
    <section id="facturacion_ancla" class="facturacion">
        <?php print $form; ?>
        <h2>Facturación</h2>
        <div class="left">
            <?php if (!empty($sesion)): ?>
                <h3><a href="/zona-clientes-facturas">Facturación</a></h3>
                <p><a href="/user/logout">Cerrar Sesión</a></p>
            <?php else: ?>
                <h3>Inicio de sesión</h3>
                <p>Si actualmente es nuestro cliente por favor ingrese con el nombre de usuario y contraseña enviados por nosotros.</p>
                <p class="texto-mobile">Para ingresar a su cuenta y descargar sus facturas es necesario hacerlo desde un computador</p>
                <a class="inlinepop" href="#login-popup">Ingresar</a>
                <p>Si es nuestro cliente y no conoce su usuario o contraseña por favor escribanos a <a href="#">info@oppgraneles.com</a> para activar su cuenta</p>
            <?php endif; ?>
        </div>
        <div class="right">
            <ul class="contacto">
                <li><h3>Conozca más sobre nosotros, contáctenos</h3></li>
                <li><p>Cra. 7 No. 75-51 Of. 501 Ed. Terpel</p></li>
                <li><p>+57  (1) 317 6506</p></li>
                <li><p>info@gripoportuario.com</p></li>
            </ul>
        </div>
    </section>
</div>
<script>
    
    function cambia_muelle(id){
        jQuery('a[id*="titulo_muelle_"]').removeClass('active');
        jQuery('#titulo_muelle_' +  id).addClass('active');
        jQuery('div[id*="muelle_"]').css('display','none');
        jQuery('#muelle_' +  id).css('display','block');
    }
    
    jQuery(document).ready(function ($) {
        $(".inlinepop").colorbox({inline: true, width: "40%", href: "#login-pop"});
    });
</script>