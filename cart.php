<?php

session_start();
include('db.php');
if(isset($_POST['add_to_cart'])){
    if(isset($_SESSION['cart'])){
        $product_array_ids = array_column($_SESSION['cart'], "product_id");
            if(!in_array($_POST['product_id'], $product_array_ids)){

                $product_id= $_POST['product_id'];
                
                $product_array = array(
                    'product_id'=>$_POST['product_id'],
                    'product_name'=>$_POST['product_name'],
                    'product_price'=>$_POST['product_price'],
                    'product_image'=> $_POST['product_image'],
                    'product_quantity'=>$_POST['product_quantity']
                );
               
        
                $_SESSION['cart'][$product_id] = $product_array;
            }else{
                echo '<script>alert("Product was already at cart")</script>';
                
            }
    }else{
        $product_id = $_POST['product_id'];
        $product_title = $_POST['product_name'];
        $product_price = $_POST['product_price'];
        $product_image = $_POST['product_image'];
        $product_quantity = $_POST['product_quantity'];

        $product_array = array(
            'product_id'=>$product_id,
            'product_name'=>$product_title,
            'product_price'=>$product_price,
            'product_image'=>$product_image,
            'product_quantity'=>$product_quantity
        );


        $_SESSION['cart'][$product_id] = $product_array;
    }

    calculateTotalCart();

}elseif(isset($_POST['remove_product'])){
    $product_id=$_POST['product_id'];
    unset($_SESSION['cart'][$product_id]);

    calculateTotalCart();

}elseif(isset($_POST['edit_quantity'])){
    $product_id = $_POST['product_id'];
    $product_quantity = $_POST['product_quantity'];

    $product_array = $_SESSION['cart'][$product_id];

    $product_array['product_quantity'] = $product_quantity;

    $_SESSION['cart'][$product_id] = $product_array;

    calculateTotalCart();

}else{
    header('location: home.php');
}


function calculateTotalCart(){
    $total = 0;

    foreach($_SESSION['cart'] as $key => $value){
        $price = isset($value['product_price']) ? floatval($value['product_price']) : 0;
        $quantity = isset($value['product_quantity']) ? floatval($value['product_quantity']) : 0;

        $total += $price * $quantity;
    }

    $_SESSION['total'] = $total;
}




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
    <link rel="stylesheet" href="design.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
       <?php include('header.php'); ?>

        <!-------Cart Item Details-------->

        <div class="cartpage">
            <table>
                <tr>
                    <th>Product</th>
                    <th>Quantity</th>
                    <th>Subtotal</th>
                </tr>

                <?php foreach($_SESSION['cart'] as $key=>$value){?>
                <tr>
                    <td>
                        <div class="cartinfo">
                            <img src="<?php echo $value['product_image'];?>" width="200px" height="200px"></a>
                            <div>
                                <p><?php echo $value['product_name'];?> </p>
                                <small><?php echo $value['product_price'];?></small>
                                <br>
                                <form action="cart.php" method="POST">
                                    <input type="hidden" name="product_id" value="<?php echo $value['product_id'];?>">
                                    <input type="submit" name="remove_product" class="remove_btn" value="Remove">
                                </form>
                            </div>    
                        </div>
                    </td>
                    <td>
                        <form action="cart.php" method="POST">
                            <input type="hidden" name="product_id" value="<?php echo $value['product_id'];?>">
                            <input type="number" name="product_quantity"value="<?php echo $value['product_quantity'];?>">
                            <input type="submit" class="edit_btn" value="edit" name="edit_quantity">
                        </form>
                    </td>
                    
                    <td>
    <?php 
    $quantity = floatval($value['product_quantity']);
    $price = floatval($value['product_price']);

    if ($quantity && $price) {
        echo '$ ' . ($quantity * $price);
    } else {
        echo 'Invalid';
    }
    ?>
</td>

                  
                </tr>

                <?php } ?>
                
            </table>

            <div class="totalprice">
                <table>
                    <tr>

                        <td>Total</td>
                        <td>$ <?php echo $_SESSION['total'];?></td>
                    </tr>
                </table>
            </div>
        </div>

        <!--------Foutter-->

       <?php include('footer.php'); ?>
    </body>
</html>