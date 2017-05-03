<div class="contenido directorio">

    <h2>Directorio corporativo</h2>	
    <section class="cargos presidente">
        <h2><?php print $funcionarios[0]['nom_cargo'] ?></h2>
        <article>
            <figure>
                <img src="/sites/all/themes/custom/aurora/images/directorio-hombre.png">
            </figure>
            <ul>
                <li><?php print $funcionarios[0]['nombre'] ?></li>
                <li><a href="mailto:<?php print $funcionarios[0]['correo'] ?>" target="_top"><?php print $funcionarios[0]['correo'] ?></a></li>
            </ul>	
        </article>

    </section>
    <?php $i = 0; ?>
    <?php unset($funcionarios[0]);?>
    <?php foreach ($funcionarios as $fun): ?>
        <?php if ($i == 0 || $i % 3 == 0): ?>
            <section class="cargos directivos">
            <?php elseif ($i == 3 || $i % 3 == 0): ?>
            </section>
        <?php endif; ?>
        <article>
            <h2><?php print $fun['nom_cargo'] ?></h2>
            <figure>
                <img src="/sites/all/themes/custom/aurora/images/directorio-hombre.png">
            </figure>
            <ul>
                <li><?php print $fun['nombre'] ?></li>
                <li><a href="mailto:<?php print $fun['correo'] ?>" target="_top"><?php print $fun['correo'] ?></a></li>
            </ul>	
        </article>
        <?php $i++; ?>
    <?php endforeach; ?>
</div>