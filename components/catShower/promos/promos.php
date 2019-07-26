<?php  
 $promos_query = "SELECT * FROM productos WHERE categoria = 'principal' ";
 $promos = mysqli_query($conexion,$promos_query);
 $promos_rows = mysqli_num_rows($promos);
 if( $promos_rows > 0 ){
  $promoList = new SplDoublyLinkedList;
  for ($i=0; $i < $promos_rows; $i++) { 
    $promos_data = mysqli_fetch_array($promos);
    $p = new Product;
    $p->set_id($promos_data['ID_producto']);
    $p->set_title($promos_data['titulo']);
    $p->set_image($promos_data['imagen']);
    $p->set_desc($promos_data['descripcion']);
    $p->set_price($promos_data['precio']);
    $promoList->push( $p );
  }
 }
?>
<?php 
$k = 0;
while( isset($promoList[$k]) && $promoList[$k] != null ){ 
?>
<div class="row catalog__row">
    <?php 
    for ( $j = 0; $j < 3 && ( isset($promoList[$k]) && $promoList[$k] != null ) ; $j++ ){
    /****************** mostrar tarjetas de promoción principal **********************/
    ?>
    <div id="cat_square<?php echo $k;?>" class="cat__square col-md-4 col-lg-4 col-xl-3 col-sm-12 col-xs-12">
    
        <div class="cat__img__container">
            <img src="diseño/img/<?php echo $promoList[$k]->get_image() ?>" class="cat__image">
        </div>

        <div class="cat__info__container">
            <div class="cat__title">
                <h1><?php echo utf8_decode($promoList[$k]->get_title()) ?></h1>
            </div>
            <span class="badge badge-warning badge-pill">$<?php echo $promoList[$k]->get_price() ?> <small>MXN</small></span>
            <div class="cat__description">
                <p>
                <?php echo utf8_decode($promoList[$k]->get_desc()) ?>
                </p>
            </div>
        </div>
        <div class="cat__order__button">
            <div class="back__button">&nbsp;</div>
            <button class="cat__buy__button">Comprar ( Y )</button>
        </div>
    
    </div>
    <?php 
        $k++;
    }?>
</div> 
<?php
}
?>