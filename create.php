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
    <script src="https://cdn.ckeditor.com/4.17.1/standard-all/ckeditor.js"></script>
</head>

<body>

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
        <!-- form -->
        <div class="container py-4">
            <div class="row">
                <div class="col-md-6 offset-2">
                    <form action="" class="form-horizontal form-control" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="title">Add New Post
                                <input type="text" class="form-control" name="title" placeholder="Add Title Here">
                            </label>
                        </div>
                        <div class="form-group">
                            <label for="description">Description
                                <textarea id="description" cols="80" rows="10" name="description" class="form-control"></textarea>
                            </label>
                        </div>
                        <div class="form-group">
                            <input type="file" size="60" />
                        </div>
                        <div class="form-group">
                            <a href="#" class="btn btn-success btn-lg">Create</a>
                        </div>
                    </form>

                </div>
            </div>
        </div>
        </textarea>
    </section>

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/splide.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/custom2.js"></script>
</body>

</html>