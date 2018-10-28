<?php require 'inc/head.php'; ?>
<section class="cookies container-fluid">
    <div class="row">
        <?php if (empty($_SESSION['panier'])) {
            echo '<h1>Votre panier est vide</h1>';
        } else {
        foreach ($_SESSION['panier'] as $key => $value) { ?>
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
            <img src="assets/img/product-<?php echo $key ?>.jpg" alt="cookies choclate chips"
                 class="img-responsive">
            <figure class="thumbnail text-center">
                <figcaption class="caption">
                    <h3><?php echo $key ?></h3>
                </figcaption>
            </figure>
        </div>
        <?php }
        }?>
    </div>
</section>
<?php require 'inc/foot.php'; ?>
