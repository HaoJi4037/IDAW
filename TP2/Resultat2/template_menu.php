<?php
function renderMenuToHTML($currentPageId) {
    $mymenu = array(
        'accueil' => array('Accueil'),
        'cv' => array('Cv'),
        'hobbies' => array('Mes Hobbies')
    );
    echo "<ul>";
    foreach($mymenu as $pageId => $pageParameters) {
        if ($pageId == $currentPageId) {
            echo "<li><a id='currentpage' href='http://localhost/Resultat2/index.php?page=" . $pageId . "'>" . $pageParameters[0] . "</a></li>";
        }else{
            echo "<li><a  href='http://localhost/Resultat2/index.php?page=" . $pageId . "'>" . $pageParameters[0] . "</a></li>";
        }
    }
    echo "</ul>";
}
?>