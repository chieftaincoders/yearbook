    <!DOCTYPE html>
    <html lang="en" class="menu">
    <head>
        <?php require_once("lib/head-utils.php");?>
        <link rel="stylesheet" href="lib/css/slideNav.css"/>
    </head>
    <title>Year Book Homepage</title>



    <body id="background">
    <?php require_once("lib/slideNav.php");?>


    <div id="landingPage">
        <h1>SHS YEARBOOK</h1>
    </div>
    
       
            <div class="row">
                <div class="col-lg-2 col-sm-6">
                    <div class="thumbnail">
                        <img src="http://static.wixstatic.com/media/44891a_f061326c8d0d4d34ad713f98382ec834.jpg_srz_580_430_85_22_0.50_1.20_0.00_jpg_srz">
                    </div>
                </div>
                <div class="col-lg-2 col-sm-6">
                    <div class="thumbnail">
                        <img src="../yearbook/lib/images/chieftains.png">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-2 col-sm-6">
                    <div class="thumbnail">
                        <img src="../yearbook/lib/images/chieftains.png">
                    </div>
                </div>
                <div class="col-lg-2 col-sm-6">
                    <div class="thumbnail">
                        <img src="../yearbook/lib/images/logo%20cheifs.jpg">
                    </div>
                </div>
            </div>
            
                <!--==================================================
                       Carousel
                ================================================== -->
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                        <li data-target="#myCarousel" data-slide-to="3"></li>
                        <li data-target="#myCarousel" data-slide-to="4"></li>
                        <li data-target="#myCarousel" data-slide-to="5"></li>
                        <li data-target="#myCarousel" data-slide-to="6"></li>
                        <li data-target="#myCarousel" data-slide-to="7"></li>


                    </ol>
                    <div class="carousel-inner" role="listbox">
                        <div class="item active">
                            <img class="first-slide" src="../yearbook/lib/images/shsFootball.jpg" alt="firstSlide">
                            <div class="container">
                                <div class="carousel-caption">
                                    <h3 class="leadtag-carousel"></h3>
                                    <!-- <h3 class="leadtag-carousel"><span class="fa fa-twitter" aria-hidden="true"></span></h3> -->
                                    <p></p>
                                    <!-- <p><a class="btn btn-lg btn-primary" href="#" role="button">click me</a></p> -->
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <img class="second-slide" src="../yearbook/lib/images/shsROTC.jpg" alt="secondSlide">
                            <div class="container">
                                <div class="carousel-caption">
                                    <h1></h1>
                                    <p></p>
                                    <!-- <p><a class="btn btn-lg btn-primary" href="#" role="button">click me again</a></p> -->
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <img class="third-slide" src="../yearbook/lib/images/VarsityBBaseball.JPG" alt="thirdSlide">
                            <div class="container">
                                <div class="carousel-caption">
                                    <h1></h1>
                                    <p></p>
                                    <!-- <p><a class="btn btn-lg btn-primary" href="#" role="button">click me once more</a></p> -->
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <img class="fourth-slide" src="../yearbook/lib/images/VarsityVB.jpg" alt="fourthSlide">
                            <div class="container">
                                <div class="carousel-caption">
                                    <h1></h1>
                                    <p></p>
                                    <!-- <p><a class="btn btn-lg btn-primary" href="#" role="button">click me once more</a></p> -->
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <img class="fifth-slide" src="../yearbook/lib/images/VBBasketball.jpg" alt="fifthSlide">
                            <div class="container">
                                <div class="carousel-caption">
                                    <h1></h1>
                                    <p></p>
                                    <!-- <p><a class="btn btn-lg btn-primary" href="#" role="button">click me once more</a></p> -->
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <img class="sixth-slide" src="../yearbook/lib/images/VGBasketball.jpg" alt="sixthSlide">
                            <div class="container">
                                <div class="carousel-caption">
                                    <h1></h1>
                                    <p></p>
                                    <!-- <p><a class="btn btn-lg btn-primary" href="#" role="button">click me once more</a></p> -->
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <img class="seventh-slide" src="../yearbook/lib/images/XCGirls.jpg" alt="seventhSlide">
                            <div class="container">
                                <div class="carousel-caption">
                                    <h1></h1>
                                    <p></p>
                                    <!-- <p><a class="btn btn-lg btn-primary" href="#" role="button">click me once more</a></p> -->
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <img class="eighth-slide" src="../yearbook/lib/images/XCChamps.jpg" alt="eighthSlide">
                            <div class="container">
                                <div class="carousel-caption">
                                    <h1></h1>
                                    <p></p>
                                    <!-- <p><a class="btn btn-lg btn-primary" href="#" role="button">click me once more</a></p> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div><!-- /.carousel -->
                <script src="https://code.jquery.com/jquery-3.1.0.min.js" integrity="sha256-cCueBR6CsyA4/9szpPfrX3s49M9vUU5BgtiJj06wt/s=" crossorigin="anonymous"></script>
            


    <!--<div class="row col-md-12">
        <div class="container">
            <div class="col-md-6 col-md-offset-1"
            <h2>What we've learned so far:</h2>
            <p> So far in coding class we've learned alot. We've learned a few new languages such as HTML
                and CSS. We've also learned the tags for each one which are: h1,h2,p,div,button,
                nav-bar,ul,li and i and so many more. In many of our projects there are jumbotrons,
                containers,forms,tables
            </p>
        </div>


        <div class="col-md-5">
            <div class="thumbnail">
                <img src="https://s-media-cache-ak0.pinimg.com/originals/eb/7e/55/eb7e55c4b3dd9b3451a54bd6afab7c7f.png">
            </div>
        </div>
    </div>-->


    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-sm-6">
                <div class="thumbnail">
                    <img src="http://static.wixstatic.com/media/44891a_f061326c8d0d4d34ad713f98382ec834.jpg_srz_580_430_85_22_0.50_1.20_0.00_jpg_srz">
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="thumbnail">
                    <img src="../yearbook/lib/images/footballgame.jpg">
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="thumbnail">
                    <img src="../yearbook/lib/images/guyscreaming.jpg">
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="thumbnail">
                    <img src="../yearbook/lib/images/logochiefs.jpg">
                </div>
            </div>
        </div>
    </div>





    <!--<div class="container col-md-2">
        <h2>Information For Yearbooks</h2>
        <p class="two">nsoiv uhns jhv dvndskjv dsvnfkv jv skjvs djkv dsvjsdvkdsn</p>
    </div>-->

    


</body>

</html>
