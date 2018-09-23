<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Wilbur event RSVP</title>

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
  include 'php/local.php';
  $mailUser=NULL;
  $bdd=connectbdd();


  // Recupere les infos de l'invité
  $sql = 'SELECT * FROM `WilInv` WHERE `mail`= "'.$_POST["mailuser"].'"';
  $req=$bdd->query($sql);

  while($data = $req->fetch())
  {
    // on affiche les informations de l'enregistrement en cours
    echo '<b>'.$data['mail'].' '.$data['nom'].'</b> '.$data['prenom'].' ('.$data['societe'].')'.$data['reponse'];

    //recuperation des données en PHP
    $mailUser = $data['mail'];
    $lastname = $data['nom'];
    $name = $data["prenom"];
    $company = $data['societe'];
    $reponse = $data['reponse'];

    //recuperation des données en JS
    echo '<script type="text/javascript">
    var mailUser = "'.$data['mail'].'"
    var name= "'.$data["prenom"].'";
    var lastname= "'.$data["nom"].'";
    var company= "'.$data["societe"].'";
    var reponse= "'.$data["reponse"].'";
    </script>';
  }
  //fermeture connection bdd
  $bdd=NULL;
  ?>

</head>
<body>

  <?php

  //pour les adresses mails non valides

  if ($mailUser== NULL) {
    echo '<script type="text/javascript">
    alert("Invalid mail ! Sorry, you\'re not invited at this event !");
    document.location.replace("index.php");
    </script>';
  }
  ?>

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
          <li><a href="index.php">Home</a></li>
          <li><a href="index.php">About the event</a></li>
        </ul>
      </div><!--/.nav-collapse -->
    </div>
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



  <!-- ************************************************
  |                     corps de page                 |
  ************************************************* -->


  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h2>Hello <?php echo $name.' from '.$company;?></h2>
        <br>
      </div>
    </div><!-- row -->
    <div class="row" id="alredyAnswer">
      <div class="col-md-10">
        <p>you have alredy <?php if ($reponse==0) {echo "declined our invitation";} else {echo "comfirmed your presence ! We'll be very happy to meet you at the event !";} ?></p>
        <br>
        <?php if ($reponse!=NULL) {echo '<a href="index.php" class="btn btn-default">Go back !</a>';} ?>
      </div>
    </div>
    <div id="notAnswer">
      <div class="row"><h3>would you come at this event ?</h3></div>
      <br>
      <div class="row">
        <form class="" action="validAnswer.php" method="post">
          <input type="hidden" name="email" value=<?php echo $mailUser;?>>
          <div class="col-md-2"><input class="btn btn-default more-info3" type="submit" name="answer" value="yes"></div>
          <div class="col-md-2"><input class="btn btn-default more-info3" type="submit" name="answer" value="no"></div>
        </form>
      </div>
    </div>
  </div>






  <!-- *********************
  |         FOOTER         |
  ********************** -->

  <footer>
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <ul>
            <li><a href="index.php">Home</a></li>
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

  <script type="text/javascript">
  if (reponse=="") {
    var alredyAnswer = document.getElementById("alredyAnswer");
    alredyAnswer.innerHTML="";
  }
  else {
    var notAnswer = document.getElementById("notAnswer");
    notAnswer.innerHTML="";
  }
  </script>
</body>
</html>
