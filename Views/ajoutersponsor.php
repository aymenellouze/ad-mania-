<?php
    require_once '../Controller/sponsorController.php';
    $sponsC =  new SponC();

	//$result = $pubC->getPubliciteById($_GET['id']);


    if (isset($_POST['nom']) && isset($_POST['societe']) && isset($_POST['duree'])) {
        //echo $_POST['nom'];
        require_once '../Model/sponsor.php';
        $sponsor = new Sponsors(null,$_POST['nom'],$_POST['societe'],(float)$_POST['duree']);
        //echo $publicite->getNom();
        $sponsC->addSponsor($sponsor);
        header("Location: indexsponsor.php");
        //echo $publicite->getNom();
    }

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Ad-mania</title>
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="../assets/css/style.css" type="text/css" media="all" />
</head>
<body>
        <?php include_once 'header.php'; ?>
        <div id="container">
    <div class="shell">
      <!-- Small Nav -->
      <div class="small-nav"> <a href="#">Dashboard</a> <span>&gt;Add Publicity</span> </div>
      <!-- End Small Nav -->
      <!-- Message OK -->
      
      <!-- End Message OK -->
      <!-- Message Error -->
      
      <!-- End Message Error -->
      <br />
      <!-- Main -->
      <div id="main">
      </div>
      </div>
      </div>
      <div class="box">
                <form action="" method = "POST">
                <div class="row">
                    <div class="col-25">                
                        <label>Nom: </label>
                    </div>
                    <div class="col-75">
                        <input type="text" name = "nom" value = "">
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">                
                        <label>societe: </label>
                    </div>
                    <div class="col-75">
                        <input type="text" name = "societe" value = "">
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label>duree</label>
                    </div>
                    <div class="col-75">
                        <input type="number" name = "duree" value = "">
                    </div>
                </div>
                <br>
                <div class="row">
                    <input type="submit" value="Submit" name = "submit">
                </div>
            </form>
      </div>
</body>
</html>