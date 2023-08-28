<?php
if(!isset($_GET['magic']) || $_GET['magic'] != 'music'){
    header('Location: index.html');
    die();
}

?>


<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="DJoz Template">
    <meta name="keywords" content="DJoz, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dj Saveta</title>

    <link href="https://fonts.googleapis.com/css2?family=Rajdhani:wght@400;500;600;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/barfiller.css" type="text/css">
    <link rel="stylesheet" href="css/nowfont.css" type="text/css">
    <link rel="stylesheet" href="css/rockville.css" type="text/css">
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>

<body>
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <header class="header">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 col-md-2">
                    <div class="header__logo">
                        <a href="index.html"><img src="img/logo.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-10 col-md-10">
                    <div class="header__nav">
                        <nav class="header__menu mobile-menu">
                            <ul>
                                <li class="active"><a href="index.html">Home</a></li>
                                <li><a href="about.html">About me</a></li>
                            </ul>
                        </nav>
                        <div class="header__right__social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-dribbble"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div id="mobile-menu-wrap"></div>
        </div>
    </header>
    <section class="hero spad set-bg" data-setbg="img/hero-bg.png">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="hero__text">
                        <span>Welcome</span>
                        <h1>Feel the heart beats</h1>
                        <p>Lets enjoy together with my favourite songs</p>
                        <a href="https://www.youtube.com/watch?v=YVkUvmDQ3HY" class="play-btn video-popup"><i class="fa fa-play"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="linear__icon">
            <i class="fa fa-angle-double-down"></i>
        </div>
    </section>

    <section class="about spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="about__pic">
                        <img src="img/about/about.png" alt="">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about__text">
                        <div class="section-title">
                            <h2>DJ Saveta</h2>
                            <h1>About me</h1>
                        </div>
                        <p>DJ Jelisaveta Stojanovic knows how to move your mind, body and soul by delivering tracks that stand out
                            from the norm. As if this impressive succession of high impact, floor-filling bombs wasn’t
                            enough to sustain.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="track spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="section-title">
                        <h2>Admin page</h2>
                        <h1>Choose your site</h1>
                    </div>
                </div>

            </div>
            <div class="row">
                <div class="col-lg-4">
                    <h3>New track</h3>
                    <form method="post" action="logic/newtrack.php" enctype="multipart/form-data">
                        <label for="track_name">Track name</label>
                        <input class="form-control" type="text" id="track_name" name="track_name" placeholder="Track name">
                        <label for="duration">Duration</label>
                        <input class="form-control" type="integer" id="duration" name="duration" placeholder="Duration">
                        <label for="author">Author</label>
                        <select id="author" name="author" class="form-control">

                        </select>
                        <label for="genre">Genre</label>
                        <select class="form-control" id="genre" name="genre">

                        </select>
                        <label for="track_location">Upload mp3 track</label>
                        <input name="track_location" type="file" id="track_location" class="form-control">
                        <hr>
                        <button class="btn btn-primary" type="submit">Add track</button>
                    </form>
                </div>
                <div class="col-lg-4">
                    <h3>Change song name</h3>
                    <form method="post" action="logic/updatetrack.php">
                        <label for="track">Track</label>
                        <select id="track" name="track" class="form-control">

                        </select>
                        <label for="new_track_name">New track name</label>
                        <input class="form-control" type="text" id="new_track_name" name="new_track_name" placeholder="New track name">
                        <hr>
                        <button class="btn btn-info" type="submit">Update track name</button>
                    </form>
                </div>
                <div class="col-lg-4">
                    <h3>Delete track</h3>
                    <form method="post" action="logic/deletetrack.php">
                        <label for="track_delete">Track</label>
                        <select id="track_delete" name="track_delete" class="form-control">

                        </select>
                        <hr>
                        <button class="btn btn-danger" type="submit">Delete track</button>
                    </form>
                </div>
            </div>
        </div>
    </section>


    <footer class="footer spad set-bg mt-4" data-setbg="img/footer-bg.png">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="footer__address">
                        <ul>
                            <li>
                                <i class="fa fa-phone"></i>
                                <p>Phone</p>
                                <h6>+381 65 4445 433</h6>
                            </li>
                            <li>
                                <i class="fa fa-envelope"></i>
                                <p>Email</p>
                                <h6>djsaveta@gmail.com</h6>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 offset-lg-1 col-md-6">
                    <div class="footer__social">
                        <h2>DJ Saveta</h2>
                        <div class="footer__social__links">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-dribbble"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 offset-lg-1 col-md-6">
                    <div class="footer__newslatter">
                        <h4>Enter magic word</h4>
                        <form method="get" action="adminpage.php">
                            <input name="magic" type="text" placeholder="Magic word">
                            <button type="submit"><i class="fa fa-send-o"></i></button>
                        </form>
                    </div>
                </div>
            </div>

			<div class="footer__copyright__text">
				<p>Copyright &copy; <script>document.write(new Date().getFullYear());</script> All rights reserved </p>
			</div>

        </div>
    </footer>

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery.nicescroll.min.js"></script>
    <script src="js/jquery.barfiller.js"></script>
    <script src="js/jquery.countdown.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>

    <script>

        function getAuthors(){
            $.ajax({
                url: 'logic/getauthors.php',
                success: function(data){
                    let output = '';
                    data = JSON.parse(data);

                    for (let i = 0; i < data.length; i++) {
                        let item = data[i];

                        output += '<option value="' + item.id + '">' + item.name + '</option>';
                    }

                    $('#author').html(output);
                }
            });
        }

        function getGenres(){
            $.ajax({
                url: 'logic/getgenres.php',
                success: function(data){
                    let output = '';
                    data = JSON.parse(data);
                    for (let i = 0; i < data.length; i++) {
                        let item = data[i];

                        output += '<option value="' + item.id + '">' + item.genre_name + '</option>';
                    }

                    $('#genre').html(output);
                }
            });
        }

        function getTracks(){
            $.ajax({
                url: 'logic/gettracks.php',
                success: function(data){
                    let output = '';
                    data = JSON.parse(data);
                    for (let i = 0; i < data.length; i++) {
                        let item = data[i];

                        output += '<option value="' + item.id + '">' + item.track_name + '</option>';
                    }

                    $('#track').html(output);
                    $('#track_delete').html(output);
                }
            });
        }

        getAuthors();
        getGenres();
        getTracks();
    </script>


</body>

</html>