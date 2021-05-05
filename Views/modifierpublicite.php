<?php
    require_once '../Controller/publiciteController.php';
    $pubC =  new PubC();

	$result = $pubC->getPubliciteById($_GET['id']);


    if (isset($_POST['nom']) && isset($_POST['prix']) && isset($_POST['type'])) {
        //echo $_POST['nom'];
        require_once '../Model/publicite.php';
        $publicite = new Publicite($result['id'],$result['id_article'],(float)$_POST['prix'],$_POST['type'],$_POST['nom']);
        //echo $publicite->getNom();
        $pubC->updatePublicite($publicite,$result['id']);
        //echo $publicite->getNom();
        header("Location: index.php");
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
      <div class="small-nav"> <a href="#">Dashboard</a> <span>&gt;Modify Publicity</span> </div>
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
                        <input type="text" name = "nom" value = "<?= $result['nom'] ?>">
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label>Prix</label>
                    </div>
                    <div class="col-75">
                        <input type="number" name = "prix" value = "<?= $result['prix'] ?>">
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label>Type</label>
                    </div>
                    <div class="col-75">
                        <input type = "text" name = "type" value = "<?= $result['type'] ?>">
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