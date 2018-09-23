<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>

    <?php
    include 'php/local.php';
    $mailUser=$_POST["email"];
    $reponse=$_POST["answer"];
    $sql=NULL;


    $bdd=connectbdd();

    if ($reponse=="yes") {
      $sql="UPDATE `Wilbur`.`WilInv` SET `reponse` = '1' WHERE `WilInv`.`mail` = '".$mailUser."'";
    }
    elseif ($reponse=="no") {
      $sql="UPDATE `Wilbur`.`WilInv` SET `reponse` = '0' WHERE `WilInv`.`mail` = '".$mailUser."'";
    }
    else {
      echo "error";
    }

    //On execute la requete que s'il n'y a pas eu d'erreur avant.
    if ($sql!=NULL) {
      $req=$bdd->query($sql);
    }



  $bdd=NULL;

    ?>
  </head>
  <body>
<script type="text/javascript">
  alert("Thank you ! Your answer has been recieved !");
  document.location.href="index.php";
</script>
  </body>
</html>
