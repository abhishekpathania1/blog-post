<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Responsive sidebar template with sliding effect and dropdown menu based on bootstrap 3">
    <title>Alpine</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/splide.min.css">
    <link href="assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
    <!-- sidebar -->
    <div class="sidebar">
        <div class="logo-details">
            <div class="logo_name">ALPINE JOSH</div>
            <i class='bx bx-menu' id="btn"></i>
        </div>
        <ul class="nav-list">
            <li>
                <i class='bx bx-search'></i>
                <input type="text" placeholder="Search...">
                <span class="tooltip">Search</span>
            </li>
            <li>
                <a href="#">
                    <i class='bx bx-grid-alt'></i>
                    <span class="links_name">Popular Topics</span>
                </a>
                <span class="tooltip">Popular Topics</span>
            </li>
            <li>
                <a href="#">
                    <i class='bx bx-user'></i>
                    <span class="links_name">SPORTS</span>
                </a>
                <span class="tooltip">SPORTS</span>
            </li>
            <li>
                <a href="#">
                    <i class='bx bx-chat'></i>
                    <span class="links_name">Links</span>
                </a>
                <span class="tooltip">Links</span>
            </li>
            <li>
                <a href="#">
                    <i class='bx bx-pie-chart-alt-2'></i>
                    <span class="links_name">Stories</span>
                </a>
                <span class="tooltip">Stories</span>
            </li>
            <li>
                <a href="#">
                    <i class='bx bx-folder'></i>
                    <span class="links_name">Contact Us</span>
                </a>
                <span class="tooltip">Contact Us</span>
            </li>
            <li>
                <a href="#">
                    <i class='bx bx-cart-alt'></i>
                    <span class="links_name">Policies</span>
                </a>
                <span class="tooltip">Policies</span>
            </li>
            <li>
                <a href="#">
                    <i class='bx bx-heart'></i>
                    <span class="links_name">GDR Compliances</span>
                </a>
                <span class="tooltip">GDR Compliances</span>
            </li>
            <li>
                <a href="#">
                    <i class='bx bx-cog'></i>
                    <span class="links_name">Affiliate</span>
                </a>
                <span class="tooltip">Affiliate</span>
            </li>
            <li>
                <a href="#">
                    <i class='bx bx-cog'></i>
                    <span class="links_name">Tech Blog</span>
                </a>
                <span class="tooltip">Tech Blog</span>
            </li>
        </ul>
    </div>
    <!-- Main Content -->
    <section class="home-section">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-light bg-white ">
            <a class="navbar-brand" href="#"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle form-control" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Sports </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Cricket</a>
                            <a class="dropdown-item" href="#">Footbal</a>
                            <a class="dropdown-item" href="#">NBA</a>
                        </div>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <button class="btn btn-sm btn-rounded create btn-outline-success"><i class="fa fa-edit"></i>
                        Create</button>
                    <a class="btn btn-sm btn-rounded log btn-danger" href="login.php">LOG IN</a>
                </form>
            </div>
        </nav>
        <!-- Advertisement -->
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="advertisement">
                        <div class="row">
                            <div class="col-md-3 offset-1">
                                <img src="assets/images/logo.png" alt="logo" height="150px" width="100% ">
                            </div>
                            <div class="col-md-6 offset-2 my-4">
                                <img class="advertisement" src="assets/images/advertisement.jpg" alt="logo" width="100%" height="100px">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- List items  -->
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ul class="latest-topics">
                        <a href="" class="latest-topics-link">
                            <li class="latest-topics-item">Featured</li>
                        </a>
                        <a href="" class="latest-topics-link">
                            <li class="latest-topics-item">IND VS ENG</li>
                        </a>
                        <a href="" class="latest-topics-link">
                            <li class="latest-topics-item">ECS T10</li>
                        </a>
                        <a href="" class="latest-topics-link">
                            <li class="latest-topics-item">CPL</li>
                        </a>
                        <a href="" class="latest-topics-link">
                            <li class="latest-topics-item">Continental Cup</li>
                        </a>
                        <a href="" class="latest-topics-link">
                            <li class="latest-topics-item">BAN VS NZ</li>
                        </a>
                        <a href="" class="latest-topics-link">
                            <li class="latest-topics-item">WT20 Qualifier</li>
                        </a>
                        <a href="" class="latest-topics-link">
                            <li class="latest-topics-item">SL VS SA</li>
                        </a>
                        <a href="" class="latest-topics-link float-right">
                            <li class="latest-topics-item">ALL Fixtures</li>
                        </a>
                    </ul>
                    <div class="new-divider"></div>
                </div>
            </div>
        </div>
        <!-- score cards -->
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="owl-carousel owl-theme">
                        <div class="card card-score ">
                            <span class="score text-success">.4th Test</span>
                            <span class="team"><span class="team"><img class="img-nation" src="assets/images/india.svg" alt="india_flag" width="20px" height="20px">IND &nbsp;</span>
                                191/10 &
                                466/10(80.2 Ov)</span>
                            <span class="team"><span class="team"><img class="img-nation" src="assets/images/united-kingdom.png" alt="india_flag" width="20px" height="20px">ENG &nbsp;</span>
                                296/10 &
                                151/2(67.2 Ov)</span><br>
                            <span class="team text-primary "><span class="badge badge-success">LIVE</span>Day 5
                                Session 2, England need 232
                                runs to win.</span>
                        </div>
                        <div class="card card-score ">
                            <span class="score text-success">.1st ODI</span>
                            <span class="team"><span class="team"><img class="img-nation" src="assets/images/wi.svg" alt="west" width="20px" height="20px"> WI &nbsp; &nbsp;&nbsp;</span>
                                321/8 (50 Overs )</span>
                            <span class="team"><span class="team"><img class="img-nation" src="assets/images/NZ.svg" alt="west" width="20px" height="20px">
                                    NZ &nbsp; &nbsp;&nbsp;</span>
                                151/2 ( 25.4 Overs )</span><br>
                            <span class="team text-primary "><span class="badge badge-success">LIVE</span>
                                New Zealand need 170
                                runs to win.</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="new-divider"></div>
        </div>
        <!-- fixtures -->
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="splide">
                        <div class="splide__track">
                            <ul class="splide__list">
                                <li class="splide__slide card card-fixtures">Schedule</li>
                                <li class="splide__slide card card-fixtures">IND VS ENG</li>
                                <li class="splide__slide card card-fixtures">ECS T10</li>
                                <li class="splide__slide card card-fixtures">CPL</li>
                                <li class="splide__slide card card-fixtures">BAN VS NZ</li>
                                <li class="splide__slide card card-fixtures">WT20 Qualifier</li>
                                <li class="splide__slide card card-fixtures">SL VS SA</li>
                                <li class="splide__slide card card-fixtures">IRE VS ZIM</li>
                            </ul>
                        </div>
                    </div>
                    <!-- news card -->
                    <div class="card news">
                        <h5 class="text-danger"><i class='bx bx-star'></i> SPOTLIGHT</h5>
                        <div class="carousel slide" id="carouselExampleControls" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <a class="card-news" href="">
                                                <div class="card">
                                                    <img class="img img-thumbnail" src="assets/images/vk.jpg" alt="1 slide" width=100%" height="200px">
                                                    <p class="author"><b>BY:</b>Abhishek Pathania</p>
                                                    <p class="author-content">IND vs ENG 2021: India playing
                                                        XI's report
                                                        card
                                                        for the 4th Test
                                                    </p>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-md-6">
                                            <a class="card-news" href="">
                                                <div class="card">
                                                    <img class="img img-thumbnail" src="assets/images/vk.jpg" alt="1 slide" width=100%" height="200px">
                                                    <p class="author"><b>BY:</b>Abhishek Pathania</p>
                                                    <p class="author-content">IND vs ENG 2021: India playing
                                                        XI's report
                                                        card
                                                        for the 4th Test
                                                    </p>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <a class="card-news" href="">
                                                <div class="card">
                                                    <img class="img img-thumbnail" src="assets/images/lb.jpg" alt="1 slide" width=100%" height="200px">
                                                    <p class="author"><b>BY:</b>Abhishek Pathania</p>
                                                    <p class="author-content">IND vs ENG 2021: India playing
                                                        XI's report
                                                        card
                                                        for the 4th Test
                                                    </p>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-md-6">
                                            <a class="card-news" href="">
                                                <div class="card">
                                                    <img class="img img-thumbnail" src="assets/images/lb.jpg" alt="1 slide" width=100%" height="200px">
                                                    <p class="author"><b>BY:</b>Abhishek Pathania</p>
                                                    <p class="author-content">IND vs ENG 2021: India playing
                                                        XI's report
                                                        card
                                                        for the 4th Test
                                                    </p>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
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
                        </div>
                    </div>
                </div>
                <!-- advertisement videos -->
                <div class="col-md-5 offset-1">
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <iframe src="https://www.youtube.com/embed/34VirrXKK3Y" frameborder="0" allowfullscreen></iframe>
                            </div>
                            <div class="carousel-item">
                                <iframe src="https://www.youtube.com/embed/UMCmv-A8oUU" frameborder="0" allowfullscreen></iframe>
                            </div>
                            <div class="carousel-item">
                                <iframe src="https://www.youtube.com/embed/KvFeq-F6qeY" frameborder="0" allowfullscreen></iframe>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- News -->
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <ul class="nav nav-tabs">
                        <li class="nav-item">
                            <a class="nav-link news-link active" data-toggle="tab" href="#Recommended"><i class='bx bx-image'></i>
                                Recommended</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link news-link" data-toggle="tab" href="#Latest"><i class='bx bxs-hot'></i>
                                Latest</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link news-link" data-toggle="tab" href="#Video"><i class='bx bx-slideshow'></i>
                                Video</a>
                        </li>
                    </ul>
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div id="Recommended" class="container tab-pane active">
                            <div class="row">
                                <div class="container">
                                    <div class="card card-scor">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <img class="img-responsive img-thumbnail" src="assets/images/news img.jpg" alt="news-card" width="100%" height="20px    ">
                                            </div>
                                            <div class="col-md-8">
                                                <div class="card-body">
                                                    <a href="" class="card-text"> "It's highly doubtful Ravichandran
                                                        Ashwin will be
                                                        picked" -
                                                        Laxman Sivaramakrishnan analyzes India's spin options for
                                                        the T20 World Cup.</a>
                                                    <p class="time">2 hr ago</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="Latest" class="container tab-pane fade"><br>
                            <div class="row">
                                <div class="container">
                                    <div class="card card-scor">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <img class="img-responsive img-thumbnail" src="assets/images/latest-img.jpg" alt="news-card" width="100%" height="20px    ">
                                            </div>
                                            <div class="col-md-8">
                                                <div class="card-body">
                                                    <a href="" class="card-text"> "It's highly doubtful Ravichandran
                                                        Ashwin will
                                                        be
                                                        picked" -
                                                        Laxman Sivaramakrishnan analyzes India's spin options
                                                        for
                                                        the T20 World Cup.</a>

                                                    <p class="time">2 hr ago</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div id="Video" class="container tab-pane fade"><br>
                            <div class="row">
                                <div class="container">
                                    <div class="card card-scor">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <video width="100%" autoplay muted controls>
                                                    <source src="assets/videos/Jujutsu Kaisen 0 Movie - Official Teaser Trailer 2.mp4" type="video/mp4">
                                                </video>
                                            </div>
                                            <div class="col-md-8">
                                                <div class="card-body">

                                                    <a href="" class="card-text"> "It's highly doubtful Ravichandran
                                                        Ashwin will be
                                                        picked" -
                                                        Laxman Sivaramakrishnan analyzes India's spin options for
                                                        the T20 World Cup.</a>
                                                    <p class="time">2 hr ago</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Script tags -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/splide.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/custom.js"></script>
</body>

</html>