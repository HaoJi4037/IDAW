<?php
    if(isset($_COOKIE["usercss"])) {
        setcookie("usercss", "", time() - 10);
        setcookie("usercss", "css_default", time() + 3600);
    } else {
        setcookie("usercss", "css_default", time() + 3600);
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <?php
            $stylesheetname = "'" . $_COOKIE["usercss"] . ".css'";
            echo "<link rel='stylesheet' href=" . $stylesheetname .">";
        ?>
        <title>Hao Ji IDAW TP3 1.3</title>
    </head>
    <body>
        <form id="style_form" action="getCookie.php" method="POST">
            <select name="css">
                <option value="style1">style1Red</option>
                <option value="style2">style2Green</option>
                <option value="css_default">Default</option>
            </select>
            <input type="submit" value="Appliquer" />
        </form>
        <div id="cssfile">
        <?php
            echo "We now use the .css file : " . $_COOKIE["usercss"] .".css";
        ?>
        </div>
    </body>
</html>


