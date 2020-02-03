<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Bootstrap CSS (CDN) -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Project 2 - Page 2</title>
</head>

<body> <?php
        require  "inc/proj2_header.inc.php";

        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            if (isset($_GET["name"])) {
                $name = strtolower($_GET["name"]);
                $name = ucfirst($name);
                if (!empty($name)) {
                    echo "<div class=\"name_class\">Hello $name, Welcome to my page!<br><br><p>The query string parameter called \"name\" has been passed to this page 
                    and what ever you type above after /page2.php/name= will be displayed after the word \"Hello\". </div> ";
                }
            }
            if (isset($_GET["pet"])) {
                echo "<h3>The query string parameter \"pet\" has been passed to this page. You can change the URL to read:<br> /page2.php?pet=dog <br>/page2.php?pet=cat <br>/page2.php?pet=deer</h3>";
                if ($_GET["pet"] == "dog") {
                    echo "<img src=\"img/molly.png\" alt=\"Dog named Molly\" width=\"967\"  height=\"560\">";
                } elseif ($_GET["pet"] == "cat") {
                    echo "<img src=\"img/chloe.jpg\" alt=\"Cat named Chloe\" width=\"968\"  height=\"579\">";
                } elseif ($_GET["pet"] == "deer") {
                    echo "<img src=\"img/mouse.png\" alt=\"Elf and reindeer\" width=\"968\"  height=\"474\">";
                }
            }
            if (!empty($_GET["bgcolor"])) {
                $bgcolor = strtolower($_GET["bgcolor"]);
                echo "<h3>The query string parameter \"bgcolor\" has been passed to this page. You can change the URL to read:<br> /page2.php?bgcolor=red <br>/page2.php?bgcolor=blue<br>/page2.php?bgcolor=green<br>/page2.php?bgcolor=oops</h3>";
                if ($bgcolor == "red") {
                    echo "<div class=\"red_class\">";
                    echo "The background you choose is Red!</div>";
                } elseif ($bgcolor == "blue") {
                    echo "<div class=\"blue_class\">";
                    echo "The background you choose is blue!</div>";
                } elseif ($bgcolor == "green") {
                    echo "<div class=\"green_class\">";
                    echo "The background you choose is green!</div>";
                } elseif ($bgcolor == "oops") {
                    echo "<div class=\"oops_class\">";
                    echo "Oops, you got an error!</div>";
                }
            }
            if (!empty($_GET["pic"])) {
                echo "<h3>The query string parameter has been passed \"warrior\" you can also change it to:<br>/page2.php/pic=mage<br>/page2.php/pic=rogue</h3>";
                if ($_GET["pic"] == "warrior") {
                    echo "<img src=\"img/warrior.jpg\" alt=\"a Warrior\">";
                } elseif ($_GET["pic"] == "mage") {
                    echo "<img src=\"img/mage.jpg\" alt=\"a Mage\">";
                } elseif ($_GET["pic"] == "rogue") {
                    echo "<img src=\"img/rogue.jpg\" alt=\"a rogue\">";
                }
            }
        }



        ?> <h4><a href="page1.php">Having Fun? Click here to try again!</a></h4>
    <?php require "inc/proj2_footer.inc.php"; ?>

    <!-- jQuery -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <!-- Bootstrap JavaScript -->
    <script src="js/bootstrap.min.js"></script>
</body>

</html>