<?php
require_once "template_header.php" ;
require_once "template_menu.php" ;
$currentPageId = 'accueil';
$currentLanguage = 'en';
if(isset($_GET['page'])) {
    $currentPageId = $_GET['page'];
}
if(isset($_GET['lang'])) {
    $currentLanguage = $_GET['lang'];
}
?>
<header id="header">
    <h1>Hao Ji IDAW TP2 ex7</h1>
</header>

<div id="nav">
<?php
renderMenuToHTML($currentPageId, $currentLanguage);
?>
</div>

<section class="corps">

<?php
$pageToInclude = $currentLanguage . "/" . $currentPageId . ".php";
if(is_readable($pageToInclude))
    require_once($pageToInclude);
else {
}
?>

</section>

<?php
require_once("template_footer.php");
?>