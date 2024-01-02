<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Grocery Shop</title>
    <!-- CSS Link -->
    <link rel="stylesheet" href="css\style.css">

    <!-- bootstrap link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap');

        body {
            font-family: "Poppins", sans-serif;
            color: #444444;
        }

        a,
        a:hover {
            text-decoration: none;
            color: inherit;
        }

        .section-products {
            padding: 80px 0 54px;
        }

        .section-products .header {
            margin-bottom: 50px;
        }

        .section-products .single-product {
            margin-bottom: 26px;
        }

        .section-products .single-product .part-1 {
            position: relative;
            height: 290px;
            max-height: 290px;
            margin-bottom: 20px;
            overflow: hidden;
        }

        .section-products .single-product .part-1::before {
            position: absolute;
            content: "";
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
            transition: all 0.3s;
        }

        .section-products .single-product:hover .part-1::before {
            transform: scale(1.2, 1.2) rotate(5deg);
        }

        .section-products #product-1 .part-1::before {
            background: url("../images/cake.jpg") no-repeat center;
            background-size: cover;
            transition: all 0.3s;
        }

        .section-products #product-2 .part-1::before {
            background: url("../images/chocolate.jpg") no-repeat center;
            background-size: cover;
        }

        .section-products #product-3 .part-1::before {
            background: url("../images/frozenrasberries.jpg") no-repeat center;
            background-size: cover;
        }

        .section-products #product-4 .part-1::before {
            background: url("../images/icecream.jpg") no-repeat center;
            background-size: cover;
        }

        .section-products #product-5 .part-1::before {
            background: url("../images/juice.png") no-repeat center;
            background-size: cover;
            transition: all 0.3s;
        }

        .section-products #product-6 .part-1::before {
            background: url("../images/softdrinks.jpg") no-repeat center;
            background-size: cover;
        }

        .section-products #product-7 .part-1::before {
            background: url("../images/milk.jpg") no-repeat center;
            background-size: cover;
        }

        .section-products #product-8 .part-1::before {
            background: url("../images/yogurt.jpg") no-repeat center;
            background-size: cover;
        }

        .section-products .single-product .part-1 .discount,
        .section-products .single-product .part-1 .new {
            position: absolute;
            top: 15px;
            left: 20px;
            color: #ffffff;
            background-color: #fe302f;
            padding: 2px 8px;
            text-transform: uppercase;
            font-size: 0.85rem;
        }

        .section-products .single-product .part-1 .new {
            left: 0;
            background-color: #444444;
        }

        .section-products .single-product .part-1 ul {
            position: absolute;
            bottom: -41px;
            left: 20px;
            margin: 0;
            padding: 0;
            list-style: none;
            opacity: 0;
            transition: bottom 0.5s, opacity 0.5s;
        }

        .section-products .single-product:hover .part-1 ul {
            bottom: 30px;
            opacity: 1;
        }

        .section-products .single-product .part-1 ul li {
            display: inline-block;
            margin-right: 4px;
        }

        .section-products .single-product .part-1 ul li a {
            display: inline-block;
            width: 40px;
            height: 40px;
            line-height: 40px;
            background-color: #ffffff;
            color: #444444;
            text-align: center;
            box-shadow: 0 2px 20px rgb(50 50 50 / 10%);
            transition: color 0.2s;
        }

        .section-products .single-product .part-1 ul li a:hover {
            color: #fe302f;
        }

        .section-products .single-product .part-2 .product-title {
            font-size: 1rem;
        }

        .section-products .single-product .part-2 h4 {
            display: inline-block;
            font-size: 1rem;
        }

        .section-products .single-product .part-2 .product-old-price {
            position: relative;
            padding: 0 7px;
            margin-right: 2px;
            opacity: 0.6;
        }

        .section-products .single-product .part-2 .product-old-price::after {
            position: absolute;
            content: "";
            top: 50%;
            left: 0;
            width: 100%;
            height: 1px;
            background-color: #444444;
            transform: translateY(-50%);
        }
    </style>
