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
       <?php
       require_once "header.php";
       ?>

        <div class="small-container">
            <div class="row row2">
                <h2 class="titleAll">All Products</h2>
                <select>
                    <option>Default Shorting</option>
                    <option>Short by Price</option>
                    <option>Short by Popularity</option>
                    <option>Short by Rating</option>
                    <option>Short by Sale</option>
                </select>
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
        </div>


        <!--------Foutter-->
        <?php
        require_once "footer.php";
        ?>
    </body>
</html>