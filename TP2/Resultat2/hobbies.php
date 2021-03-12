<?php
require_once('template_header.php')
?>
<?php
require_once('template_menu.php');
renderMenuToHTML('hobbies');
?>
<nav class="menu">
                <ul>
                    <li><a href="index.html">Accueil</a></li>
                    <li><a href="cv.html">CV</a></li>
                    <li><a href="hobbies.html">Hobbies</a></li>
                    </ul>
            </nav>
            <h1>Mes hobbies</h1>
            <p> Mangez un délicieux pot chaud et un barbecue</p>
<?php require_once('template_footer.php'); ?>