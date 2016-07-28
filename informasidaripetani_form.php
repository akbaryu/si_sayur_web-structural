<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Form informasi dari petani | Hamatech</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/lightbox.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet">
	<link href="css/responsive.css" rel="stylesheet">

    <!--[if lt IE 9]>
	    <script src="js/html5shiv.js"></script>
	    <script src="js/respond.min.js"></script>
    <![endif]-->
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body>
	<header id="header">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 overflow">
                   <div class="social-icons pull-right">
                        <ul class="nav nav-pills">
                            <li><a href=""><i class="fa fa-facebook"></i></a></li>
                            <li><a href=""><i class="fa fa-twitter"></i></a></li>
                            <li><a href=""><i class="fa fa-google-plus"></i></a></li>
                            <li><a href=""><i class="fa fa-dribbble"></i></a></li>
                            <li><a href=""><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
             </div>
        </div>
        <div class="navbar navbar-inverse" role="banner">
            <?php include("menu_atas.php"); ?>
        </div>
    </header>
    <!--/#header-->

    <section id="page-breadcrumb">
        <div class="vertical-center sun">
             <div class="container">
                <div class="row">
                    <div class="action">
                        <div class="col-sm-12">
                            <h1 class="title">Kiriman Informasi dari Petani</h1>
                            <p>Petani saling memberi informasi untuk mengembangkan sayuran yang terbaik.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
   </section>
    <!--/#page-breadcrumb-->

    <section id="company-information" class="choose">
        <div class="container">
            <div class="row">

<form action="informasidaripetani.php" method="post">

  <fieldset class="form-group">
    <label for="inputNama">Nama</label>
    <input type="nama" class="form-control" id="masukannama" placeholder="Masukan nama">
    <small class="text-muted">Nama akan di tampilkan di postingan Info petani.</small>
  </fieldset>
   <fieldset class="form-group">
    <label for="inputTanaman">Nama Tanaman</label>
    <input type="desa" class="form-control" id="masukandesa" placeholder="Masukan Desa">
  </fieldset>
  <fieldset class="form-group">
    <label for="inputDesa">Desa</label>
    <input type="desa" class="form-control" id="masukandesa" placeholder="Masukan Desa">
  </fieldset>
  <fieldset class="form-group">
    <label for="umurTanaman">Umur Tanaman (bulan)</label>
    <select class="form-control" id="umurTanaman">
      <option>1</option><option>2</option><option>3</option><option>4</option><option>5</option><option>6</option><option>7</option><option>8</option><option>9</option><option>10</option><option>11</option><option>12</option>
    </select>
  </fieldset>

  <fieldset class="form-group">
    <label for="informasi">Informasi</label>
    <textarea class="form-control" id="informasi" rows="3"></textarea>
  </fieldset>
  <fieldset class="form-group">
    <label for="exampleInputFile">Foto</label>
    <input type="file" class="form-control-file" id="exampleInputFile">
    <small class="text-muted">File foto maksimal 3mb.</small>
  </fieldset>


  <button type="submit" value="Submit" class="btn btn-primary">Kirim</button>
  <hr>
</form>
            </div>
        </div>
    </section>
    <!--/#company-information-->


    <footer id="footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center bottom-separator">
                    <img src="images/home/under.png" class="img-responsive inline" alt="">
                </div>

                <div class="col-sm-12">
                    <div class="copyright-text text-center">
                        <p>&copy; Hamatech 2016. All Rights Reserved.</p>
                        <p>Designed by Tim Sukses</a></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--/#footer-->

    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/lightbox.min.js"></script>
    <script type="text/javascript" src="js/wow.min.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
</body>
</html>
