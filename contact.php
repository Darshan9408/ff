<?php
require("./init/init.php");
require(pathOf('includes/header.php'));
require(pathOf('includes/nav.php'));
?>
    <!-- Header Start -->
    <div class="container-fluid hero-header bg-light py-5 mb-5">
        <div class="container py-5">
            <div class="row g-5 align-items-center">
                <div class="col-lg-4">
                    <h1 class="display-4 mb-3 animated slideInDown">Contact Us</h1>
                    <nav aria-label="breadcrumb animated slideInDown">
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item"><a href="<?= urlOf('') ?>">Home</a></li>
                            <!-- <li class="breadcrumb-item"><a href="#">Pages</a></li> -->
                            <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
                        </ol>
                    </nav>
                </div>
                <div class="col-lg-8 fadeIn text-center ">
                    <!-- <div class="row g-3"> -->
                        <!-- <div class="col- text-end"> -->
                            <img class="img-fluid  w-90 "  style="height: 20rem;" src="<?= urlOf('/img/ff2.png') ?>" alt="">
                        <!-- </div> -->
                        <img class="img-fluid  w-90 border-1 "  style="height: 18rem;" src="<?= urlOf('/img/flayer.jpeg') ?>" alt="">
                        
                    <!-- </div> -->
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->


    <?php
require(pathOf('includes/contact.php'));

?>

    <!-- Google Map Start -->
    <div class="container py-5 px-0 wow fadeInUp border border-1 border-dark" data-wow-delay="0.1s">
        <!-- <iframe class="w-100 mb-n2" style="height: 450px;"
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3001156.4288297426!2d-78.01371936852176!3d42.72876761954724!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4ccc4bf0f123a5a9%3A0xddcfc6c1de189567!2sNew%20York%2C%20USA!5e0!3m2!1sen!2sbd!4v1603794290143!5m2!1sen!2sbd"
            frameborder="0" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe> -->
            <iframe class="w-100 mb-n2" style="height: 550px;" src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3687.1794811497048!2d70.05919391495758!3d22.459888685240855!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zMjLCsDI3JzM1LjYiTiA3MMKwMDMnNDEuMCJF!5e0!3m2!1sen!2sin!4v1687526722921!5m2!1sen!2sin"frameborder="0" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    </div>
    <!-- Google Map End -->

    <?php
require(pathOf('includes/thankyou.php'));

?>

<a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>

<?php
require(pathOf('includes/script.php'));
require(pathOf('includes/footer.php'));
require(pathOf('includes/footer2.php'));
?>
