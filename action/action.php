<?php session_start();
require_once __DIR__.'/../function/database.php';
require_once __DIR__.'/../function/cart.php';
if (isset($_POST['productId'])){
    $productId = filter_input(INPUT_POST,'productId',FILTER_SANITIZE_SPECIAL_CHARS);
    $productName = filter_input(INPUT_POST,'productName',FILTER_SANITIZE_SPECIAL_CHARS);
    $productPrice = filter_input(INPUT_POST,'productPrice',FILTER_SANITIZE_SPECIAL_CHARS);
    $productImage = filter_input(INPUT_POST,'productImage',FILTER_SANITIZE_SPECIAL_CHARS);
    $productCode = filter_input(INPUT_POST,'productCode',FILTER_SANITIZE_SPECIAL_CHARS);
    $productQuantity = 1;
    $totalPrice = $productPrice * $productQuantity;
    $cartItems = ifProductExist($productCode);
    if (!$cartItems){
        insertDataIntoCart($productName,$productPrice,$productImage,$productQuantity,$totalPrice,$productCode);
        echo '<div class="alert alert-success alert-dismissible mt-2">
                  <button type="button" class="close" data-dismiss="alert">&times;</button>
                  <strong>Article ajouté à votre panier!</strong>
			 </div>';
    }else{
        echo '<div class="alert alert-danger alert-dismissible mt-2">
                  <button type="button" class="close" data-dismiss="alert">&times;</button>
                  <strong>Article déjà ajouté à votre panier !</strong>
              </div>';
    }
}
if (isset($_GET['cartItem']) && isset($_GET['cartItem']) == 'cart_item'){
    $products = countProductsInCart();
    echo $products;
}
if (isset($_GET['remove'])){
    deleteItemFromCart($_GET['remove']);
    $_SESSION['showAlert'] = 'bloquer';
    $_SESSION['message'] = 'Article retiré du panier !';
    header('location: ../cart.php');
    exit();
}
if (isset($_GET['clear'])){
    clearAllItemInCart();
    $_SESSION['showAlert'] = 'bloquer';
    $_SESSION['message'] = 'Tout Article retiré du panier !';
    header('location: ../cart.php');
    exit();
}
if (isset($_POST['itemQuantity'])){
    $product_quantity = filter_input(INPUT_POST,'itemQuantity',FILTER_VALIDATE_INT);
    $product_id = filter_input(INPUT_POST,'product_id',FILTER_VALIDATE_INT);
    $product_price = filter_input(INPUT_POST,'product_price',FILTER_VALIDATE_INT);
    $total_price = $product_quantity * $product_price;
    if ($product_quantity <= 0) {
        $_SESSION['showAlert'] = 'bloquer';
        $_SESSION['message'] = 'Vous pouvez régler la quantité sur zéro !';
        header('location: ../cart.php');
        exit();
    }
    if ($product_quantity > 10) {
        $_SESSION['showAlert'] = 'bloquer';
        $_SESSION['message'] = 'Vous pouvez ajouter plus de 10 produits à votre carte !';
        header('location: ../cart.php');
        exit();
    }
    updateCartItemQuantity($product_quantity, $total_price, $product_id);
    header('location: ../cart.php');
    exit();
}
if (isset($_POST['action']) && isset($_POST['action']) == 'order'){
    $name = filter_input(INPUT_POST,'name',FILTER_SANITIZE_SPECIAL_CHARS);
    $email = filter_input(INPUT_POST,'email',FILTER_SANITIZE_EMAIL);
    $phone = filter_input(INPUT_POST,'phone',FILTER_SANITIZE_SPECIAL_CHARS);
    $address = filter_input(INPUT_POST,'address',FILTER_SANITIZE_SPECIAL_CHARS);
    $products = filter_input(INPUT_POST,'product',FILTER_SANITIZE_SPECIAL_CHARS);
    $totalPrice = filter_input(INPUT_POST,'total_price',FILTER_SANITIZE_SPECIAL_CHARS);
    $payment = filter_input(INPUT_POST,'payment',FILTER_SANITIZE_SPECIAL_CHARS);
    $data = '';
    orderPayment($name,$email,$phone,$address,$payment,$products,$totalPrice);
    $data .= '<div class="text-center">
                <h1 class="display-4 mt-2 text-danger">Merci!</h1>
                <h2 class="text-success">Votre commande passée avec succès !</h2>
                <h4 class="bg-danger text-light rounded p-2">Articles achetés : ' . $products . '</h4>
                <h4>Votre nom : ' . $name . '</h4>
                <h4>Votre E-mail : ' . $email . '</h4>
                <h4>Votre Téléphone : ' . $phone . '</h4>
                <h4>Montant total Prix : ' . number_format($totalPrice,2) . '</h4>
                <h4>Paiement : ' . $payment . '</h4>
            </div>';
    echo $data;
}
?>
<script src="js/quantity.js"></script>
