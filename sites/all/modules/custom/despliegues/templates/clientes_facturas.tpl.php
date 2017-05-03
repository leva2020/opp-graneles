<div class="contenido zona-clientes">

    <h2>Zona de clientes</h2>	
    <section class="cliente">
        <h2>Nombre del cliente</h2>
        <div class="anio">
            <p>Seleccione el año para ver sus facturas:</p>
            <ul id="anios_contenedor">
                <?php $i = 0; ?>
                <?php foreach ($facturas['anios'] as $an): ?>
                    <?php ($i == 0) ? $clase = 'active' : $clase = ''; ?>
                    <li><a <a id="anio_<?php print $an->name; ?>" class="<?php print $clase; ?>" name="<?php print $an->name; ?>"><?php print $an->name; ?></a></li>
                    <?php $i++; ?>
                <?php endforeach; ?>
            </ul>
        </div>
        <ul id="meses_contenedor" class="mes">
            <?php $i = 0; ?>
            <?php foreach ($facturas['meses'] as $me): ?>
                <?php ($i == 0) ? $clase = 'active' : $clase = ''; ?>
                    <li><a id="meses_<?php print $me->name; ?>" class="<?php print $clase; ?>" name="<?php print $me->name; ?>" ><?php print $me->name; ?></a></li>
                <?php $i++; ?>
            <?php endforeach; ?>
        </ul>
        <?php $i = 0; ?>
        <?php foreach ($facturas['anios'] as $an): ?>
            <?php foreach ($facturas['meses'] as $me): ?>
                <?php ($i == 0) ? $estilo = '' : $estilo = 'none'; ?>
                <ul id="fecha_<?php print $an->name . '_' . $me->name; ?>" class="facturas" style="display:<?php print $estilo; ?>">
                    <?php if (count($facturas['documentos'][$an->tid][$me->tid]) == 0): ?>
                        <p>Usted no tiene facturas durante este mes</p>
                    <?php else: ?>
                        <?php foreach ($facturas['documentos'][$an->tid][$me->tid] as $doc): ?>
                            <li>
                                <a href="<?php print $doc['documento']; ?>"></a>
                                <p><?php print $doc['titulo']; ?></p>
                                <p><?php print $doc['descripcion']; ?></p>
                            </li>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </ul>
                <?php $i++; ?>
            <?php endforeach; ?>
        <?php endforeach; ?>

        <p>Si necesita facturas anteriores a dos años por favor solicitelas a <a href="mailto:info@grupoportuario.com">info@grupoportuario.com</a></p>
    </section>
</div>

<script>
    jQuery(document).ready(function(){
        jQuery('a[id*="anio_"]').click(function(){
            anio = jQuery(this).attr('name');
            mes = jQuery('#meses_contenedor a.active').attr('name');
            muestra_doc(anio,mes);
        });
        jQuery('a[id*="meses_"]').click(function(){
            mes = jQuery(this).attr('name');
            anio = jQuery('#anios_contenedor a.active').attr('name');
            muestra_doc(anio,mes);
        });
    });
    function muestra_doc(anio, mes){
        jQuery('a[id*=anio_]').removeClass('active');
        jQuery('#anio_'+anio).addClass('active');
        jQuery('a[id*=meses_]').removeClass('active');
        jQuery('#meses_'+mes).addClass('active');
        jQuery('ul[id*="fecha_"]').css('display','none');
        jQuery('#fecha_' +  anio + '_' + mes).css('display','block');
    }
</script>