</head>

<body>
    <nav class="w-100 px-2 py-1 position-fixed top-0 text-light" id="login-nav" style="background-color:#343a40;">
        <div class="d-flex justify-content-between w-100">
            <div>
                <p class="m-0 truncate-1"><small>Multi-Vendor Online Grocery Shop</small></p>
            </div>
            <div>
                <a href="..\clientlogin.php" class="mx-2 text-light text-decoration-none font-weight-bolder">Client
                    Login</a> |
                <a href="..\vendorlogin.php" class="mx-2 text-light text-decoration-none font-weight-bolder">Vendor
                    Login</a> |
                <a href="..\adminlogin.php" class="mx-2 text-light text-decoration-none font-weight-bolder">Admin
                    Login</a>
            </div>
        </div>
    </nav><br>
    <!-- Navbar-1 Ends-->

    <!-- Navbar-2 -->
    <nav class="w-100 navbar navbar-expand-lg navbar-light position-fixed"
        style="margin-top:8.3px; background-color: #f8f9fa;">
        <div class=" container-fluid">
            <a class="navbar-brand" href="#">ROSX GROCERY SHOP</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="..\index.php">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Products
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="..\products\FandV.php">Fruits and Vegetables</a></li>
                            <li><a class="dropdown-item  " href="..\products\MandS.php">Meat and Sea Food</a></li>
                            <li><a class=" dropdown-item active" href="..\products\frozen.php"
                                    style="background-color: #343a40;">Frozen Foods</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="..\contact.php">Contact us</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
    <!-- Navbar-2 Ends-->

    <!-- Carousel -->
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel"
        style="margin-top:9vh;z-index:-1;">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="../images/frozenbanner1.jpg" class="d-block w-100" style="height:50vh;" alt="...">
            </div>
            <div class="carousel-item">
                <img src="../images/frozenbanner2.jpg" class="d-block w-100" style="height:50vh;" alt="...">
            </div>
            <div class="carousel-item">
                <img src="../images/frozenbanner3.jpg" class="d-block w-100" style="height:50vh;" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <!-- Carousel end-->

    <!-- Fruits and Vegetables Products -->
    <section class="section-products">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-md-8 col-lg-6">
                    <div class="header">
                        <h1>Frozen Food</h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- Single Product -->
                <div class="col-md-6 col-lg-4 col-xl-3">
                    <div id="product-1" class="single-product">
                        <div class="part-1">
                            <ul>
                                <li><a href="#"><i class="fas fa-shopping-cart"></i></a></li>
                                <li><a href="#"><i class="fas fa-heart"></i></a></li>
                            </ul>
                        </div>
                        <div class="part-2">
                            <h3 class="product-title">Cake</h3>
                            <h4 class="product-old-price"><i class="fa-solid fa-indian-rupee-sign"></i>1000</h4>
                            <h4 class="product-price"><i class="fa-solid fa-indian-rupee-sign"></i>800</h4>
                        </div>
                    </div>
                </div>
                <!-- Single Product -->
                <div class="col-md-6 col-lg-4 col-xl-3">
                    <div id="product-2" class="single-product">
                        <div class="part-1">
                            <span class="discount">15% off</span>
                            <ul>
                                <li><a href="#"><i class="fas fa-shopping-cart"></i></a></li>
                                <li><a href="#"><i class="fas fa-heart"></i></a></li>
                            </ul>
                        </div>
                        <div class="part-2">
                            <h3 class="product-title">Chocolate</h3>
                            <h4 class="product-price"><i class="fa-solid fa-indian-rupee-sign"></i>100</h4>
                        </div>
                    </div>
                </div>
                <!-- Single Product -->
                <div class="col-md-6 col-lg-4 col-xl-3">
                    <div id="product-3" class="single-product">
                        <div class="part-1">
                            <ul>
                                <li><a href="#"><i class="fas fa-shopping-cart"></i></a></li>
                                <li><a href="#"><i class="fas fa-heart"></i></a></li>
                            </ul>
                        </div>
                        <div class="part-2">
                            <h3 class="product-title">Frozen Fruits</h3>
                            <h4 class="product-old-price"><i class="fa-solid fa-indian-rupee-sign"></i>300</h4>
                            <h4 class="product-price"><i class="fa-solid fa-indian-rupee-sign"></i>200</h4>
                        </div>
                    </div>
                </div>
                <!-- Single Product -->
                <div class="col-md-6 col-lg-4 col-xl-3">
                    <div id="product-4" class="single-product">
                        <div class="part-1">
                            <span class="new">new</span>
                            <ul>
                                <li><a href="#"><i class="fas fa-shopping-cart"></i></a></li>
                                <li><a href="#"><i class="fas fa-heart"></i></a></li>
                            </ul>
                        </div>
                        <div class="part-2">
                            <h3 class="product-title">Frozen Vegetables</h3>
                            <h4 class="product-price"><i class="fa-solid fa-indian-rupee-sign"></i>150</h4>
                        </div>
                    </div>
                </div>
                <!-- Single Product -->
                <div class="col-md-6 col-lg-4 col-xl-3">
                    <div id="product-5" class="single-product">
                        <div class="part-1">
                            <ul>
                                <li><a href="#"><i class="fas fa-shopping-cart"></i></a></li>
                                <li><a href="#"><i class="fas fa-heart"></i></a></li>
                            </ul>
                        </div>
                        <div class="part-2">
                            <h3 class="product-title">Ice-Cream</h3>
                            <h4 class="product-old-price"><i class="fa-solid fa-indian-rupee-sign"></i>150</h4>
                            <h4 class="product-price"><i class="fa-solid fa-indian-rupee-sign"></i>100</h4>
                        </div>
                    </div>
                </div>
                <!-- Single Product -->
                <div class="col-md-6 col-lg-4 col-xl-3">
                    <div id="product-6" class="single-product">
                        <div class="part-1">
                            <span class="discount">15% off</span>
                            <ul>
                                <li><a href="#"><i class="fas fa-shopping-cart"></i></a></li>
                                <li><a href="#"><i class="fas fa-heart"></i></a></li>
                            </ul>
                        </div>
                        <div class="part-2">
                            <h3 class="product-title">Juice</h3>
                            <h4 class="product-price"><i class="fa-solid fa-indian-rupee-sign"></i>100</h4>
                        </div>
                    </div>
                </div>
                <!-- Single Product -->
                <div class="col-md-6 col-lg-4 col-xl-3">
                    <div id="product-7" class="single-product">
                        <div class="part-1">
                            <ul>
                                <li><a href="#"><i class="fas fa-shopping-cart"></i></a></li>
                                <li><a href="#"><i class="fas fa-heart"></i></a></li>
                            </ul>
                        </div>
                        <div class="part-2">
                            <h3 class="product-title">Milk</h3>
                            <h4 class="product-old-price"><i class="fa-solid fa-indian-rupee-sign"></i>100</h4>
                            <h4 class="product-price"><i class="fa-solid fa-indian-rupee-sign"></i>50</h4>
                        </div>
                    </div>
                </div>
                <!-- Single Product -->
                <div class="col-md-6 col-lg-4 col-xl-3">
                    <div id="product-8" class="single-product">
                        <div class="part-1">
                            <span class="new">new</span>
                            <ul>
                                <li><a href="#"><i class="fas fa-shopping-cart"></i></a></li>
                                <li><a href="#"><i class="fas fa-heart"></i></a></li>
                            </ul>
                        </div>
                        <div class="part-2">
                            <h3 class="product-title">Yogurt</h3>
                            <h4 class="product-price"><i class="fa-solid fa-indian-rupee-sign"></i>50</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Fruits and Vegetables Products end -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <!-- fontawsome link -->
    <script src="https://kit.fontawesome.com/1d1be88acc.js" crossorigin="anonymous"></script>
</body>

</html>