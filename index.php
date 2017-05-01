<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ibibio Dictionary</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" media="screen" title="no title" charset="utf-8">
    <link rel="stylesheet" href="css/font-awesome.min.css" media="screen" title="no title" charset="utf-8">
    <link rel="stylesheet" href="css/index.css" media="screen" title="no title" charset="utf-8">
  </head>
  <body>

    <section id="nav">
      <nav class="navbar navbar-default">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-nav" aria-expanded="false">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">
              Ibibio <span>WebDictionary</span>
              <img src="img/dog-tag.png" class="img img-responsive" id="nav-tag" width="15px" alt="" />
            </a>
          </div>
          <div class="collapse navbar-collapse" id="main-nav">
            <ul class="nav navbar-nav">
              <li><a href="#">ABOUT</a></li>
              <li><a href="#">CONTACT</a></li>
            </ul>
          </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
      </nav>
    </section>

    <section id="searchForm">
      <div class="container-fluid">
        <div class="col-md-6">
          <form class="" action="#" id="mainSearch" method="POST">
            <div class="row">
              <div class="col-xs-10 col-sm-6 col-md-8">
                <div class="form-group" id="change">
                  <!-- Search form displays here -->
                  <input type='text' class='form-control' id='valueMain' name='search' value='' autofocus='true'>
                </div>
              </div>
              <div class="col-xs-2 col-sm-6 col-md-4">
                <div class="form-group">
                  <button type="submit" class="btn btn-success" id="searchMain" name="searchMain">Search</button>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </section>

    <section id="mainArea">
      <img src="img/dog-tag.png" class="img img-responsive" id="dogtag" width="55px" alt="" />
      <div class="ibibio">
        <h1>
          Ibibio <span>Dictionary</span>
        </h1>
        <form>
          <div class="form-group">
            <input type="text" class="form-control" name="name" value="" id="search" placeholder="Enter Search query">
          </div>
          <div class="form-group">
            <button type="submit" class="btn btn-success" name="button">Search</button>
          </div>
          <div class="row">
            <div class="col-xs-3 col-sm-3 col-md-3">
              <a href="#"><p>Igbo</p></a>
            </div>
            <div class="col-xs-3 col-sm-3 col-md-3">
              <a href="#"><p>Hausa</p></a>
            </div>
            <div class="col-xs-3 col-sm-3 col-md-3">
              <a href="#"><p>Yoruba</p></a>
            </div>
            <div class="col-xs-3 col-sm-3 col-md-3">
              <a href="#"><p>Ibibio</p></a>
            </div>
          </div>
          <div class="row">
            <p>
              Copyright &copy; 2017
            </p>
          </div>
        </form>
      </div>
    </section>

    <section id="contentArena">
      <div class="container-fluid">
        <div class="col-md-8" id="getResult">

        </div>
        <div class="col-md-4">
          <h3>Related searches</h3>
        </div>
      </div>
    </section>



    <script src="js/jquery.min.js" charset="utf-8"></script>
    <script src="js/bootstrap.min.js" charset="utf-8"></script>
    <script src="js/jquery.validate.min.js" charset="utf-8"></script>
    <script src="js/index.js" charset="utf-8"></script>
  </body>
</html>
