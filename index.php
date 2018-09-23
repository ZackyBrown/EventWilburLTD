<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Wilbur LTD Event</title>
  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.css" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/animate.css" rel="stylesheet">

  <?php
  //Connection à la bdd
  include 'php/local.php';
  $bdd=connectbdd();
  ?>


</head>

<body>

  <!-- ******************************************************
  |                     Barre de navigation                 |
  ******************************************************* -->

  <nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">

      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand text-color" href="#">Wilbur LTD Event</a>
      </div>

      <div id="navbar" class="collapse navbar-collapse">
        <ul class="nav navbar-nav">
          <li><a href="#">Home</a></li>
          <li><a href="#InfoEvent">About the event</a></li>
          <li><a href="#RSVP">Answer now</a></li>
        </ul>
      </div><!--/.nav-collapse -->

    </div><!-- container -->
  </nav>



  <!-- *************************
  |     Banniere de l'event    |
  ************************** -->

  <div class="jumbotron">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h1>Wilbur LTD Event</h1>
          <p>Come and see our best technoligies ! Better than the other's ! So much !</p>
        </div>
        <div class="col-md-6">
          <img src="img/ROBpropagand.png" alt="ROB_coming" id="imgrob" class="animated slideInRight">
        </div>
      </div> <!-- row -->
    </div>
  </div>



  <!-- ****************
  |     Carroussel    |
  ***************** -->

  <section id="Sliders">
    <div class="container">
      <div class="row">
        <div class="col-md-5">

          <div class="container">
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
              <!-- Indicators -->
              <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
              </ol>

              <!-- slides -->
              <div class="carousel-inner">
                <div class="item active">
                  <img src="img/SpaceStationInvite.jpg" alt="aaa" style="width:100%; height: 535px;">
                  <div class="carousel-caption">
                    <h3>Event in space !</h3>
                    <p>Welcome in our secret Evil space base !</p>
                  </div>
                </div>

                <div class="item">
                  <img src="img/BadScientist.jpg" alt="bbb" style="width:100%; height: 535px;">
                  <div class="carousel-caption">
                    <h3>Meet our great team !</h3>
                    <p>Come and meet our scientist !</p>
                  </div>
                </div>

                <!-- Left and right controls -->
                <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                  <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" data-slide="next">
                  <span class="sr-only">Next</span>
                </a>
              </div>
            </div>
          </div><!-- container caroussel-->

        </div>
      </div> <!-- row -->
    </div> <!-- container -->
  </section>


  <br><br>

  <!-- *******************************
  |     Vitrine, images et textes    |
  ******************************** -->

  <div class="container demoText" id="infoEvent" >
    <div class="row">
      <div class="col-md-12">
        <table>
          <tr>
            <td><img src="img/BadRobotDemo.jpg" alt="" class="demo_image"></td>
            <td><img src="img/SpaceStationDemo.jpg" alt="" class="demo_image"></td>
            <td><img src="img/badDNAforya.jpg" alt="" class="demo_image"></td>
          </tr>
          <tr>
            <td class="more-info1">
              <h2>Lorem ipsum.</h2>
              <p class="textBasique">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem aliquam enim praesentium, aut cum eveniet ad. Harum, voluptate. Necessitatibus commodi impedit placeat aut consequuntur praesentium perspiciatis mollitia tenetur sit delectus!<br><span class="btn btn-default">More info</span></p>
              <p class="textAlternat">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem aliquam enim praesentium, aut cum eveniet ad. Harum, voluptate. Necessitatibus commodi impedit placeat aut consequuntur praesentium perspiciatis mollitia tenetur sit delectus!</p>
            </td>
            <td class="more-info2">
              <h2>Lorem ipsum.</h2>
              <p class="textBasique">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem aliquam enim praesentium, aut cum eveniet ad. Harum, voluptate. Necessitatibus commodi impedit placeat aut consequuntur praesentium perspiciatis mollitia tenetur sit delectus!<br><span class="btn btn-default">More info</span></p>
              <p class="textAlternat">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem aliquam enim praesentium, aut cum eveniet ad. Harum, voluptate. Necessitatibus commodi impedit placeat aut consequuntur praesentium perspiciatis mollitia tenetur sit delectus!</p>
            </td>
            <td class="more-info3">
              <h2>Lorem ipsum.</h2>
              <p class="textBasique">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem aliquam enim praesentium, aut cum eveniet ad. Harum, voluptate. Necessitatibus commodi impedit placeat aut consequuntur praesentium perspiciatis mollitia tenetur sit delectus!<br><span class="btn btn-default">More info</span></p>
              <p class="textAlternat">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem aliquam enim praesentium, aut cum eveniet ad. Harum, voluptate. Necessitatibus commodi impedit placeat aut consequuntur praesentium perspiciatis mollitia tenetur sit delectus!</p>

            </td>
          </tr>
        </table>
      </div>
    </div> <!-- row -->
  </div> <!-- container -->




  <!-- **********
  |     RSVP    |
  *********** -->
  <h2 id="h2RSVP">You've been invited ?</h2>
  <div class="container rsvp" id="RSVP">
    <div class="row">
      <form class="" action="rsvp.php" method="post">
<h2>Let us now ! Enter your</h2>
        <div class="form-group">
          <label for="email">Email address :</label>
          <input type="email" class="form-control emailRSVP" placeholder="exemple@domaine.fr" id="email" name="mailuser" required>
          <br>
          <button type="submit" class="btn btn-default" id="btnRSVP">Tel us !</button>
        </div>

      </form>
    </div><!-- row -->
  </div><!-- container -->


  <br><br>

  <!-- *********************
  |         FOOTER         |
  ********************** -->

  <footer>
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#infoEvent">About the event</a></li>
            <li><a href="#RSVP">Answer now</a></li>
            <li><a href="#">Privacy policy</a></li>
          </ul>
        </div>
        <div class="col-md-6" style="text-align: right;">
          <p>&copy; Wilbur LTD | All rights reserved</p>
        </div>
      </div><!-- row -->
    </div><!-- container -->
  </footer>



  <!-- Bootstrap core JavaScript
  ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.js"></script>

  <script src="js/local.js"></script>

</body>
</html>
