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
</head>

<body>
    <!-- Navbar-1 -->
    <nav class="w-100 px-2 py-1 position-fixed top-0 text-light" id="login-nav" style="background-color:#343a40;">
        <div class="d-flex justify-content-between w-100">
            <div>
                <p class="m-0 truncate-1"><small>Multi-Vendor Online Grocery Shop</small></p>
            </div>
            <div>
                <a href="clientlogin.php" class="mx-2 text-light text-decoration-none font-weight-bolder">Client
                    Login</a> |
                <a href="vendorlogin.php" class="mx-2 text-light text-decoration-none font-weight-bolder">Vendor
                    Login</a> |
                <a href="adminlogin.php" class="mx-2 text-light text-decoration-none font-weight-bolder">Admin
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
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Products
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="products\FandV.php">Fruits and Vegetables</a></li>
                            <li><a class="dropdown-item" href="products\MandS.php">Meat and Sea Food</a></li>
                            <li><a class="dropdown-item" href="products\frozen.php">Frozen Foods</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="contact.php">Contact us</a>
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

    <!-- Frontpage Image -->
    <div class="frontpageimage">
        <h1 class="shopslogan">ROSX Grocery Shop</h1>
    </div>
    <!-- Frontpage Image End-->

    <!-- Products Category Images -->
    <div class="productscatagory">
        <h2>Products Category</h2>
        <hr>
        <div class="productcat">
            <figure>
                <img src="images\fruitsandvegetables.jpg" alt="Fruits and Vegetables" width="300vh" height="400vh">
                <a href="products\FandV.php">
                    <figcaption>Fruits and Vegetables</figcaption>
                </a>
            </figure>
            <figure>
                <img src="images\meatandseafood.jpg" alt="Meat and Sea Food" width="300vh" height="400vh">
                <a href="products\MandS.php">
                    <figcaption>Meat and Sea Food</figcaption>
                </a>
            </figure>
            <figure>
                <img src="images\frozenfood.jpg" alt="Frozen Food" width="300vh" height="400vh">
                <a href="products\frozen.php">
                    <figcaption>Frozen Food</figcaption>
                </a>
            </figure>
        </div>
    </div>
    <!-- Products Category Images Ends-->

    <!-- Footer -->
    <footer class="main-footer">
        <strong>Copyright © 2023.
        </strong>
        All rights reserved.
        <b>ROSX Grocery Shop by <a href="mailto:sumitmali2000@gmail.com" target="blank">Sumit</a> v1.0</b>
    </footer>
    <!-- Footer ends-->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <!-- fontawsome link -->
    <script src="https://kit.fontawesome.com/1d1be88acc.js" crossorigin="anonymous"></script>
</body>

</html>