<section class="left">
    <h2>Somos</h2>
    <p><?php print $somos; ?></p>
    <a class="btn-seccion iframe" target="_blank" href="http://www.youtube.com/embed/<?php print $video; ?>?rel=0&wmode=transparent">Conozca más en video</a>
</section>
<section class="right">
    <article>
        <a href="servicios.html">
            <h2>Contamos con</h2>
            <ul class="bxslider">
                <?php
                    $datos1 = explode('-', $contamos1[0]['titulo']);
                    $datos1_1 = explode('-', $contamos1[0]['descripcion']);
                    $datos2 = explode('-', $contamos1[1]['titulo']);
                    $datos2_1 = explode('-', $contamos1[1]['descripcion']);
                    $datos3 = explode('-', $contamos1[2]['titulo']);
                    $datos3_1 = explode('-', $contamos1[2]['descripcion']);
                ?>
                <li>
                    <div class="container-datos">
                        <figure><img src="<?php print $contamos1[0]['imagen'];?>"></figure>
                        <div class="dato">
                            <h4><?php print $datos1[0];?></h4>
                            <p><?php print $datos1[1];?></p>
                        </div>
                    </div>
                    <div class="container-datos">
                        <p><?php print $datos1_1[0];?></p>
                        <div class="dato">
                            <h4><?php print $datos1_1[1];?></h4>
                            <p><?php print $datos1_1[2];?></p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="container-datos">
                        <figure><img src="<?php print $contamos1[1]['imagen'];?>"></figure>

                    </div>
                    <div class="container-datos">
                        <p><?php print $datos2[0];?></p>
                        <div class="dato">
                            <h4><?php print $datos2_1[0];?></h4>
                            <p><?php print $datos2_1[1];?></p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="container-datos">
                        <figure><img src="<?php print $contamos1[2]['imagen'];?>"></figure>
                        <div class="dato">
                            <h4><?php print $datos3[0];?></h4>
                            <p><?php print $datos3[1];?></p>
                        </div>
                    </div>
                    <div class="container-datos despacho-car">
                        <p><?php print $datos3_1[0];?></p>
                        <div class="dato">
                            <h4><?php print $datos3_1[1];?></h4>
                            <p><?php print $datos3_1[2];?></p>
                        </div>
                    </div>
                </li>
            </ul>
            <a class="btn-seccion" href="/servicios">Conozca nuestros servicios</a>
        </a>
    </article>
    <article>
        <h3>Noticias</h3>
        <p><?php print $noticia; ?></p>
    </article>
</section>

<script type="text/javascript">
    $(document).ready(function () {
        $('.bxslider').bxSlider({
            infiniteLoop: false,
            hideControlOnEnd: true,
            easing: 'easeOutBounce',
            speed: 500,
            pager: false
        });
        $(".iframe").colorbox({iframe:true, width:"600px", height:"500px"});
    });
</script>