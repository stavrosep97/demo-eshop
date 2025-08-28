<?php
    session_start();
    include("db.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Must Eshop</title>
    <link rel="stylesheet" href="design.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <div class="header">
        <div class="firstPart">
            <div class="navbar">
                <div class="logo">
                    <a href="home.php"><img src="images\logo.png" width="250px"></a>
                </div>
                <nav>
                    <ul>
                        <li><a href="home.php">Home</a></li>
                        <li><a href="products.php">Products</a></li>
                        <li><a href="contact.php">Contact</a></li>
                        <li><a href="account.php">Account</a></li>
                    </ul>
                </nav>
            </div>
            <div class="row">
                <div class="col-2">
                    <h1>Next Level In Electronics</h1>
                    <p>Must Eshop offers top-tier smartphones, computers and accessories, <br>
                        ensuring you stay connected with style and functionality.
                    </p>
                    <br>
                    <a href="products.php" class="btn">Explore Now &#8594;</a>
                </div>
                <div class="col-2">
                    <img src="images\Shop.jpg" >
                </div>
            </div>
        </div>
    </div>

    <!------featured categories------>

    <div id="categories">
        <h2 class="title">Featured Categories</h2>
        <div id="row">
            <div id="categoriesimg">
                <img src="images\phonecategorie.jpg" width="300px" height="300px">
            </div>
    
            <div id="categoriesimg">
                <img src="images\pccategories.jpg"  width="300px" height="300px">
            </div>
    
            <div id="categoriesimg">
                <img src="images\gamingcategorie.jpg"  width="300px" height="300px">
            </div>
        </div>
    </div>
   

    <!--------featured Products-->

        <h2 class="title">Featured Products</h2>
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


        <!---Testimonials-->
        <div class="testimonials">
            <div class="small-container">
             <h2 class="title">Testimonials</h2>
                <div class="row">
                    <div class="col4">
                        <i class="fas fa-quote-left"></i>
                        <p>MustShop is a game-changer! Their <br>vast selection and unbeatable prices <br>have made upgrading my electronics<br> a breeze. MustShop has it all.</p>
                        <div class="review-stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <img src="images\francemen.jpg" width="200px" height="200px">
                        <h3>John Parker</h3>
                    </div>
                    <div class="col4">
                        <i class="fas fa-quote-left"></i>
                        <p>Must Shop has been my go-to for all<br> things electronics! Their expensive<br>
                             range of products and unbeatable <br> prices make upgrading a joy.</p>
                        <div class="review-stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>
                        <img src="images\europewoman.jpg" width="200px" height="200px">
                        <h3>Alexa Peterson</h3>
                    </div>
                    <div class="col4">
                        <i class="fas fa-quote-left"></i>
                        <p>While Must Shop offers a decent selection <br>
                            of electronics, my experience has been <br>
                            somewhat mixed. Although I found some<br>
                            good deals </p>
                        <div class="review-stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                            <i class="far fa-star"></i>
                        </div>
                        <img src="images\americagirl.jpg" width="200px" height="200px">
                        <h3>Maria Hermanito</h3>
                    </div>
                    <div class="col4">
                        <i class="fas fa-quote-left"></i>
                        <p>Shopping at Must Shop was a disappoint<br> 
                           experience.The products were overpriced, <br>
                           and the customer service was unhelpful.
                        </p>
                        <div class="review-stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                            <i class="far fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>
                        <img src="images\africamen.jpg" width="200px" height="200px">
                        <h3>Godwin Pelahi</h3>
                    </div>
                </div>
            </div>
        </div>

        <!------Brands----->
        <div class="brands">
            <div class="small-container">
                <div class="row">
                    <div class="col5">
                        <img src="images\paypal.png" width="200px" height="150px">
                    </div>
                    <div class="col5">
                        <img src="images\visa.jpg" width="200px" height="150px">
                    </div>
                    <div class="col5">
                        <img src="images\revolut-bank.png" width="200px" height="150px">
                    </div>
                    <div class="col5">
                        <img src="images\mastercard.png" width="200px" height="150px">
                    </div>
                    <div class="col5">
                        <img src="images\jcc.jpg" width="200px" height="150px">
                    </div>
                </div>
            </div>
        </div>

        <!--------Foutter-->
        <?php
        require_once "footer.php";
        ?>
        

        <script>
    document.querySelector('.header .navbar a[href="cart.php"] img').addEventListener('click', function() {
        window.location.href = 'cart.php';
    });
</script>

    </body>
</html>