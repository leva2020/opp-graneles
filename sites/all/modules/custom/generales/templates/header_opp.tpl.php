<header>
    <a class="btn-nav" href="#">Menú</a>
    <h1><a href="/">OPP Graneles S.A.</a></h1>
    <ul class="partners">
        <li><h2>Partners:</h2></li>
        <li><a href="http://inatlantic.net/" target="_blank" ><img src="/sites/all/themes/custom/aurora/images/partner-inatlantic.png"></a></li>
        <li><a href="http://www.grupoportuario.com.co/" target="_blank" ><img src="/sites/all/themes/custom/aurora/images/partner-gp.png"></a></li>
        <li><a href="http://www.bgp-cl.com/" target="_blank" ><img src="/sites/all/themes/custom/aurora/images/partner-bgp.png"></a></li>
        <li><a href="http://www.etikaverde.org/" target="_blank" ><img src="/sites/all/themes/custom/aurora/images/partner-etik.png"></a></li>
    </ul>
</header>
<?php
$path = current_path();
if($path == 'zona-clientes'):
    $enlace1 = '#situacion_linea';
    $enlace2 = '#facturacion_ancla';
else:
    $enlace1 = '/zona-clientes#situacion_linea';
    $enlace2 = '/zona-clientes#facturacion_ancla';
endif;
?>
<nav>
    <ul class="menu">
        <li><a href="/">SOMOS OPP GRANELES</a></li>
        <li><a href="/servicios">NUESTROS SERVICIOS</a></li>
        <li><a href="/directorio">DIRECTORIO CORPORATIVO</a></li>
        <li><a href="/formula-tu-denuncia">NUESTRA GENTE</a></li>
        <li>
            <a href="/zona-clientes">NUESTROS CLIENTES</a>
            <ul class="sub-menu">
                <li><a href="<?php print $enlace1; ?>">Situación en linea</a></li>
                <li><a href="<?php print $enlace2; ?>">Facturación</a></li>
            </ul>
        </li>
        <li><a href="/notigraneles">NOTIGRANELES</a></li>
        <li><a href="/responsabilidad-social">RESPONSABILIDAD SOCIAL EMPRESARIAL</a></li>
    </ul>
    <ul class="contacto">
        <li><h2>Contáctenos</h2></li>
        <li><p>Bogotá-Cundinamarca <br> Cra. 7 No. 75-51 Of. 501 Ed. Terpel</p></li>
        <li><p>PBX (571) 317 65 06</p></li>
        <li><p>Cali-Valle del Cauca <br> Calle 6N #1N-42 Torre Centenario.</p></li>
        <li><p>PBX (572) 665 80 40</p></li>
        <li><p>Buenaventura- Valle del Cauca <br> Edificio Cosmos Vistamar. Calle 3 #1A-57 Oficinas 401 y 402.</p></li>
        <li><p>PBX: (572) 297 88 43</p></li>
        <li><p>info@oppgraneles.com</p></li>
    </ul>
    <a class="btn-cerrar" href="avascrip:void(0);">Cerrar</a>
</nav>

