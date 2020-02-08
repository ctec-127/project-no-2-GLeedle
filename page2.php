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
        require  "inc/proj2_header.inc.php"; // requires header each time it displays information

        if ($_SERVER["REQUEST_METHOD"] == "GET") { // checks to make sure it is a $_GET request
            if (isset($_GET["name"])) { //makes sure that the name parameter is set
                $name = strtolower($_GET["name"]); // sets the string to lower case
                $name = ucfirst($name); // makes the first letter upper case
                if (!empty($name)) { // displays the parameter that was submitted 
                    echo "<div class=\"name_class\">Hello $name, Welcome to my page!<br><br><p>The query string parameter called \"name\" has been passed to this page 
                    and what ever you type above after /page2.php?/name= will be displayed after the word \"Hello\". </div><br> ";
                }
            } // end of if condition for name parameter
            if (isset($_GET["pet"])) { // checks to see if the pet parameter is set
                echo "<div class=\"info\">The query string parameter \"pet\" has been passed to this page. You can change the URL to read:<br> /page2.php?pet=dog <br>/page2.php?pet=cat <br>/page2.php?pet=deer</div>";
                if ($_GET["pet"] == "dog") { // Checks pet parameter for dog and displays image
                    echo "<img src=\"img/molly.png\" alt=\"Dog named Molly\" width=\"967\"  height=\"560\"><br>";
                } elseif ($_GET["pet"] == "cat") { // Checks pet parameter for cat and displays image
                    echo "<img src=\"img/chloe.jpg\" alt=\"Cat named Chloe\" width=\"968\"  height=\"579\"><br>";
                } elseif ($_GET["pet"] == "deer") { // Checks pet parameter for deer and displays image
                    echo "<img src=\"img/mouse.png\" alt=\"Elf and reindeer\" width=\"968\"  height=\"474\"><br>";
                }
            } // end of if condition for pet parameter
            if (!empty($_GET["bgcolor"])) {
                // $bgcolor = strtolower($_GET["bgcolor"]); // checks to see if bgcolor parameter has been set
                echo "<br><div class=\"info\">The query string parameter \"bgcolor\" has been passed to this page. You can change the URL to read:<br> /page2.php?bgcolor=red <br>/page2.php?bgcolor=blue<br>/page2.php?bgcolor=green<br>/page2.php?bgcolor=oops</div>";
                if ($_GET["bgcolor"] == "red") { // checks to see if red was typed and displays the red_class
                    echo "<div class=\"" . $_GET["bgcolor"] .  "\">";
                    echo "The background you choose is Red!</div><br>";
                } elseif ($_GET["bgcolor"] == "blue") { // checks to see if blue was typed and displays the blue_class
                    echo "<div class=\"" . $_GET["bgcolor"] .  "\">";
                    echo "The background you choose is blue!</div><br>";
                } elseif ($_GET["bgcolor"] == "green") { // checks to see if green was typed and displays the green_class
                    echo "<div class=\"" . $_GET["bgcolor"] .  "\">";
                    echo "The background you choose is green!</div><br>";
                } elseif ($_GET["bgcolor"] == "oops") { // checks to see if oops was typed and displays the oops_class
                    echo "<div class=\"" . $_GET["bgcolor"] .  "\">";
                    echo "Oops, you got an error!</div><br>";
                }
            } // end of if condition for bgcolor parameter
            if (!empty($_GET["class"])) { // checks to see if the class parameter is set
                echo "<br><div class=\"info\">The query string parameter \"class\"has been passed \"warrior\" you can also change it to:<br>/page2.php?/class=mage<br>/page2.php?/class=rogue</div>";
                if ($_GET["class"] == "warrior") { // checks to see if the class parameter is set to warrior and displays image
                    echo "<img src=\"img/warrior.jpg\" alt=\"a Warrior\" width=\"968\"  height=\"545\"><br>";
                } elseif ($_GET["class"] == "mage") { // checks to see if the class parameter is set to mage and displays image
                    echo "<img src=\"img/mage.jpg\" alt=\"a Mage\" width=\"968\"  height=\"605\"><br>";
                } elseif ($_GET["class"] == "rogue") { // checks to see if the class parameter is set to rogue and displays image
                    echo "<img src=\"img/rogue.jpg\" alt=\"a rogue\" width=\"968\"  height=\"545\"><br>";
                }
            } // end of if condition for class parameter
            if (!empty($_GET["font_type"])) { // checks to see if the font_type parameter is set
                echo "<br><div class=\"info\">This query parameter \"font_type\" has passed in \"zhi\" which chose to display that font type when it received /page2.php?font_type=zhi you can also choose:<br>/page2.php?font_type=molle<br>/page2.php?font_type=marker</div>";
                if ($_GET["font_type"] == "zhi") { // checks to see if the font_type paramter is set to zhi
                    echo "<div class=\"zhi\">";
                    echo "This is displaying the Zhi Mang Xing font and this page was passed page2.php?font_type=zhi</div>";
                } elseif ($_GET["font_type"] == "molle") { // checks to see if the font_type paramter is set to molle
                    echo "<div class=\"molle\">";
                    echo "This is displaying the Molle font and this page was passed page2.php?font_type=molle</div>";
                } elseif ($_GET["font_type"] == "marker") { // checks to see if the font_type paramter is set to marker
                    echo "<div class=\"marker\">";
                    echo "This is displaying the Marker font and this page was passed page2.php?font_type=marker</div>";
                }
            } // end of if condition for font_type parameter
            if (!empty($_GET["park"])) { // checks to see if the park paramter is set and displays park image
                echo "<br><div class=\"info\">This query parameter \"park\" has passed in as \"geese\" which is /page2.php?park=geese</div>";
                echo "<img src=\"img/geese.jpg\" alt=\"Picture of park with sign to not feed the geese\" width=\"968\"  height=\"1004\"><br>";
            } // end of if condition for park parameter
            if (!empty($_GET["building"])) { // checks to see if the building paramter is set and displays mill image
                echo "<br><div class=\"info\">This query parameter \"building\" has passed in as \"mill\" which is /page2.php?building=mill</div>";
                echo "<img src=\"img/mill.jpg\" alt=\"Picture of the Leedle Mill\" width=\"968\"  height=\"690\">";
            } // end of if condition for building parameter
        }


        ?> <h4><a href="page1.php">Click here to return to page1.php</a></h4>
    <!-- requires footer each time it displays results -->
    <?php require "inc/proj2_footer.inc.php"; ?>


    <!-- jQuery -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <!-- Bootstrap JavaScript -->
    <script src="js/bootstrap.min.js"></script>
</body>

</html>