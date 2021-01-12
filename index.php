<!DOCTYPE html>
<html lang="en">
<head>
    
    <title> Home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<header>
    
    <?php
    // This includes header content navigation bar
     include 'header.php';?>
</header>
<body>
    <!-- image file -->
    <div class="container-fluid cover">
        <img src="https://wheelmode.s3.me-south-1.amazonaws.com/media/cache/sylius_shop_product_original/static/home/search-banner/car.png" alt="">
    </div>
        <!-- container starts here -->
        <div class="container">
            <!-- This is a Grid 
                THis row is for text  -->
            <div class="row">
                <div class="col-sm-12" style="text-align: center;">
                    <h2 class="text-danger">Our Four Step process</h2>
                    <p>The easiest way to search and buy new tyres
                    </p>
                </div>
            </div>
            <!-- This row is to seperate columns -->
            <div class="row justify-content-md-center">
                <div class="col-sm ">
                    <img src="https://wheelmode.com/images/home/our-process/1.png  " alt="Tyre type">
                    <h3>Search & select your tyrre</h3>
                    <p>We stock a wide range of online tyres for all vehicles Choose Installation mode</p>
                </div>
                <div class="col-sm-1">
                    <div class="arrows"></div>
                </div>
                <div class="col-sm">
                    <img src="https://wheelmode.com/images/home/our-process/2.png" alt="Installation type">
                    <h3>Choose Installation mode</h3>
                    <p>You can select 100+ Installers across UAE, you can also choose mobile fitment or home delivery</p>
                </div>
                <div class="col col-sm -1">
                    <div class="arrows"></div>
                </div>
                <div class=" col col-sm">
                    <img src="https://wheelmode.com/images/home/our-process/3.png" alt="online payment">
                    <h3>Secure Online Payment</h3>
                    <p>We ensure you that our payment gateways are 100% safe</p>
                </div>
                <div class="col col-sm-1">
                    <div class="arrows"></div>
                </div>
                <div class="col col-sm">
                    <img src="https://wheelmode.com/images/home/our-process/4.png" alt="delivery">
                    <h3>Delivery & Installation</h3>
                    <p>Within 24hrs your tyres will be delivered to your select location</p>
                </div>
            </div>
        </div>

</body>
</html>