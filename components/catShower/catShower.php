<div class="catalog__shower">
    <div class="catalog__title">
        <h1>Catálogo <?php echo $catalogo_actual; ?></h1>
        <hr>
    </div>
    <div class="catalog__catalog">
        <!--<div class="row">-->
        <?php 
        if ( $catalogo_actual == 'promocion' ){
            include("components/catShower/promos/promos.php");
        }
        include("components/catShower/showProducts/showProducts.php");     
        ?>
    </div>
</div>