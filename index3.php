<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylesheet.css">

    <script src="https://kit.fontawesome.com/4d60b00c62.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="shortcut icon" type="image/png" href="Favicons.png" />
    <title>Supervision Serveur IdéesCulture</title>
</head>

<body>
    <header>
        <h1 class="title"><a href="index.php">Supervision des serveurs</a></h1>
    </header>
    <section>
        <?php
        // Connexion a la base de donnée MySql via l'extention PDO
        // Les lignes suivantes permette de tester la connexion a la base donnée Myql
        try {
            $bdd = new PDO('mysql:host=localhost;dbname=supervision_serveur;charset=utf8', 'eleve', 'bonjour');
        } catch (Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }
        $i = 24;
        $reponse = $bdd->query('SELECT name from serveur LIMIT 12 OFFSET 24');
        while ($donnees = $reponse->fetch()) {
            echo '<div id="' . "id" . $i . '" class="contenair"> <div class="block"> 
            <h2 id="' . "titleserver" . $i . '" class="titleServer">' . $donnees['name'] . '</h2> <div class="block_partie_1"><div id="' . "etat" . $i . '"class="etat_serveur"> 
            </div><div id="' . "loadserver" . $i . '" class="title2">' . $monitoring['load'] . '</div></div>
             <meter id="' . "charge" . $i . '"class="barre_charge" min="0" max="8" low="1.5" high="2.24" optimum="2.25" value="0"></meter>
             <p id="' . "freespace" . $i . '"class="title_free_space"></p><div class="freespace"></div>
             <meter id="' . "space" . $i . '"class="barre_space" min="0" max="0" low="0" high="0" optimum="0" value="0"></meter><div class="block_partie_1">
             <div id="' . "providence" . $i . '"class="etat_providence"></div><p class="title2">Providence</p></div><img id="' . "screenshot" . $i . '"class="screenshot" src="" alt=""></img></div></div>';
            $i++;
        }
        ?>
        <script>
        function getdataserveur(url, index) {
        let $i = index;
        $.get(url, function(data) {
          /* Affichage de la charge du serveur */
          $("#loadserver" + $i).html("charge serveur : " + data.load);
          $("#charge" + $i).attr("value", data.load);

          /* Affichage de l'espace disponible sur l'espace totale du disque dur */
          $("#freespace" + $i)
            .html(
              parseFloat(data.disk.disk_used / 1024 / 1024).toFixed(0) +
              "GB" +
              " / " +
              parseFloat(data.disk.disk_size / 1024 / 1024).toFixed(0) +
              "GB"
            )
            .css("text-align", "center");
          $("#space" + $i)
            .attr("value", data.disk.disk_used / 1024 / 1024)
            .attr("max", data.disk.disk_size / 1024 / 1024)
            .attr("low", (data.disk.disk_size / 1024 / 1024) * 0.75)
            .attr("high", (data.disk.disk_size / 1024 / 1024) * 0.25);

          /* Changement de couleur du voyant d'état pour savoir l'état de charge du serveur */
          /* Si valeur inférieur a 1.5 ( Vert ), entre 1.5 et 2.25 ( Orange ) et superieur a 2.25 ( Rouge ) */
          if (data.load <= 1.5) {
            $("#etat" + $i).css("background-color", "#08bb08e3");
          } else if (data.load > 1.5 && data.load <= 2.25) {
            $("#etat" + $i).css("background-color", "orange");
          } else {
            data.load > 2.25;
            $("#etat" + $i).css("background-color", "red");
          }

          /* Changement de couleur du voyant d'état pour savoir si providence es focntionnel */
          /*Affichage d'une bordure de couleur pour savoir directement si le serveur es fonctionnel ou pas */

          if (data.is_providence_ok == true) {
            $("#providence" + $i).css("background-color", "#08bb08e3");
            $("#titleserver" + $i).css("color", "#08bb08e3");
          } else {
            $("#providence" + $i).css("background-color", "red");
            $("#titleserver" + $i).css("color", "red");
          }

          /* Affichage de la capture d'écran dans le cadre du petit widget */

          $("#screenshot" + $i).attr("src", data.capture_providence);
        });
      }
      $(document).ready(function() {

        $.get("url.json", function(data) {
          $(data).each(function(index, url) {
            getdataserveur(url, index);
          });

         window.setInterval(function() {
           
            $(data).each(function(index, url) {
            getdataserveur(url, index);
          });
          }, 3000);
        });
      });
        </script>
     

    </section>
    <footer>
        <p class="retourpage">Page précédente <a href="index2.php">n°2</a></p>
        <p class="suivantepage">Page suivante <a href="index4.php">n°4</a></p>
    </footer>


</body>

</html>