<?php session_start();?>
<!----------------------------->
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css' />
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css' />
  
    <title>Djik la ref</title>

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="template/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">

    <link rel="stylesheet" href="assets/css/templatemo-klassy-cafe.css">

    <link rel="stylesheet" href="assets/css/owl-carousel.css">

    <link rel="stylesheet" href="assets/css/lightbox.css">
    <link rel="stylesheet" href="template/style.css">
    
 
</head>
<body>
<?php  require_once __DIR__.'/function/database.php';

 require_once __DIR__.'/template/headerArticle.php';?>
<!----------------------------->
<?php require_once __DIR__ .'/function/cart.php';
$products = getProductInCart();
//$products = getProductHommeInCart();
$total_price = 0;
?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-10">
            <div style="display:<?php if (isset($_SESSION['showAlert'])){
                echo $_SESSION['showAlert'];}else{echo 'none';} unset($_SESSION['showAlert']); ?>"
                 class="alert alert-success alert-dismissible mt-3">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <strong><?php if (isset($_SESSION['message'])){echo $_SESSION['message'];} unset($_SESSION['showAlert']); ?></strong>
            </div>
            <div class="table-responsive mt-5">
                <table class="table table-bordered table-dark table-borderless text-center">
                   <thead class="thead-light">
                   <tr>
                       <td colspan="7">
                           <h5 class="text-center text-info m-0">Tous les produits du panier</h5>
                       </td>
                   </tr>
                   <tr>
                       <th>Id</th><th>Nom</th><th>Image</th><th>Prix</th><th>Quantite</th><th>Prix</th>
                       <th>
                           <a href="action/action.php?clear=all" class="badge badge-danger p-1"
                              onclick="return confirm('Êtes-vous sûr?')">
                               <i class="fas fa-trash"></i>&nbsp; Effacer le panier
                           </a>
                       </th>
                   </tr>
                   </thead>
                    <tbody>
                    <?php foreach ($products as $product):;?>
                        <tr>
                            <td><?= $product['id'];?></td>
                            <input type="hidden" class="product_id" value="<?= $product['id'];?>">
                            <td><?= $product['product_name'];?></td>
                            <td><img src="<?= $product['product_image'];?>" width="50"></td>
                            <td><i class="fas fa-dollar-sign"></i> <?= number_format($product['product_price'],2);?></td>
                            <td style="width: 75px;">
                                <input type="hidden" class="product_price" value="<?= $product['product_price'];?>">
                                <input type="number" class="form-control w-100 itemQuantity " value="<?= $product['quantity'];?>">
                            </td>
                            <td><i class="fas fa-dollar-sign"></i> <?= number_format($product['total_price'],2);?></td>
                            <td>
                                <a href="action/action.php?remove=<?= $product['id'];?>"
                                   class="text-danger lead" onclick="return confirm('Etes vous sure?')">
                                    <i class="fas fa-trash-alt"></i>
                                </a>
                            </td>
                        </tr>
                    <?php $total_price += $product['total_price'];?>
                    <?php endforeach;?>
                    <tr>
                        <td colspan="3">
                            <a href="index.php" class="btn btn-success">
                                <i class="fas fa-cart-plus"></i> Retourner au menu
                            </a>
                        </td>
                        <td colspan="2"><b>Prix total</b></td>
                        <td><i class="fas fa-dollar-sign"></i>
                            <b><?= number_format($total_price,2);?></b>
                        </td>
                        <td>
                            <a href="checkout.php" class="btn btn-info <?= ($total_price)>1 ? '' : 'disabled';?>">
                                <i class="far fa-credit-card"></i> Crediter
                            </a>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<?php require_once __DIR__.'/template/footer.php'; ?>
