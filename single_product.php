<?php
include('db.php');

if (isset($_GET['product_id'])){
    
    $product_id = $_GET['product_id'];

    $stmt = $con->prepare("SELECT * FROM products WHERE product_id=? ");

    $stmt->bind_param("i", $product_id); 

    $stmt->execute();

    $product = $stmt->get_result();

}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Products - Must Shop</title>
    <link rel="stylesheet" href="design.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
        <?php include('header.php'); ?>

        <div class="mediumcontainer">
            <div class="row">
                <?php while($row = $product->fetch_assoc()){?>
                <div class="column2">
                    <img src="<?php echo $row['product_image'];?>" width="350px" height="350px">
                </div>
                <div class="column2">
                    <h1><?php echo $row['product_name'];?> </h1>
                    <br>
                    <h4><?php echo $row['product_price'];?> </h4>
                <form action="cart.php" method= "POST">
                    <input type="hidden" name="product_id" value="<?php echo $row['product_id'];?>">
                    <input type="hidden" name="product_image" value="<?php echo $row['product_image'];?>">
                    <input type="hidden" name="product_name" value="<?php echo $row['product_name'];?>">
                    <input type="hidden" name="product_price" value="<?php echo $row['product_price'];?>">
                    <input type="number" name="product_quantity"value="1">
                    <br>
                    <button class="addtobtn" type="submit" name="add_to_cart">Add To Cart</button>
                </form>
                    <br>
                    <br>
                    <h3>Product Details</h3>
                    <p>
                        <?php echo $row['description']; ?>
                    </p>
                </div>
                <?php } ?>
            </div>
        </div>

        <div class="titlecontainer">
            <div class="row row2">
                <h2>Related Products</h2>
            </div>
        </div>

        <?php include('get_fetured_products.php');?>
        <div id="row">
        <?php while($row = $featured_products->fetch_assoc()){ ?>
            <div id="product">
                <a href="<?php echo "single_product.php?product_id=". $row['product_id'];?>"><img src="<?php echo $row['product_image'];?>" width="200px" height="200px"></a>
                <a href="<?php echo "single_product.php?product_id=". $row['product_id'];?>"><h4><?php echo $row['product_name'];?> </h4></a>
                <div class="review-stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <p><?php echo $row['product_price'];?></p>
            </div>
            <?php } ?>
        </div>  
        
            <?php include('footer.php');?>

    </body>
</html>