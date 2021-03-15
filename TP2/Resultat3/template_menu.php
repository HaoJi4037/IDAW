<?php
function renderMenuToHTML($currentPageId, $currentLanguage) {
    $mymenu = array(
        'accueil' => array('Accueil'),
        'cv' => array('Cv'),
        'hobbies' => array('Mes Hobbies')
    );
    echo "<ul>";
    foreach($mymenu as $pageId => $pageParameters) {
        if ($pageId == $currentPageId) {
            echo "<li><a id='currentpage' href='http://localhost/Resultat3/index.php?page=" . $pageId . "'>" . $pageParameters[0] . "</a></li>";
        }else{
            echo "<li><a  href='http://localhost/Resultat3/index.php?page=" . $pageId . "'>" . $pageParameters[0] . "</a></li>";
        }
    }
    if ($currentLanguage == "en") {
        echo "<li><a href='http://localhost/Resultat3/index.php?page=" . $currentPageId . "&lang=fr'>fr</a></li>";
    } else {
        echo "<li><a href='http://localhost/Resultat3/index.php?page=" . $currentPageId . "&lang=en'>en</a></li>";
    }
    echo "</ul>";
}
?>