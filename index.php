<?php require_once './include/header.php'; ?>

<!-- Header Carousel -->
<header id="myCarousel" class="carousel slide">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
        <div class="item active">
            <div class="fill" style="background-image:url('./img/toy/5.jpg');"></div>
            <style>
                .s1{
                    /*font-family: monospace;*/ 
                    color: #00c853; font-size: 58px;
                    font-weight: 400;

                }
                .s2{
                    color: #69f0ae;
                    font-size: 28px;
                    font-weight: 100;
                    background:  rgba(0,0,0,0.4);
                    border-radius: 30px;
                    /*box-shadow: 64px 64px 12px 40px rgba(0,0,0,0.4) inset;*/
                }
            </style>
            <div class="carousel-caption">
                <h2 class="s1">Lego Family</h2>
                <p class="s2">
                    Help this lego family build their house with different building sets
                </p>
            </div>
        </div>
        <div class="item">
            <div class="fill" style="background-image:url('./img/toy/4.jpg');"></div>
            <div class="carousel-caption">
                <h2 class="s1">Millions</h2>
                <p class="s2">
                    Cuddle up next to your very own minion and minion family
                </p>
            </div>
        </div>
        <div class="item">
            <div class="fill" style="background-image:url('./img/toy/3.jpg');"></div>
            <div class="carousel-caption">
                <h2 class="s1">Rubix Cube</h2>
                <p class="s2">
                    Test your skills and intelligence by solving this puzzle
                </p>
            </div>
        </div>
    </div>

    <!-- Controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
        <span class="icon-prev"></span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
        <span class="icon-next"></span>
    </a>
</header>

<!-- Page Content -->
<div class="container">

    <!-- Marketing Icons Section -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header a_center">
                Welcome to Coby’s Toy Store
            </h1>
        </div>
        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading a_center">
                    <h4><i class="fa fa-fw fa-"></i> Rubix Cube</h4>
                </div>
                <div class="panel-body">

                    <div class="a_center">
                        <img class="border20" src="img/pic3.jpg" alt=""/>
                    </div>
                    <p>
                        Test your skills and intelligence by solving this puzzle
                    </p>

                    <a href="#" class="btn btn-default">Learn More</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading a_center">
                    <h4><i class="fa fa-fw fa-"></i> Superman Action Figure</h4>
                </div>
                <div class="panel-body">
                    <div class="a_center">
                        <img class="border20" src="img/pic4.jpg" alt=""/>
                    </div>
                    <p>
                        Take Superman on all of your adventures with you
                    </p>

                    <a href="#" class="btn btn-default">Learn More</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading a_center">
                    <h4><i class="fa fa-fw fa-"></i> Build a bear?</h4>
                </div>
                <div class="panel-body">
                    <div class="a_center">
                        <img class="border20" src="img/pic5.jpg" alt=""/>
                    </div>
                    <p>
                        Never fear bears again, they are cute and cuddly
                    </p>

                    <a href="#" class="btn btn-default">Learn More</a>
                </div>
            </div>
        </div>
    </div>
    <!-- /.row -->



    <div class="row">
        <div class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-heading a_center"> 
                    <h4><i class="fa fa-fw fa-"></i> Minions</h4>
                </div>
                <div class="panel-body">
                    <div class="a_center">
                        <img class="border20" src="img/pic2.jpg" alt=""/>
                    </div>
                    <p>
                        Cuddle up next to your very own minion and minion family 
                    </p>

                    <a href="#" class="btn btn-default">Learn More</a>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-heading a_center">
                    <h4><i class="fa fa-fw fa-"></i> Lego Family</h4>
                </div>
                <div class="panel-body">
                    <div class="a_center">
                        <img class="border20" src="img/pic1.jpg" alt=""/>
                    </div>
                    <p>
                        Help this lego family build their house with different building sets
                    </p>

                    <a href="#" class="btn btn-default">Learn More</a>
                </div>
            </div>
        </div>
    </div>


    <?php require_once './include/footer.php'; ?>
            