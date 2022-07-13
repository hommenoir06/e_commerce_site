<?php
require_once __DIR__.'/include2.php';
$products = getProductFemme();

?>
</br>
</br>
</br>
</br>
<div class="container defilement">
   <div class="defileParent">
     <span class="defile" 
      data-text=" LES SOLDES ACTUELLEMENT C'EST JUSQU'A 60% DE REDUCTION SUR TOUT NOS ARTICLES.LES SOLDES ACTUELLEMENT C'EST JUSQU'A 60% DE REDUCTION"> 
      LES SOLDES ACTUELLEMENT C'EST JUSQU'A 60% DE REDUCTION SUR TOUT NOS ARTICLES.
     </span>
   </div>
</div>
<div class="container">
  <div id="message"></div>
   <div class="row mt-5 pb-5 "id="ok">
    <?php foreach ($products as $product):;?>
    <div class="col-lg-3">
        <div class="carddeck">
            <div class="card p-2 mb-2 cardAffiche">
                <img class="img-fluid card-img-top " src="<?= $product['product_image'];?>">
                <div class="card-body p-1">
                    <h5 class="card-title text-center text-info"><?= $product['product_name']; ?></h5>
                    <h6 class="card-text text-center">
                       <i class="fas fa-star"></i>
                       <i class="fas fa-star"></i>
                       <i class="fas fa-star"></i>
                       <i class="fas fa-star"></i>
                       <i class="far fa-star"></i>
                    </h6>
                    <h5 class="card-text text-center text-secondary">
                        <i class="fas fa-dollar-sign text-danger"></i>
                        <?= number_format($product['product_price'],2) ;?>
                    </h5>
                </div>
                <div class="card-footer p-2">
                    <form class="form-submit">
                        <input type="hidden" class="productId" value="<?= $product['id'];?>">
                        <input type="hidden" class="productName" value="<?= $product['product_name'];?>">
                        <input type="hidden" class="productPrice" value="<?= $product['product_price'];?>">
                        <input type="hidden" class="productImage" value="<?= $product['product_image'];?>">
                        <input type="hidden" class="productCode" value="<?= $product['product_code'];?>">
                       <button class="btn btn-block btn-info addItemBtn">
                            <i class="fas fa-shopping-basket"> &nbsp; Ajouter au panier </i>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php endforeach;?>
  </div>
</div>
  <!-- jQuery -->
<script src="assets/js/jquery-2.1.0.min.js"></script>

<!-- Bootstrap -->


<!-- Plugins -->
<script src="assets/js/owl-carousel.js"></script>
<script src="assets/js/accordions.js"></script>
<script src="assets/js/scrollreveal.min.js"></script>
<script src="assets/js/slick.js"></script> 
<script src="assets/js/isotope.js"></script> 

<!-- Global Init -->
<script src="assets/js/custom.js"></script>
<?php require "template/footer.php"?>


