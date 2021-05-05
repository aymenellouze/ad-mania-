<?php
    require_once '../Controller/publiciteController.php';
    $pubC =  new PubC();

	$pubs = $pubC->allPublicite();

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Ad-mania</title>
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
<!-- <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->


<link rel="stylesheet" href="../assets/css/style.css" type="text/css" media="all" />
<script>  
function validateformRecherche(){  
var q=document.searchbox.q.value;  
//var password=document.myform.password.value;  
  
if (q==null || q==""){  
  alert("query can't be blank");  
  return false;  
}
return true;
};

function test(){
  return confirm("vramient ?");
}
</script> 
</head>
<body>
        <?php include_once 'header.php'; ?>
    <div id="container">
      <div class="shell">
        <!-- Small Nav -->
        <div class="small-nav"> <a href="#">Dashboard</a> <span>&gt;Publicity list</span> </div>
        <br />
        <!-- Main -->
          <div id="main">
            <div class="box">
              <form onsubmit="return validateformRecherche()" name="searchbox" id= "searchbox" method= "post" action= "recherchepublicite.php">
                <input id="id" name= "q" type= "text" size= "15" placeholder= "Type here… " />
                <input id= "button-submit" type= "submit" value= "Search" />
              </form>
            </div>
          <table class="table" >
            <tr >
                <td style="color:blue;">Nom</td>
                <td style="color:blue;">Type</td>
                <td style="color:blue;">article</td>
                <td style="color:blue;">Prix</td>
                <td style="color:blue;">Mail</td>
                <td style="color:blue;">Actions</td>
            </tr>
            <?php
              //include_once './config.php';
              //$connection = mysql_connect('localhost', 'root', ''); //The Blank string is the password
              //mysql_select_db('projet');
              foreach ($pubs as $row) {
                echo "<tr><td>" . $row['nom'] . "</td><td>" . $row['type'] . "</td><td>" . $row['id_article'] . "</td><td>" . $row['prix'] . "</td><td>" . $row['mail'] . "</td><td><a href='modifierpublicite.php?id=" . $row['id'] . "' onClick='return test()' >modifier</a>&nbsp;<a href='supprimerpublicite.php?id=" . $row['id'] . "' onClick='return test()'>supprimer</a></td></tr>";
              }
            ?>
         </table>
          <div class="box">
            <a href='ajouterpublicite.php' class="button">ajouter publicite</a>
          </div>
          <a href='paiement.php' class="button displayed" >Payer en ligne</a>
        </div>
        </div>
      </div>
</body>
</html>
      