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
                    and what ever you type above after /page2.php?/name= will be displayed after the word \"Hello\". </div><br> ";
                }
            }
            if (isset($_GET["pet"])) {
                echo "<div class=\"info\">The query string parameter \"pet\" has been passed to this page. You can change the URL to read:<br> /page2.php?pet=dog <br>/page2.php?pet=cat <br>/page2.php?pet=deer</div>";
                if ($_GET["pet"] == "dog") {
                    echo "<img src=\"img/molly.png\" alt=\"Dog named Molly\" width=\"967\"  height=\"560\"><br>";
                } elseif ($_GET["pet"] == "cat") {
                    echo "<img src=\"img/chloe.jpg\" alt=\"Cat named Chloe\" width=\"968\"  height=\"579\"><br>";
                } elseif ($_GET["pet"] == "deer") {
                    echo "<img src=\"img/mouse.png\" alt=\"Elf and reindeer\" width=\"968\"  height=\"474\"><br>";
                }
            }
            if (!empty($_GET["bgcolor"])) {
                $bgcolor = strtolower($_GET["bgcolor"]);
                echo "<br><div class=\"info\">The query string parameter \"bgcolor\" has been passed to this page. You can change the URL to read:<br> /page2.php?bgcolor=red <br>/page2.php?bgcolor=blue<br>/page2.php?bgcolor=green<br>/page2.php?bgcolor=oops</div>";
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
            if (!empty($_GET["class"])) {
                echo "<br><div class=\"info\">The query string parameter \"class\"has been passed \"warrior\" you can also change it to:<br>/page2.php?/class=mage<br>/page2.php?/class=rogue</div>";
                if ($_GET["class"] == "warrior") {
                    echo "<img src=\"img/warrior.jpg\" alt=\"a Warrior\"><br>";
                } elseif ($_GET["class"] == "mage") {
                    echo "<img src=\"img/mage.jpg\" alt=\"a Mage\"><br>";
                } elseif ($_GET["class"] == "rogue") {
                    echo "<img src=\"img/rogue.jpg\" alt=\"a rogue\"><br>";
                }
            }
            if (!empty($_GET["font_type"])) {
                echo "<br><div class=\"info\">This query parameter \"font_type\" has passed in \"zhi\" which chose to display that font type when it received /page2.php?font_type=zhi you can also choose:<br>/page2.php?molle<br>/page2.php?font_type=marker</div>";
                if ($_GET["font_type"] == "zhi") {
                    echo "<div class=\"zhi\">";
                    echo "This is displaying the Zhi Mang Xing font and this page was passed page2.php?font_type=zhi</div>";
                } elseif ($_GET["font_type"] == "molle") {
                    echo "<div class=\"molle\">";
                    echo "This is displaying the Molle font and this page was passed page2.php?font_type=molle</div>";
                } elseif ($_GET["font_type"] == "marker") {
                    echo "<div class=\"marker\">";
                    echo "This is displaying the Marker font and this page was passed page2.php?font_type=marker</div>";
                }
            }
            if (!empty($_GET["park"])) {
                echo "<br><div class=\"info\">This query parameter \"park\" has passed in as \"geese\" which is /page2.php?park=mill</div>";
                echo "<img src=\"img/geese.jpg\" alt=\"Picture of park with sign to not feed the geese\"><br>";
            }
            if (!empty($_GET["building"])) {
                echo "<br><div class=\"info\">This query parameter \"building\" has passed in as \"mill\" which is /page2.php?park=mill</div>";
                echo "<img src=\"img/mill.jpg\" alt=\"Picture of park with sign to not feed the gees\">";
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