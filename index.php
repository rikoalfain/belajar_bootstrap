<!DOCTYPE html>
  <html lang="en">
  <head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <title>Bootstrap 101 Template</title>

  <!-- Bootstrap -->
  <link href="css/bootstrap.css" rel="stylesheet" type="text/css" href="../styles/format.css">

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
   <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
 
  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="js/bootstrap.min.js"></script>

  </head>
  <body>
  <h1>SMKN 1 PONOROGO</h1>
  <button type="button" class="btn btn-default">Default</button>
  <button type="button" class="btn btn-primary">Primary</button>
  <button type="button" class="btn btn-success">Success</button>
  <button type="button" class="btn btn-info">Info</button>
  <button type="button" class="btn btn-warning">Warning</button>
  <button type="button" class="btn btn-danger">Danger</button>
  <nav class="navbar navbar-default">
  <div class="container-fluid">
  <!-- Brand and toggle get grouped for better mobile display -->
  <div class="navbar-header">
  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
  <span class="sr-only">Toggle navigation</span>
  <span class="icon-bar"></span>
  </button>
  <a class="navbar-brand" href="#">Home</a>
    </div>

  <!-- Collect the nav links, forms, and other content for toggling -->
  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
  <ul class="nav navbar-nav">
  <li class="active"><a href="#">Pengumuman Kelulusan<span class="sr-only">(current)</span></a></li>
  <li class="jurusan">
  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Jurusan<span class="caret"></span></a>
  <ul class="dropdown-menu">
  <li><a href="#">Rekayasa Perangkat Lunak</a></li>
  <li><a href="#">Multimedia</a></li>
  <li><a href="#">Akutansi</a></li>
  <li><a href="#">Adm.perkantoran</a></li>
  <li><a href="#">Tata Niaga</a></li>
  </ul>
  </li>
  </ul>
  <form class="navbar-form navbar-left">
  <div class="form-group">
  <input type="text" class="form-control" placeholder="Search">
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
  </form>
  <ul class="nav navbar-nav navbar-right">
  <li><a href="#">Link</a></li>
  <li class="dropdown">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Extrakulikuler<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Futsal</a></li>
            <li><a href="#">Musik</a></li>
            <li><a href="#">Peramuka</a></li>
            <li><a href="#">reog</a></li>
            <li><a href="#">Volly</a></li>
            <li><a href="#">Paskibraka</a></li>
            <li><a href="#">kerawitan</a></li>
            <li><a href="#">TI</a></li>
            <li><a href="#">Semezavoice</a></li>
            <li><a href="#">
            <li role="separator" class="divider"></li>
            <li><a href="#">DLL</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
  <h2>Login Siswa</h2>
  <form>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password">
    </div>
    <div class="checkbox">
      <label><input type="checkbox"> Remember me</label>
    </div>
    <button type="Login" class="btn btn-default">Login</button>
  </form>
</div>

<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
    <li data-target="#myCarousel" data-slide-to="3"></li>
  </ol>
  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="6.jpg">
    </div>

    <div class="item">
      <img src="2.jpg">
    </div>

    <div class="item">
      <img src="5.jpg">
    </div>

    <div class="item">
      <img src="4.jpg">
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  </body>
</html>