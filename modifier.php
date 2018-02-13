<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
    <title>modifier</title>
  </head>
  <body>
    <div id="header" class="header">
      <div class="container1">
        <div class="flex">
          <a class="headerLogo" href=""><img class="headerLogoimg" src="img/Logo.png" alt=""></a>

          <ul class="mainNavigation">
            <li class="listItem"><a class="listItem-link" href="/about.html">Actualités</a></li>
            <li class="listItem"><a class="listItem-link" href="/blog.html">Innovations</a></li>
            <li class="listItem"><a class="listItem-link" href="/podcast.html">Marques</a></li>
            <li class="listItem"><a class="listItem-link" href="/reading.html">Recherche</a></li>
            <a class="Search" href=""><img class="searchLogoimg" src="img/searchlogo.png" alt=""></a>
          </ul>
          </nav>
        </div>
      </div>
    </div>
    <section class="create">
      <div class="create_left">
      <p class="create_title">Modifier votre article</p>
<?php
/**
 * Created by PhpStorm.
 * User: romainmetayer
 * Date: 13/02/2018
 * Time: 00:55
 */
require_once('database.php');

if (isset($_GET['id'])) // On a le nom et le prénom
{
    $id = $_GET['id'];

    $query = $bdd->prepare("SELECT * FROM events WHERE id = :id");
    $query->bindParam(":id", $id);
    $query->execute();

    while($row = $query->fetch()) {

        $date = $row['date'];
        $titre = $row['titre'];
        $lieu = $row['lieu'];
        $description = $row['description'];
        $image = $row['image'];

        echo"<input class='input_container_title' type='text' placeholder='Titre de l'article' value=".$titre.">";

        /*echo "<h1>Lieu</h1>";
        echo "<input value=".$lieu."></input>";
        echo "<br/>";*/

        echo"<div class='floatRight'><input class='input_container_title' type='text' placeholder='Titre de l'article' value=".$date."></div>";


        echo "<h1>Description</h1>";
        echo "<input value=".$description."></input>";
        echo "<br/>";

        echo "<h1>URL de l'image</h1>";
        echo "<input value=".$image."></input>";
        echo "<br/>";
    }
    echo "<button>Envoyer les modifs</button>";
}
else // Il manque des paramètres, on avertit le visiteur
{
    echo 'Il faut renseigner l\'id !';
}
?>
</div>
</section>
</body>
</html>
