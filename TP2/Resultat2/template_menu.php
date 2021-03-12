<?php
function renderMenuToHTML($currentPageId) {
    $mymenu = array(
        'accueil' => array('Accueil'),
        'cv' => array('Cv'),
        'hobbies' => array('Mes Hobbies')
    );
    echo "<ul>";
    foreach($mymenu as $pageId => $pageParameters) {
      echo "<li>";
        if ($pageId == $currentPageId) 
            echo "<a id='currentpage' href='http://localhost/Resultat2/index.php?page=" . $pageId . "'>" . $pageParameters[0] . "</a>";
            echo "</li>";
    }
    echo "</ul>";
}
?>