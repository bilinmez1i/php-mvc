<?php require view('static/header') ?>

<section class="slider">
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="http://via.placeholder.com/1920x720?text=FirstSlide" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="http://via.placeholder.com/1920x720?text=SecondSlide" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="http://via.placeholder.com/1920x720?text=ThirdSlide" alt="Third slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
</section>

<?php require view('static/footer') ?>
