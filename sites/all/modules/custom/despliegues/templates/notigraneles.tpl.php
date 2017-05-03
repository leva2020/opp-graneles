<div class="contenido noticias">
    <h2>Notigraneles</h2>	
    <section class="left">
        <ul class="bxslider">
            <?php foreach($notigraneles[0]['portadas'] as $img):?>
                <li>
                    <figure>
                        <?php print obtiene_style_img('revista', $img['uri']); ?>
                    </figure>
                </li>
            <?php endforeach;?>
        </ul>
    </section>
    <section class="right">
        <h2>Última edición</h2>
        <h4 class="fecha"><?php print $notigraneles[0]['fecha'];?></h4>
        <h3><?php print $notigraneles[0]['titulo'];?></h3>
        <p><?php print $notigraneles[0]['descripcion'];?></p>
        <a href="<?php print $notigraneles[0]['documento'];?>">Descargar</a>
    </section>
    <div class="clear"></div>
    <section class="ediciones">
        <h3>Ediciones anteriores</h3>
        <ul>
            <?php if(isset($notigraneles[1])):?>
                <?php for($i = 1; $i < $num_revistas; $i++):?>
                    <li>
                        <figure>
                            <a href="<?php print $notigraneles[$i]['documento'];?>">
                                <?php print obtiene_style_img('medium', $notigraneles[$i]['uri']); ?>
                            </a>
                            <figcaption><p><?php print $notigraneles[$i]['fecha'];?></p></figcaption>
                        </figure>
                    </li>
                <?php endfor;?>
            <?php endif;?>
        </ul>
        <p>Para  conocer versiones anteriores a un año  por favor solicitelas a <a href="mailto:info@grupoportuario.com">info@grupoportuario.com</a></p>
    </section>
</div>
<script type="text/javascript">
    $(document).ready(function () {
        $('.bxslider').bxSlider({
            infiniteLoop: false,
            hideControlOnEnd: true,
            easing: 'easeOutBounce',
            speed: 500,
            pager: false
        });
    });
</script>