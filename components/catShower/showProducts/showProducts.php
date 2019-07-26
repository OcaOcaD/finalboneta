<?php
$productos_query = "SELECT * FROM productos WHERE categoria = '{$_SESSION['catalogo_actual']}' ";
$productos = mysqli_query($conexion,$productos_query);
$productos_rows = mysqli_num_rows($productos);
    if ( $productos_rows > 0 ){
    $prodList = new SplDoublyLinkedList;
    for ($j=0; $j < $productos_rows; $j++) { 
        $productos_data = mysqli_fetch_array($productos);
        $p = new Product;
        $p->set_id($productos_data['ID_producto']);
        $p->set_title($productos_data['titulo']);
        $p->set_image($productos_data['imagen']);
        $p->set_desc($productos_data['descripcion']);
        $p->set_price($productos_data['precio']);
        $prodList->push( $p );
    }
}

$n = 0;
while( isset($prodList[$n]) && $prodList[$n] != null ){ 
?>
<div class="row catalog__row">
    <?php 
    for ( $m = 0; $m < 3 && ( isset($prodList[$n]) && $prodList[$n] != null ) ; $m++ ){
    /****************** mostrar tarjetas de promoción principal **********************/
    ?>
    <div id="cat_square<?php echo $n;?>" class="cat__product col-md-4 col-lg-4 col-xl-3 col-sm-12 col-xs-12">
        <div class="cat__img__container">
            <img src="diseño/img/<?php echo $prodList[$n]->get_image() ?>" class="cat__image">
        </div>

        <div class="cat__info__container">
            <div class="cat__title">
                <h1><?php echo utf8_decode($prodList[$n]->get_title()) ?></h1>
            </div>
            <span class="badge badge-warning badge-pill">$<?php echo $prodList[$n]->get_price() ?> <small>MXN</small></span>
            <div class="cat__description">
                <p>
                <?php echo utf8_decode($prodList[$n]->get_desc()) ?>
                </p>
            </div>
            <div class="cat__order__button">
                <div class="back__button">&nbsp;</div>
                <button class="cat__buy__button">Comprar ( Y )</button>
            </div>
        </div>
    </div>
    <?php 
        $n++;
    }?>
</div> 
<?php
}
?>