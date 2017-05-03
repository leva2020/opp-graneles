<div class="contenido">

    <h2><?php print $titulo; ?></h2>	
    <p><?php print $descripcion; ?></p>
    <ul class="menu-interna">
        <li><a class="btn-interna" href="#descarga">Descarga</a></li>
        <li><a class="btn-interna" href="#almacenamiento">Almacenamiento</a></li>
        <li><a class="btn-interna" href="#despacho">Despacho</a></li>
    </ul>
    <section class="descarga" id="descarga">
        <h2>Descarga</h2>
        <?php foreach ($servicios as $ser): ?>
            <article>
                <figure>
                    <img src="<?php print $ser['imagen'] ?>">
                </figure>
                <div>
                    <h3><?php print $ser['titulo'] ?></h3>
                    <p><?php print $ser['descripcion'] ?></p>
                </div>
            </article>
        <?php endforeach; ?>
    </section>

    <section class="almacenamiento" id="almacenamiento">
        <h2>Almacenamiento</h2>
        <article>
            <figure><img src="<?php print $servicios_1[0]['imagen'] ?>"></figure>
            <?php $textos_1 = explode('-', $servicios_1[0]['titulo']); ?>
            <?php $textos_1_1 = explode('-', $servicios_1[0]['descripcion']); ?>
            <div class="circulo">
                <h4><?php print $textos_1[0] ?></h4>
                <p><?php print $textos_1[1] ?></p>
            </div>
            <div class="txt-s">
                <p><?php print $textos_1[2] ?></p>
                <h4><?php print $textos_1[3] ?></h4>
            </div>
        </article>
        <article>
            <div class="circulo">
                <h4><?php print $textos_1_1[0] ?></h4>
                <p><?php print $textos_1_1[1] ?></p>
            </div>
            <div class="txt-s">
                <p><?php print $textos_1_1[2] ?></p>
                <h4><?php print $textos_1_1[3] ?></h4>
            </div>
            <figure><img src="<?php print $servicios_1[1]['imagen'] ?>"></figure>
        </article>
        <article>
            <div class="txt-l">
                <p><?php print $servicios_1[1]['titulo'] ?></p>
                <h4><?php print $servicios_1[1]['descripcion'] ?></h4>
            </div>
        </article>
    </section>

    <section class="despacho" id="despacho">
        <h2>despacho</h2>
        <article>
            <h3>Básculas</h3>
            <div>
                <?php $i = 0; ?>
                <?php foreach ($servicios_2 as $ser): ?>
                    <?php if($i < 3): ?>
                        <figure>
                            <img src="<?php print $ser['imagen']?>">
                        </figure>
                        <p><?php print $ser['titulo'];?>
                        <?php if($ser['descripcion']):?>
                            <br><?php print $ser['descripcion'];?>
                        <?php endif;?>
                        </p>
                    <?php endif;?>
                    <?php $i++;?>
                <?php endforeach; ?>
            </div>
        </article>
        <article>
            <h3>Despacho</h3>
            <div>
                <?php $i = 0; $j = 1;?>
                <?php foreach ($servicios_2 as $ser): ?>
                    <?php if($i > 2): ?>
                        <div class="despacho<?php print $j;?>">
                            <figure>
                                <img src="<?php print $ser['imagen']?>">
                            </figure>
                            <p><?php print $ser['descripcion'];?></p>
                        </div>
                        <?php $j++; ?>
                    <?php endif;?>
                    <?php $i++;?>
                <?php endforeach; ?>							
            </div>
        </article>
    </section>
</div>