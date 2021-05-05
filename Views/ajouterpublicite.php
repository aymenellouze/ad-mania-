<?php
    require_once '../Controller/publiciteController.php';
    $pubC =  new PubC();

	//$result = $pubC->getPubliciteById($_GET['id']);


    if (isset($_POST['nom']) && isset($_POST['prix']) && isset($_POST['type'])&& isset($_POST['id_article']) && isset($_POST['mail'])) {
        //echo $_POST['nom'];
        require_once '../Model/publicite.php';
        $publicite = new Publicite(null,(int)$_POST['id_article'],(float)$_POST['prix'],$_POST['type'],$_POST['nom'],$_POST['mail']);
        //echo $publicite->getNom();
        $pubC->addPublicite($publicite);
        header("Location: index.php");
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
                        <label>Id Article: </label>
                    </div>
                    <div class="col-75">
                        <input type="number" name = "id_article" value = "">
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label>Prix</label>
                    </div>
                    <div class="col-75">
                        <input type="number" name = "prix" value = "">
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label>Mail</label>
                    </div>
                    <div class="col-75">
                        <input type="email" name = "mail" value = "">
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label>Type</label>
                    </div>
                    <div class="col-75">
                        <input type = "text" name = "type" value = "">
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