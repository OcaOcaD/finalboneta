<?php 
    if ( $pestaña == "index" ){
        $start__link = "handleSideLink('#carousel')";
        $us__link = "handleSideLink('#us')";
        $services__link = "handleSideLink('#services')";
        $contact__link = "handleSideLink('#contact')";
    }else{
        $start__link = "window.location = 'index.php#carousel'";
        $us__link = "window.location = 'index.php#us'";
        $services__link = "window.location = 'index.php#services'";
        $contact__link = "window.location = 'index.php#contact'";
    }
?>


<nav id="sideDrawer" class="side-drawer">
<form id="form_form" action="proceso_catalogo.php" method="POST">
    <ul>
        <!--<li>
            <div id="logo_categorias" class="logo">
                <img id="logo_logo" class="logo_logo" src="diseño/img/RMlogo.png">
            </div>
        </li>-->
        <li>
            <button id="tipo0" type="input" name="tipo0" class="sideButton">
            Promociones
            </button>
        </li>
        <li>
            <button id="tipo1" type="input" name="tipo1" class="sideButton">
            Caballero
            </button>
        </li>
        <li>
            <button id="tipo2" type="input" name="tipo2" class="sideButton">
            Dama
            </button>
        </li>
        <li>
            <button id="tipo3" type="input" name="tipo3" class="sideButton">
            Niños
            </button>
        </li>
        <li>
            <button id="tipo4" type="input" name="tipo4" class="sideButton">
            Escolar
            </button>
        </li>
        <li>
            <button id="tipo5" type="input" name="tipo5" class="sideButton">
            Bebés
            </button>
        </li>
    </ul>
</form>
</nav>