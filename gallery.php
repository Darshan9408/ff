<?php
require("./init/init.php");
require(pathOf('includes/header.php'));
require(pathOf('includes/nav.php'));

?>

<!-- Header Start -->
<div class="container-fluid hero-header bg-light py-5 mb-5">
        <div class="container py-5">
            <div class="row g-5 align-items-center">
                <div class="col-lg-4 ">
                    <h1 class="display-4 mb-3 animated slideInDown">About Us</h1>
                    <nav aria-label="breadcrumb animated slideInDown">
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item"><a href="<?= urlOf('') ?>">Home</a></li>
                            <!-- <li class="breadcrumb-item"><a href="#">Pages</a></li> -->
                            <li class="breadcrumb-item active" aria-current="page">Gallery</li>
                        </ol>
                    </nav>
                </div>
                <div class="col-lg-8 fadeIn text-center ">
                    <!-- <div class="row g-3"> -->
                        <!-- <div class="col- text-end"> -->
                            <img class="img-fluid  w-90 "  style="height: 20rem;" src="<?= urlOf('/img/ff2.png') ?>" alt="">
                        <!-- </div> -->
                        <!-- <img class="img-fluid  w-90 border-1 "  style="height: 18rem;" src="<?= urlOf('/img/card.jpeg') ?>" alt=""> -->
                        
                    <!-- </div> -->
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->
<?php
require(pathOf('includes/gallery.php'));

?>
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>

<?php
require(pathOf('includes/script.php'));
require(pathOf('includes/footer.php'));
require(pathOf('includes/footer2.php'));
?>