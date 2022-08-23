<?php

include 'components/connect.php';

session_start();

if (isset($_SESSION['user_id'])) {
    $user_id = $_SESSION['user_id'];
} else {
    $user_id = '';
}

include 'components/wishlist_cart.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>

    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

    <style>
    .services-grid {
        display: -webkit-box;
        display: flex;
        -webkit-box-align: center;
        align-items: center;
    }

    .service {
        background: #fff;
        margin: 20px;
        padding: 20px;
        border-radius: 4px;
        text-align: center;
        -webkit-box-flex: 1;
        flex: 1;
        display: -webkit-box;
        display: flex;
        flex-wrap: wrap;
        border: 2px solid #e7e7e7;
        -webkit-transition: all 0.3s ease;
        -moz-transition: all 0.3s ease;
        transition: all 0.3s ease;
    }

    .service li{
      list-style: none;
      font-size: 18px;
    }

    .service p{
      font-size: 18px;
    }
    .service h2{
         color: #900000;
    }

    .service:hover {
        -webkit-box-shadow: 0 5px 10px rgba(0, 0, 0, 0.08);
        -moz-box-shadow: 0 5px 10px rgba(0, 0, 0, 0.08);
        box-shadow: 0 5px 10px rgba(0, 0, 0, 0.08);
    }

 

    .service1 h2, {
        color: #42b7ca;
    }

    .service1:hover {
        border: 2px solid #42b7ca;
    }


    .service2 h2, {
        color: #425fca;
    }

    .service2:hover {
        border: 2px solid #425fca;
    }

    .service3 h2, {
        color: #9c42ca;
    }

    .service3:hover {
        border: 2px solid #9c42ca;
    }

    .service>* {
        flex: 1 1 100%;
    }

    .service .cta {
        align-self: flex-end;
    }
    .swiper-wrapper{
      display: flex;
      justify-content: center;
    }

    @media all and (max-width:900px) {
        .services-grid {
            display: -webkit-box;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            flex-direction: column;
        }
    }
    </style>

</head>

<body>

    <?php include 'components/user_header.php'; ?>

    <div class="home-bg">
        <section class="home">
            <div class="swiper home-slider">
                <div class="swiper-wrapper">
                    <div class="swiper-slide slide">
                        <div class="image">
                            <img src="images/slider/games.png" alt="games">
                        </div>
                        <div class="content">
                            <span>PS5 GAMES</span>
                            <h3>Now available at GameZone</h3>
                            <a href="shop.php" class="btn">shop now</a>
                        </div>
                    </div>
                    <div class="swiper-slide slide">
                        <div class="image">
                            <img src="images/slider/xbox.jpg" alt="xbox">
                        </div>
                        <div class="content">
                            <span>XBOX GAMES</span>
                            <h3>Now available at GameZone</h3>
                            <a href="shop.php" class="btn">shop now</a>
                        </div>
                    </div>
                    <div class="swiper-slide slide">
                        <div class="image">
                            <img src="images/slider/steam.png" alt="steam">
                        </div>
                        <div class="content">
                            <span>Steam Gift Cards</span>
                            <h3>Now available at GameZone</h3>
                            <a href="shop.php" class="btn">shop now</a>
                        </div>
                    </div>
                </div>

                <div class="swiper-pagination"></div>
            </div>
        </section>

    </div>
    <section class="Services">
        <h1 class="heading">Services</h1>
        <div class="services-grid">
            <div class="service service1">
                <h2>Buy, Sell and Trade Games</h2>
                <ul>
                  <li>MTG Cards</li>
                  <li>Video Games</li>
                  <li>Game Consoles</li>
                  <li>Gaming Accessories</li>
                </ul>
            </div>

            <div class="service service2">
                <h2>Tournaments</h2>
                <p>Compete in our local or national tournaments and battle your way through the brackets towards 1st place! Win bragging rights and awesome prizes.</p>
            </div>

            <div class="service service3">
                <h2>CONSOLE® Gaming</h2>
                <p>We provide the controllers, the games, the online accounts... everything to get you gaming</p>
            </div>
        </div>
    </section>

    <section class="home-products">
        <h1 class="heading">latest products</h1>
        <div class="swiper products-slider">
            <div class="swiper-wrapper">

                <?php
                $select_products = $conn->prepare(
                    'SELECT * FROM `products` LIMIT 6'
                );
                $select_products->execute();
                if ($select_products->rowCount() > 0) {
                    while (
                        $fetch_product = $select_products->fetch(
                            PDO::FETCH_ASSOC
                        )
                    ) { ?>
                <form action="" method="post" class="swiper-slide slide">
                    <input type="hidden" name="pid" value="<?= $fetch_product[
                        'id'
                    ] ?>">
                    <input type="hidden" name="name" value="<?= $fetch_product[
                        'name'
                    ] ?>">
                    <input type="hidden" name="price" value="<?= $fetch_product[
                        'price'
                    ] ?>">
                    <input type="hidden" name="image" value="<?= $fetch_product[
                        'image_01'
                    ] ?>">
                    <button class="fas fa-heart" type="submit" name="add_to_wishlist"></button>
                    <a href="quick_view.php?pid=<?= $fetch_product[
                        'id'
                    ] ?>" class="fas fa-eye"></a>
                    <img src="uploaded_img/<?= $fetch_product[
                        'image_01'
                    ] ?>" alt="">
                    <div class="name"><?= $fetch_product['name'] ?></div>
                    <div class="flex">
                        <div class="price"><span>$</span><?= $fetch_product[
                            'price'
                        ] ?><span>/-</span></div>
                        <input type="number" name="qty" class="qty" min="1" max="99"
                            onkeypress="if(this.value.length == 2) return false;" value="1">
                    </div>
                    <input type="submit" value="add to cart" class="btn" name="add_to_cart">
                </form>
                <?php }
                } else {
                    echo '<p class="empty">no products added yet!</p>';
                }
                ?>

            </div>
            <div class="swiper-pagination"></div>
        </div>
    </section>









    <?php include 'components/footer.php'; ?>

    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
    <script src="js/script.js"></script>

    <script>
    var swiper = new Swiper(".home-slider", {
        loop: true,
        spaceBetween: 20,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
    });

    var swiper = new Swiper(".products-slider", {
        loop: true,
        spaceBetween: 20,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        breakpoints: {
            550: {
                slidesPerView: 2,
            },
            768: {
                slidesPerView: 2,
            },
            1024: {
                slidesPerView: 3,
            },
        },
    });
    </script>
</body>

</html>